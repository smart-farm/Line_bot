<?php
   $accessToken = "SketXvTppjjOuu1PyXvPRQxgxThH3k9XiWzGA+Xw4FqEtC9CovGVv1y50SbAIIB7QxlpEotvx0RBGsr4foNcaFH4wa3Hsmf3Y2ni1Lfvl9lyfbv8fxEuDWCDtI2V+c0UAZbt0T68NXIWwYnDkXmhTQdB04t89/1O/w1cDnyilFU=";//copy ข้อความ Channel access token ตอนที่ตั้งค่า
   $content = file_get_contents('php://input');
   $arrayJson = json_decode($content, true);
   $arrayHeader = array();
   $arrayHeader[] = "Content-Type: application/json";
   $arrayHeader[] = "Authorization: Bearer {$accessToken}";
   //รับข้อความจากผู้ใช้
   $message = $arrayJson['events'][0]['message']['text'];
   //รับ id ของผู้ใช้
   $id = $arrayJson['events'][0]['source']['groupId'];
   $idsmile ='Cd8562369e04d45495e12c8c830ea3863';
   $idfree ='C6158fb947c96653e2706ce8eb2dbae9b';
   $idVip ='C678b1d0f7f216ba96cf8b6e784bac718';


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
