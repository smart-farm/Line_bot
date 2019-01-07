<?php
$accessToken = "bkWRCfjMgAhez42CCUY96y7JY1CQOJTRZuE/HfeOFWQwj+6ZYfrj9C9ljW44fgQ/G3ZPh5FzlBAtZ7fgwdAAJVrnGKXg6ONTa5dNCAh57sifRQCfcjYB8BVyLhfeyl4WDWiLRkrCTXc55lAHixMKaAdB04t89/1O/w1cDnyilFU=";//copy ข้อความ Channel access token ตอนที่ตั้งค่า
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


date_default_timezone_set("Asia/Bangkok");
 $today=date("Y-m-d");

/*if($message=="เลขวิน"||$message=="เลขรูด"||$message=="เลขเสียว"||$message=="เลขปัก"||$message=="เลขเจาะ"){
 if($id==$idcheck||$id==$idcheck1){ //||$id==$idcheck1
if(time()>=strtotime("00:00:00") && time()<strtotime("09:00:00")){

   $arrayPostData['to'] =$id;
   $arrayPostData['messages'][0]['type'] = "text";
   $arrayPostData['messages'][0]['text'] ="
 ==============================
        ระบบเปิดให้บริการตั้งแต่เวลา
               09.00-00.00
 ==============================
easylotto.in.th";
pushMsg($arrayHeader,$arrayPostData);
$idfree ='C6158fb947c96653e2706ce8eb2dbae9bbbbbb';
$idfree2 ='C000b66e767252bdc4efb43fb116d798eeee';
}else{
$idfree2 ='C000b66e767252bdc4efb43fb116d798e';
$idfree ='C6158fb947c96653e2706ce8eb2dbae9b';

}
}
}*/



//$idadmin ='C701d3b84cd8afc5d2800f7b1b0f0b09c';

$idfree='Cf291e9b801e5e4e6a0993ae2ee8de927';
$idvip='Ca1435d8d07b5c377b3483c958cbc0829';



$formula =["เลขวิน","เลขรูด","เลขเสียว","เลขปัก","เลขตอง","เลขมัดบน","เลขมัดล่าง","เลขรูดบน","เลขรูดล่าง","หวยรัฐบน","หวยรัฐล่าง","วินบน","วินล่าง","รูดบน","รูดล่าง","รูดบนล่าง","ปักสิบบน","ปักหน่วยบน"
,"ปักสิบล่าง","ปักหน่วยล่าง","เลขเจาะ"]; //,,"เลขวินบน","เลขวินล่าง","เลขรูดบน","เลขรูดล่าง"
$url =["http://easylotto.in.th/line-huay/push-win.php","http://easylotto.in.th/line-huay/push-rood.php","http://easylotto.in.th/line-huay/push-seal.php"
,"http://easylotto.in.th/line-huay/push-puk.php","http://easylotto.in.th/line-huay/remind.php",
"http://easylotto.in.th/line-huay/yeekee-bundle.php","http://easylotto.in.th/line-huay/yeekee-bundle-lo.php","http://easylotto.in.th/line-huay/push-rood-on.php"
,"http://easylotto.in.th/line-huay/push-rood-lower.php","http://easylotto.in.th","http://easylotto.in.th","http://easylotto.in.th/line-huay/line_winon.php?formula=wh"
,"http://easylotto.in.th/line-huay/line_winon.php?formula=wl","http://easylotto.in.th/line-huay/line_winon.php?formula=rh","http://easylotto.in.th/line-huay/line_winon.php?formula=rl"
,"http://easylotto.in.th/line-huay/line_winon.php?formula=rhl","http://easylotto.in.th/line-huay/line_winon.php?formula=ph1"
,"http://easylotto.in.th/line-huay/line_winon.php?formula=ph2","http://easylotto.in.th/line-huay/line_winon.php?formula=pl0","http://easylotto.in.th/line-huay/line_winon.php?formula=pl1"
,"http://easylotto.in.th/line-huay/yeekee-drill.php"];

