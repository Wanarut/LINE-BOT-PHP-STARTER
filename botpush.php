<?php



require "vendor/autoload.php";

$access_token = 'wYMUKxKUEd8UU3ZknVLJXzxslvKee+sgac4r9NwO0soFPwtxbgC19ddumUbV2eo4mejaN+gQZSfuPfEsMgV5+7TuQTzJxdFg0qMc5NCg6EUYjZL4guGO0qeHn3gnAL9IMUbTP1tsYCDKnP7jxeXBzwdB04t89/1O/w1cDnyilFU=';

$channelSecret = '6097be547eea8294db40c7dbb6a4a566';

$pushID = 'Udd96b477e25325779280235c668c1b86';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







