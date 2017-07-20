<?php 
	
	$access_token = 'GYPH+vGzkXFj8mvvS1oLt0qVzXsPczP5vlZVJNMkZCCXu4dClrTBpY++Ook0NOlbkAnIG4CdbtJckAubs0BCS6bBHaHzCPW62bAOnNdRk2T0/kGOaHxL2gujfi6dmxs7g+Yn8DIXSijSrv9xz9uaKgdB04t89/1O/w1cDnyilFU=';

	// Get POST body content
	$content = file_get_contents('php://input');
 
	$url = 'https://api.line.me/v2/bot/message/push';

	$messages = [
					'type' => 'text',
					'text' => 'ประกาศจร้าประกาศ'
				];


	$data = [
		'to' => '@udg1192m',
		'messages' => [$messages],
	];
	$post = json_encode($data);
	$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	$result = curl_exec($ch);
	curl_close($ch);

	echo $result . "\r\n";
		 
?>