$url1=["http://easylotto.in.th/line-huay/reviews-win.txt","http://easylotto.in.th/line-huay/reviews-rood.txt","http://easylotto.in.th/line-huay/reviews-rood.txt",
"http://easylotto.in.th/line-huay/reviews-puk.txt","http://easylotto.in.th/line-huay/reviews-tong.txt"
,"http://easylotto.in.th/line-huay/reviews-on.txt","http://easylotto.in.th/line-huay/reviews-lo.txt","http://easylotto.in.th/line-huay/reviews-rood.txt",
"http://easylotto.in.th/line-huay/reviews-rood.txt","http://easylotto.in.th/line-huay/lotto.txt","http://easylotto.in.th/line-huay/lotto-in.txt"
,"http://easylotto.in.th/line-huay/reviews-winon.txt","http://easylotto.in.th/line-huay/reviews-winon.txt","http://easylotto.in.th/line-huay/reviews-winon.txt",
"http://easylotto.in.th/line-huay/reviews-winon.txt","http://easylotto.in.th/line-huay/reviews-winon.txt","http://easylotto.in.th/line-huay/reviews-winon.txt"
,"http://easylotto.in.th/line-huay/reviews-winon.txt","http://easylotto.in.th/line-huay/reviews-winon.txt","http://easylotto.in.th/line-huay/reviews-winon.txt"
,"http://easylotto.in.th/line-huay/reviews-drill.txt"];

$remove=["http://easylotto.in.th/line-huay/del-win.php","http://easylotto.in.th/line-huay/del-rood.php","http://easylotto.in.th/line-huay/del-rood.php",
"http://easylotto.in.th/line-huay/del-bot.php","http://easylotto.in.th/line-huay/del-tong.php",
"http://easylotto.in.th/line-huay/del-mux-on.php","http://easylotto.in.th/line-huay/del-mux-lo.php","http://easylotto.in.th/line-huay/del-rood.php"
,"http://easylotto.in.th/line-huay/del-rood.php","http://easylotto.in.th","http://easylotto.in.th","http://easylotto.in.th/line-huay/del-winon.php"
,"http://easylotto.in.th/line-huay/del-winon.php","http://easylotto.in.th/line-huay/del-winon.php","http://easylotto.in.th/line-huay/del-winon.php"
,"http://easylotto.in.th/line-huay/del-winon.php","http://easylotto.in.th/line-huay/del-winon.php","http://easylotto.in.th/line-huay/del-winon.php"
,"http://easylotto.in.th/line-huay/del-winon.php","http://easylotto.in.th/line-huay/del-winon.php","http://easylotto.in.th/line-huay/del-drill.php"];

/*$useradmin1="U890a31fb1c5c8f07cc06e8ae47202f75";
$useradmin2="U2f4fe4ca40895f6913b908a4c6fdcb95";
$useradmin3="U6d0021f8e019a176ff0c11a6b6677bcb";*/
if($id==$idvip){
for($i = 0; $i<count($formula);$i++) {
    if($message==$formula[$i]){

         $requal = file_get_contents($url[$i]);
         if($requal!=""){
         $content = file_get_contents($url1[$i], "\xEF\xBB\xBF");
          $arrayPostData['to'] = $id;
          $arrayPostData['messages'][0]['type'] = "text";
          $arrayPostData['messages'][0]['text'] = $content;
          pushMsg($arrayHeader,$arrayPostData);
         $requal = file_get_contents($remove[$i]);


}else{
  $arrayPostData['to'] = $id;
  $arrayPostData['messages'][0]['type'] = "text";
  $arrayPostData['messages'][0]['text'] ="คำสั่งในการเรียกเลข อยู่ช่วงเวลาปรับปรุง ขออภัยในความไม่สะดวกครับ ดูเลขเพิ่มเติมได้ที่ :http://easylotto.in.th";
  $arrayPostData['messages'][1]['type'] = "sticker";
  $arrayPostData['messages'][1]['packageId'] = "2";
  $arrayPostData['messages'][1]['stickerId'] = "34";
  pushMsg($arrayHeader,$arrayPostData);

}
      }
    }
}



$formulafree =["เลขวิน","เลขรูด","เลขเสียว","เลขปัก","เลขรูดบน","เลขรูดล่าง","เลขเจาะ","เลขตอง"];
$formulacheck =["เลขมัดบน","เลขมัดล่าง","หวยรัฐบน","หวยรัฐล่าง","วินบน","วินล่าง","รูดบน","รูดล่าง","รูดบนล่าง","ปักสิบบน","ปักหน่วยบน"
,"ปักสิบล่าง","ปักหน่วยล่าง"];
$urlfree =["http://easylotto.in.th/line-huay/push-win.php","http://easylotto.in.th/line-huay/push-rood.php","http://easylotto.in.th/line-huay/push-seal.php"
,"http://easylotto.in.th/line-huay/push-puk.php","http://easylotto.in.th/line-huay/push-rood-on.php"
,"http://easylotto.in.th/line-huay/push-rood-lower.php","http://easylotto.in.th/line-huay/yeekee-drill.php","http://easylotto.in.th/line-huay/remind.php"];

