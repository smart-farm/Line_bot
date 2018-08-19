 <?php
  

function send_LINE($msg){
 $access_token = '9JsyVZesJeoMHmqSvsGVLCJKHQOd3A1VoZW9GP3C+Ps/hNoFy6rPZY66MOlbViN7em5Wfs7lWzVed/YBPVCyvrenb4iJou76TTvvGkMDj8InRwGgHGjPrLv04FHpN9OEay7V9yLs2Jz+XRPVnuLSYgdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'U0d0986d3999098bd1105d89299ee122e',
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
