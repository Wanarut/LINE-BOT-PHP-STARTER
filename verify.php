<?php
$access_token = 'rikK8KJjNTEw2AoogxaWeRDJwq0ii5KLMfP4axQnCpp+AZns7rkU7bUT1mtI2rC6SUvAxuoICfjPSEt5EtCJln+vnAwAuoBxE2s6dW6yQyitVVveCH4Yq/clkUec1Rs4+nYEVry4V2UzH9oeTWUMDQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;