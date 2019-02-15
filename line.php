 <?php
  

function send_LINE($msg){
 $access_token = 'wYMUKxKUEd8UU3ZknVLJXzxslvKee+sgac4r9NwO0soFPwtxbgC19ddumUbV2eo4mejaN+gQZSfuPfEsMgV5+7TuQTzJxdFg0qMc5NCg6EUYjZL4guGO0qeHn3gnAL9IMUbTP1tsYCDKnP7jxeXBzwdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'Udd96b477e25325779280235c668c1b86',
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
}

?>
