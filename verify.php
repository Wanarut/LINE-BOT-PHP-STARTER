<?php
$access_token = 'cS7vOpISooL/zsq25sbzYQ2gcpgsPsF+ZVJLcXtfQOJMAEkzubB2Mva/YfNmEL3RSUvAxuoICfjPSEt5EtCJln+vnAwAuoBxE2s6dW6yQyhgsmdH/alG1nBNAPGYEBnzNQ7eKgzO+XNc0iacrppa2gdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
