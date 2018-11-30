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
//$idsmile ='Cd8562369e04d45495e12c8c830ea3863';
//$checkid ='Cb2a0ab426f804a15c8233782ea28805d':

$idcheck ='C6158fb947c96653e2706ce8eb2dbae9b';
$idcheck1 ='C000b66e767252bdc4efb43fb116d798e';
//$checkroom ='Cb2a0ab426f804a15c8233782ea28805d';
//$checkloop=['C6158fb947c96653e2706ce8eb2dbae9b','Cb2a0ab426f804a15c8233782ea28805d'];
$idfree ='C6158fb947c96653e2706ce8eb2dbae9b';
$idfree2 ='C000b66e767252bdc4efb43fb116d798e';

date_default_timezone_set("Asia/Bangkok");
 $today=date("Y-m-d");

 /*if($message=="เลขวิน"||$message=="เลขรูด"||$message=="เลขเสียว"||$message=="เลขปัก"||$message=="เลขเจาะ"){
 if($id==$idcheck){
 if(time()>=strtotime("08:00:00")&& time()<strtotime("00:00:00 + 3 hour"))
 {
  $today=date("Y-m-d",strtotime("-1 days",strtotime($today)));
  $idfree ='C6158fb947c96653e2706ce8eb2dbae9b';
  //$idfree2 ='C000b66e767252bdc4efb43fb116d798e';

}else{
  $idfree ='C6158fb947c96653e2706ce8eb2dbae9bbbbbb';
  //$idfree2 ='C000b66e767252bdc4efb43fb116d798eeee';
  $arrayPostData['to'] =$id;
  $arrayPostData['messages'][0]['type'] = "text";
  $arrayPostData['messages'][0]['text'] ="
==================================
       ระบบเปิดให้บริการตั้งแต่เวลา 08.00-02.00
==================================";

  pushMsg($arrayHeader,$arrayPostData);


}
}
}*/


//$id='C22521a49473a70959e78d41650314a50';
$idadmin ='C701d3b84cd8afc5d2800f7b1b0f0b09c';
//$idvip ='C22521a49473a70959e78d41650314a50';
$id199 ='C678b1d0f7f216ba96cf8b6e784bac718xxx';
//ห้องใหม่
$idvip1='Cfee29536f26d44c081fe4eeb08a5400e';
$idvip2='Cd95550591ae6ca7084af635c0d822c59';
//,"http://www.phonenana.com/line-bot/push-flow.php"

