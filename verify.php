<?php
$access_token = 'IkeDFIgB4rQLQgt2usDQyyw4SD2UqphwoX7kSZpyhF1X7yeRMm+MsdVSCnaqYqRTyaCKKJtyhkalh/uEg7/KSLq7lgHz5ue+jMo89xTYeg9tkUPFcKwXQkoVpJEvWT812UT9T2mHqw+E87aaE4ZySQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
