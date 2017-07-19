<?php 
	
	$access_token = 'GYPH+vGzkXFj8mvvS1oLt0qVzXsPczP5vlZVJNMkZCCXu4dClrTBpY++Ook0NOlbkAnIG4CdbtJckAubs0BCS6bBHaHzCPW62bAOnNdRk2T0/kGOaHxL2gujfi6dmxs7g+Yn8DIXSijSrv9xz9uaKgdB04t89/1O/w1cDnyilFU=';

	$url = 'https://api.line.me/v1/oauth/verify';

	$headers = array('Authorization: Bearer ' . $access_token);

	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	$result = curl_exec($ch);
	curl_close($ch);

	echo $result;
?>