$formula =["เลขวิน","เลขรูด","เลขเสียว","เลขปัก","เลขตอง","เลขมัดบน","เลขมัดล่าง","เลขรูดบน","เลขรูดล่าง","หวยรัฐบน","หวยรัฐล่าง","วินบน","วินล่าง","รูดบน","รูดล่าง","รูดบนล่าง","ปักสิบบน","ปักหน่วยบน"
,"ปักสิบล่าง","ปักหน่วยล่าง","เลขเจาะ"]; //,,"เลขวินบน","เลขวินล่าง","เลขรูดบน","เลขรูดล่าง"
$url =["http://www.phonenana.com/line-bot/push-win.php","http://www.phonenana.com/line-bot/push-rood.php","http://www.phonenana.com/line-bot/push-seal.php"
,"http://www.phonenana.com/line-bot/push-puk.php","http://www.phonenana.com/line-bot/remind.php",
"http://www.phonenana.com/line-bot/yeekee-bundle.php","http://www.phonenana.com/line-bot/yeekee-bundle-lo.php","http://www.phonenana.com/line-bot/push-rood-on.php"
,"http://www.phonenana.com/line-bot/push-rood-lower.php","http://www.phonenana.com","http://www.phonenana.com","http://www.phonenana.com/line-bot/line_winon.php?formula=wh"
,"http://www.phonenana.com/line-bot/line_winon.php?formula=wl","http://www.phonenana.com/line-bot/line_winon.php?formula=rh","http://www.phonenana.com/line-bot/line_winon.php?formula=rl"
,"http://www.phonenana.com/line-bot/line_winon.php?formula=rhl","http://www.phonenana.com/line-bot/line_winon.php?formula=ph1"
,"http://www.phonenana.com/line-bot/line_winon.php?formula=ph2","http://www.phonenana.com/line-bot/line_winon.php?formula=pl0","http://www.phonenana.com/line-bot/line_winon.php?formula=pl1"
,"http://www.phonenana.com/line-bot/yeekee-drill.php"];
/*,"http://www.phonenana.com/line-bot/push-win-on.php","http://www.phonenana.com/line-bot/push-win-lower.php","http://www.phonenana.com/line-bot/push-rood-on.php"
,*/
//"http://www.phonenana.com/line-bot/reviews-flow.txt",
$url1=["http://www.phonenana.com/line-bot/reviews-win.txt","http://www.phonenana.com/line-bot/reviews-rood.txt","http://www.phonenana.com/line-bot/reviews-rood.txt",
"http://www.phonenana.com/line-bot/reviews-puk.txt","http://www.phonenana.com/line-bot/reviews-tong.txt"
,"http://www.phonenana.com/line-bot/reviews-on.txt","http://www.phonenana.com/line-bot/reviews-lo.txt","http://www.phonenana.com/line-bot/reviews-rood.txt",
"http://www.phonenana.com/line-bot/reviews-rood.txt","http://www.phonenana.com/line-bot/lotto.txt","http://www.phonenana.com/line-bot/lotto-in.txt"
,"http://www.phonenana.com/line-bot/reviews-winon.txt","http://www.phonenana.com/line-bot/reviews-winon.txt","http://www.phonenana.com/line-bot/reviews-winon.txt",
"http://www.phonenana.com/line-bot/reviews-winon.txt","http://www.phonenana.com/line-bot/reviews-winon.txt","http://www.phonenana.com/line-bot/reviews-winon.txt"
,"http://www.phonenana.com/line-bot/reviews-winon.txt","http://www.phonenana.com/line-bot/reviews-winon.txt","http://www.phonenana.com/line-bot/reviews-winon.txt"
,"http://www.phonenana.com/line-bot/reviews-drill.txt"];
/*,"http://www.phonenana.com/line-bot/reviews-win.txt","http://www.phonenana.com/line-bot/reviews-win.txt","http://www.phonenana.com/line-bot/reviews-rood.txt"
,"http://www.phonenana.com/line-bot/reviews-rood.txt"*/
//"http://www.phonenana.com/line-bot/del-flow.php",
$remove=["http://www.phonenana.com/line-bot/del-win.php","http://www.phonenana.com/line-bot/del-rood.php","http://www.phonenana.com/line-bot/del-rood.php",
"http://www.phonenana.com/line-bot/del-bot.php","http://www.phonenana.com/line-bot/del-tong.php",
"http://www.phonenana.com/line-bot/del-mux-on.php","http://www.phonenana.com/line-bot/del-mux-lo.php","http://www.phonenana.com/line-bot/del-rood.php"
,"http://www.phonenana.com/line-bot/del-rood.php","http://www.phonenana.com","http://www.phonenana.com","http://www.phonenana.com/line-bot/del-winon.php"
,"http://www.phonenana.com/line-bot/del-winon.php","http://www.phonenana.com/line-bot/del-winon.php","http://www.phonenana.com/line-bot/del-winon.php"
,"http://www.phonenana.com/line-bot/del-winon.php","http://www.phonenana.com/line-bot/del-winon.php","http://www.phonenana.com/line-bot/del-winon.php"
,"http://www.phonenana.com/line-bot/del-winon.php","http://www.phonenana.com/line-bot/del-winon.php","http://www.phonenana.com/line-bot/del-drill.php"];

/*,
"http://www.phonenana.com/line-bot/del-win.php","http://www.phonenana.com/line-bot/del-win.php","http://www.phonenana.com/line-bot/del-rood.php"
,"http://www.phonenana.com/line-bot/del-rood.php"*/
//sleep(1);
if($id==$id199||$id==$idvip1||$id==$idvip2||$id==$idadmin){
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
  $arrayPostData['messages'][0]['text'] ="คำสั่งในการเรียกเลข อยู่ช่วงเวลาปรับปรุง ขออภัยในความไม่สะดวกครับ ดูเลขเพิ่มเติมได้ที่ :http://www.phonenana.com";
  $arrayPostData['messages'][1]['type'] = "sticker";
  $arrayPostData['messages'][1]['packageId'] = "2";
  $arrayPostData['messages'][1]['stickerId'] = "34";
  pushMsg($arrayHeader,$arrayPostData);

}
      }
    }
}

