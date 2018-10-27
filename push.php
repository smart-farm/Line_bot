<?php
   $accessToken = "sW5KonkE+78G+ayD9/5XrwmuDDXXYovBJAXBwRXCXz3TwmzmUJ7S3rmI9vzyubS/Cidc4AZAwWPV499vmoF8GTzpf0kMT4IyA2OD1gpmtzzQDdLvimCPadn407NeLc1LLc/JCU/o7Bc8znWurkBG/QdB04t89/1O/w1cDnyilFU=";//copy ข้อความ Channel access token ตอนที่ตั้งค่า
   $content = file_get_contents('php://input');
   $arrayJson = json_decode($content, true);
   $arrayHeader = array();
   $arrayHeader[] = "Content-Type: application/json";
   $arrayHeader[] = "Authorization: Bearer {$accessToken}";
   //รับข้อความจากผู้ใช้
   $message = $arrayJson['events'][0]['message']['text'];
   //รับ id ของผู้ใช้
   $id = $arrayJson['events'][0]['source']['groupId'];



   if($message == "เลขปัก"){
     $requal = file_get_contents("http://tornvidia.thddns.net:5152/easylotto/line-bot/push-puk.php");
     $content = file_get_contents("http://tornvidia.thddns.net:5152/easylotto/line-bot/reviews.txt", "\xEF\xBB\xBF");
    // echo $content;
      $arrayPostData['to'] = $id;
      $arrayPostData['messages'][0]['type'] = "text";
      $arrayPostData['messages'][0]['text'] = $content;
      pushMsg($arrayHeader,$arrayPostData);
     $requal = file_get_contents("http://tornvidia.thddns.net:5152/easylotto/line-bot/del-bot.php");
   }
   if($message == "เลขวิน"){
     $requal = file_get_contents("http://tornvidia.thddns.net:5152/easylotto/line-bot/push-win.php");
     $content = file_get_contents("http://tornvidia.thddns.net:5152/easylotto/line-bot/reviews.txt", "\xEF\xBB\xBF");
    // echo $content;
      $arrayPostData['to'] = $id;
      $arrayPostData['messages'][0]['type'] = "text";
      $arrayPostData['messages'][0]['text'] = $content;
      pushMsg($arrayHeader,$arrayPostData);
     $requal = file_get_contents("http://tornvidia.thddns.net:5152/easylotto/line-bot/del-bot.php");
   }

   if($message == "เลขเสียว"){
     $requal = file_get_contents("http://tornvidia.thddns.net:5152/easylotto/line-bot/push-seal.php");
     $content = file_get_contents("http://tornvidia.thddns.net:5152/easylotto/line-bot/reviews.txt", "\xEF\xBB\xBF");
    // echo $content;
      $arrayPostData['to'] = $id;
      $arrayPostData['messages'][0]['type'] = "text";
      $arrayPostData['messages'][0]['text'] = $content;
      pushMsg($arrayHeader,$arrayPostData);
     $requal = file_get_contents("http://tornvidia.thddns.net:5152/easylotto/line-bot/del-bot.php");
   }

   if($message == "เลขรูด"){
     $requal = file_get_contents("http://tornvidia.thddns.net:5152/easylotto/line-bot/push-rood.php");
     $content = file_get_contents("http://tornvidia.thddns.net:5152/easylotto/line-bot/reviews.txt", "\xEF\xBB\xBF");
    // echo $content;
      $arrayPostData['to'] = $id;
      $arrayPostData['messages'][0]['type'] = "text";
      $arrayPostData['messages'][0]['text'] = $content;
      pushMsg($arrayHeader,$arrayPostData);
     $requal = file_get_contents("http://tornvidia.thddns.net:5152/easylotto/line-bot/del-bot.php");
   }

   function pushMsg($arrayHeader,$arrayPostData){
      $strUrl = "https://api.line.me/v2/bot/message/push";
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL,$strUrl);
      curl_setopt($ch, CURLOPT_HEADER, false);
      curl_setopt($ch, CURLOPT_POST, true);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $arrayHeader);
      curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($arrayPostData));
      curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      $result = curl_exec($ch);
      curl_close ($ch);
   }
   exit;
?>
