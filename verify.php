<?php
$access_token = '9Lz3tBHzWtx1wrvf3gQ/R1ECSnczWjLvaONDWwawALoj9b9hAJwfY9kh/w4lpt8gSUvAxuoICfjPSEt5EtCJln+vnAwAuoBxE2s6dW6yQyhxL/vq67ifNmqyyYafp40wSmABhC3nXRcKNMyAMIutggdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