$formula2 =["เลขวิน","เลขรูด","เลขเสียว","เลขปัก","เลขเจาะ"];
$formula3 =["เลขไหล","เลขตอง","เลขมัดบน","เลขมัดล่าง","หวยรัฐบน","หวยรัฐล่าง","เลขรูดบน","เลขรูดล่าง","เลขวินบน","เลขวินล่าง","วินบน","วินล่าง","รูดบน","รูดล่าง","รูดบนล่าง","ปักสิบบน","ปักหน่วยบน"
,"ปักสิบล่าง","ปักหน่วยล่าง"];
$url3 =["http://www.phonenana.com/line-bot/push-win.php","http://www.phonenana.com/line-bot/push-rood.php","http://www.phonenana.com/line-bot/push-seal.php"
,"http://www.phonenana.com/line-bot/push-puk.php","http://www.phonenana.com/line-bot/yeekee-drill.php"];


$url4=["http://www.phonenana.com/line-bot/reviews-win.txt","http://www.phonenana.com/line-bot/reviews-rood.txt","http://www.phonenana.com/line-bot/reviews-rood.txt",
"http://www.phonenana.com/line-bot/reviews-puk.txt","http://www.phonenana.com/line-bot/reviews-drill.txt"];


$remove1=["http://www.phonenana.com/line-bot/del-win.php","http://www.phonenana.com/line-bot/del-rood.php","http://www.phonenana.com/line-bot/del-rood.php",
"http://www.phonenana.com/line-bot/del-bot.php","http://www.phonenana.com/line-bot/del-drill.php"];

if($id==$idfree||$id==$idfree2){
for($i = 0; $i<count($formula2);$i++) {
    if($message==$formula2[$i]){

         $requal = file_get_contents($url3[$i]);
         if($requal!=""){
         $content = file_get_contents($url4[$i], "\xEF\xBB\xBF");
          $arrayPostData['to'] = $id;
          $arrayPostData['messages'][0]['type'] = "text";
          $arrayPostData['messages'][0]['text'] = $content;
          pushMsg($arrayHeader,$arrayPostData);
         $requal = file_get_contents($remove1[$i]);
}else{
  $arrayPostData['to'] = $id;
  $arrayPostData['messages'][0]['type'] = "text";
  $arrayPostData['messages'][0]['text'] ="คำสั่งในการเรียกเลข อยู่ช่วงเวลาปรับปรุง ขออภัยในความไม่สะดวกครับ ดูเลขเพิ่มเติมได้ที่ :http://www.phonenana.com";
  $arrayPostData['messages'][1]['type'] = "sticker";
  $arrayPostData['messages'][1]['packageId'] = "2";
  $arrayPostData['messages'][1]['stickerId'] = "34";
  pushMsg($arrayHeader,$arrayPostData);

}
}
}
  for($i = 0; $i<count($formula3);$i++) {
    if($message==$formula3[$i]){
      $arrayPostData['to'] = $id;
      $arrayPostData['messages'][0]['type'] = "text";
      $arrayPostData['messages'][0]['text'] ="เฉพาะ Vip เท่านั้น สมัครคลิกที่นี้
    http://www.phonenana.com";
      pushMsg($arrayHeader,$arrayPostData);
          }


  }
}


/*$formula1 =["หวยรัฐบน","หวยรัฐล่าง"];
$url2 =["http://tornvidia.thddns.net:5152/easylotto/line-bot/lotto.txt","http://tornvidia.thddns.net:5152/easylotto/line-bot/lotto-in.txt"];
if($id==$id199||$id==$idadmin||$id==$idvip1||$id==$idvip2){
for ($i = 0; $i<count($formula1);$i++) {
    if($message==$formula1[$i]){
         $content = file_get_contents($url2[$i], "\xEF\xBB\xBF");
          $arrayPostData['to'] = $id;
          $arrayPostData['messages'][0]['type'] = "text";
          $arrayPostData['messages'][0]['text'] = $content;
          pushMsg($arrayHeader,$arrayPostData);
      }
    }
}*/

if($message == "gettoken1"){ //vip
  $arrayPostData['to'] = $id;
  $arrayPostData['messages'][0]['type'] = "text";
  $arrayPostData['messages'][0]['text'] ="พร้อมรายงานผลแล้วจ้า !!";
  pushMsg($arrayHeader,$arrayPostData);
$content = file_get_contents("http://phonenana.com/line-bot/get-token.php?id=$id&member=1");


}if($message == "gettoken2"){ //free
$content = file_get_contents("http://phonenana.com/line-bot/get-token.php?id=$id&member=2");
//header("Location:http://phonenana.com/line-bot/get-token.php?id=$id");

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
