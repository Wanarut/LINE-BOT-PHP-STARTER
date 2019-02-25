<?php
 require("pub.php");
 require("line.php");

// Get POST body content
$content = file_get_contents('php://input');
// Parse JSON

$events = json_decode($content, true);
// Validate parsed JSON data
if (!is_null($events['ESP'])) {
	
	send_LINE($events['ESP']);
		
	echo "OK";
	}
if (!is_null($events['events'])) {
	echo "line bot";
	// Loop through each event
	foreach ($events['events'] as $event) {
		// Reply only when message sent is in 'text' format
		if ($event['type'] == 'message' && $event['message']['type'] == 'text') {
			// Get text sent
			$text = $event['message']['text'];
			// Get replyToken
			$replyToken = $event['replyToken'];

			// Build message to reply back

			$Topic = "CH1" ;
			if ($text == "on"){
				$text = "1";
			}else if($text == "off"){
				$text = "0";
			}
			getMqttfromlineMsg($Topic,$text);
			   
			
		}
	}
}
sleep(5);
$Topic = "CH1" ;
$text = "Off";
getMqttfromlineMsg($Topic,$text);
echo "OK3";
?>