$urlfrees=["http://easylotto.in.th/line-huay/reviews-win.txt","http://easylotto.in.th/line-huay/reviews-rood.txt","http://easylotto.in.th/line-huay/reviews-rood.txt",
"http://easylotto.in.th/line-huay/reviews-puk.txt","http://easylotto.in.th/line-huay/reviews-rood.txt",
"http://easylotto.in.th/line-huay/reviews-rood.txt","http://easylotto.in.th/line-huay/reviews-drill.txt","http://easylotto.in.th/line-huay/reviews-tong.txt"];

$remove1=["http://easylotto.in.th/line-huay/del-win.php","http://easylotto.in.th/line-huay/del-rood.php","http://easylotto.in.th/line-huay/del-rood.php",
"http://easylotto.in.th/line-huay/del-bot.php","http://easylotto.in.th/line-huay/del-rood.php"
,"http://easylotto.in.th/line-huay/del-rood.php","http://easylotto.in.th/line-huay/del-drill.php","http://easylotto.in.th/line-huay/del-tong.php"];

/*$useradmin1="U890a31fb1c5c8f07cc06e8ae47202f75";
$useradmin2="U2f4fe4ca40895f6913b908a4c6fdcb95";
$useradmin3="U6d0021f8e019a176ff0c11a6b6677bcb";*/
if($id==$idfree){
for($i = 0; $i<count($formulafree);$i++) {
    if($message==$formulafree[$i]){

         $requal = file_get_contents($urlfree[$i]);
         if($requal!=""){
         $content = file_get_contents($urlfrees[$i], "\xEF\xBB\xBF");
          $arrayPostData['to'] = $id;
          $arrayPostData['messages'][0]['type'] = "text";
          $arrayPostData['messages'][0]['text'] = $content;
          pushMsg($arrayHeader,$arrayPostData);
         $requal = file_get_contents($remove1[$i]);


}else{
  $arrayPostData['to'] = $id;
  $arrayPostData['messages'][0]['type'] = "text";
  $arrayPostData['messages'][0]['text'] ="คำสั่งในการเรียกเลข อยู่ช่วงเวลาปรับปรุง ขออภัยในความไม่สะดวกครับ ดูเลขเพิ่มเติมได้ที่ :http://easylotto.in.th";
  $arrayPostData['messages'][1]['type'] = "sticker";
  $arrayPostData['messages'][1]['packageId'] = "2";
  $arrayPostData['messages'][1]['stickerId'] = "34";
  pushMsg($arrayHeader,$arrayPostData);

}
}
    }
}



if($id==$idfree){
for($i = 0; $i<count($formulacheck);$i++) {
    if($message==$formulacheck[$i]){

          $arrayPostData['to'] = $id;
          $arrayPostData['messages'][0]['type'] = "text";
          $arrayPostData['messages'][0]['text'] ="คำสั่งเลขยี่กี เว็บหวย
 ➖➖➖➖➖➖➖➖
 1. เลขวิน
 2. เลขรูด
 3. เลขเสียว้
 4. เลขปัก
 5. เลขรูดบน
 6. เลขรูดล่าง
 7. เลขเจาะ
 8. เลขตอง
 ➖➖➖➖➖➖➖➖
 สนใจสูตรอื่นๆ อีก 14 สูตร
 สมัครผ่านลิงค์เรา : https://bit.ly/2QTYwtT
 หรือสมัครรายเดือน : https://bit.ly/2GXD437";
          pushMsg($arrayHeader,$arrayPostData);

}
    }
}


/*
if($message=="หมดอายุ"){
if($userid==$useradmin1||$userid==$useradmin2||$userid==$useradmin3){
$requal = file_get_contents("http://easylotto.in.th/line-bot/user-endtime.php");
$content = file_get_contents("http://easylotto.in.th/line-bot/user-endtime.txt", "\xEF\xBB\xBF");
 $arrayPostData['to'] = $id;
 $arrayPostData['messages'][0]['type'] = "text";
 $arrayPostData['messages'][0]['text'] = $content;
 pushMsg($arrayHeader,$arrayPostData);
 $requal = file_get_contents("http://easylotto.in.th/line-bot/del-user.php");

}
}*/







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
