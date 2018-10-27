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
   if($message == "เลขวิน"){
      $arrayPostData['to'] = $id;
      $arrayPostData['messages'][0]['type'] = "text";
      $arrayPostData['messages'][0]['text'] = "﻿แทงบน + สลับเลข (สูตร ACH)
➖➖➖➖➖➖➖➖
14=67890123=392/27 ✔️
15=90123456=725/64 ✔️
16=89012345=832/31 ✔️
17=45678901=969/13 ✔️
18=56789012=361/22 ✔️
19=45678901=896/97 ✔️
20=45678901=460/54 ✔️
21=56789012=049/71 ❌
22=67890123=570/49 ✔️
23=12345678=086/36 ✔️

รอบที่ 24 : 12345678 (ดับ 9/0)
➖➖➖➖➖➖➖➖
12, 13, 14, 15, 16, 17, 18
23, 24, 25, 26, 27, 28, 34
35, 36, 37, 38, 45, 46, 47
48, 56, 57, 58, 67, 68, 78

รอบที่ 24 : สามตัวโต๊ด (ดับ 9/0)
➖➖➖➖➖➖➖➖
123, 124, 125, 126, 127
128, 134, 135, 136, 137
138, 145, 146, 147, 148
156, 157, 158, 167, 168
178, 234, 235, 236, 237
238, 245, 246, 247, 248
256, 257, 258, 267, 268
278, 345, 346, 347, 348
356, 357, 358, 367, 368
378, 456, 457, 458, 467
468, 478, 567, 568, 578
678
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
