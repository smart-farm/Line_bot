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
   #ตัวอย่าง Message Type "Text + Sticker"
   if($message == "เลขเสียว"){
      $arrayPostData['to'] = $id;
      $arrayPostData['messages'][0]['type'] = "text";
      $arrayPostData['messages'][0]['text'] = "﻿วิ่งบน รูด บ/ล. (สูตร 9)
➖➖➖➖➖➖➖➖
13=9=093/93 ✔️
14=9=392/27 ✔️
15=9=725/64 ❌
16=9=832/31 ❌
17=9=969/13 ✔️
18=9=361/22 ❌
19=9=896/97 ✔️
20=9=460/54 ❌
21=9=049/71 ✔️
22=9=570/49 ✔️
23=9=รอผล..
➖➖➖➖➖➖➖➖
www.phonenana.com";
  //    $arrayPostData['messages'][1]['type'] = "sticker";
    //  $arrayPostData['messages'][1]['packageId'] = "2";
    //  $arrayPostData['messages'][1]['stickerId'] = "34";
      pushMsg($arrayHeader,$arrayPostData);
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
