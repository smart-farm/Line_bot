<?php
$accessToken = "InWnVIay3q+hX02xMk56rUTzfFYMgaMxoI0AcLOc5A8JQUtK5Mu1Sl+3rJQcnP0tR7M+4Gz36eL+OemRlV46yrM3ph3y2CpOTS7hESnBiq6SyeiPBKOLeGMP3BUTzhw6755KdyXqPWeRfaja6LUt2QdB04t89/1O/w1cDnyilFU=";//copy ข้อความ Channel access token ตอนที่ตั้งค่า
$content = file_get_contents('php://input');
$arrayJson = json_decode($content, true);
$arrayHeader = array();
$arrayHeader[] = "Content-Type: application/json";
$arrayHeader[] = "Authorization: Bearer {$accessToken}";
//รับข้อความจากผู้ใช้
$message = $arrayJson['events'][0]['message']['text'];
//รับ id ของผู้ใช้
$id = $arrayJson['events'][0]['source']['groupId'];
$userid = $arrayJson['events'][0]['source']['userId'];
if($message == "gettoken"){
    $arrayPostData['to'] = $id;
    $arrayPostData['messages'][0]['type'] = "text";
    $arrayPostData['messages'][0]['text'] =$id;
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
