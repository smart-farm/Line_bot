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
//$checkroom ='Cb2a0ab426f804a15c8233782ea28805d';
//$checkloop=['C6158fb947c96653e2706ce8eb2dbae9b','Cb2a0ab426f804a15c8233782ea28805d'];
date_default_timezone_set("Asia/Bangkok");
 $today=date("Y-m-d");
 if($message=="เลขวิน"||$message=="เลขรูด"||$message=="เลขเสียว"||$message=="เลขปัก"||$message=="เลขไหล"||$message=="เลขตอง"){
 if($id==$idcheck){
 if(time()>=strtotime("09:00:00")&& time()<strtotime("22:00:00")) // + 3 hour
 {
  $today=date("Y-m-d",strtotime("-1 days",strtotime($today)));
  $idfree ='C6158fb947c96653e2706ce8eb2dbae9b';
  //$idfree2 ='Cb2a0ab426f804a15c8233782ea28805d';

}else{
  $idfree ='C6158fb947c96653e2706ce8eb2dbae9bbbbbb';
  //$idfree2 ='Cb2a0ab426f804a15c8233782ea28805ddddd';
//for($i = 0; $i<count($checkloop);$i++) {
  //if($id==$checkloop[$i]){
  $arrayPostData['to'] =$id;
  $arrayPostData['messages'][0]['type'] = "text";
  $arrayPostData['messages'][0]['text'] ="การเข้าใช้บริการแอพอีซีรอตโต้
============
1. สมัครผ่านลิงค์ของเราก่อนถึงเข้าใช้งานได้
2. โดยสมัครลิงค์ได้ที่นี่ : http://bit.ly/membervip_free
3. สมัครสมาชิกเจสด้วย ชื่อสมาชิกใหม่/เบอร์เดิม/บัญชีธนาคารเดิม
4. จากนั้นเติมเงินเข้าเจสขั้นต่ำ 500 บาท
5. แคปหน้าจอการเติมเงิน ส่งมาที่ Line ID : ohopc หรือ tor_nvidia-amd
6. แจ้งเบอร์ของท่านกับแอตมิน เพื่อเข้าใช้งานโปรแกรมอีซีรอตโต้
7. หากเครดิตท่านไม่เดินเป็นเวลานาน ทางทีมงานขออนุญาตเชิญออก";

  pushMsg($arrayHeader,$arrayPostData);


}
}
//$checkroom ='Cb2a0ab426f804a15c8233782ea28805d';
/*if($id==$checkroom){
if(time()>=strtotime("09:00:00")&& time()<strtotime("22:00:00")) // + 3 hour
{
$today=date("Y-m-d",strtotime("-1 days",strtotime($today)));
$idfree2 ='Cb2a0ab426f804a15c8233782ea28805d';

}else{
$idfree2 ='Cb2a0ab426f804a15c8233782ea28805ddddd';

$arrayPostData['to'] = $checkroom;
$arrayPostData['messages'][0]['type'] = "text";
$arrayPostData['messages'][0]['text'] ="แจ้งสมาชิก เรื่องการส่งเลขแบบพิเศษ
----------------------
ระบบส่งเลขตามคำสั่ง Line จะเปิดให้บริการอีกครั้ง
เวลา 09.00 น.-22.00 น. แต่ทางโปรแกรมอีซี่รอตโต้จะยังส่ง
เลขยี่กี 1 สูตร ทุกๆ 15 นาที ตามปกติจ้า.
----------------------
ขออภัยในความ..ไม่สะดวก
เปิด 24 ชม. เฉพาะ Vip เท่านั้น";
pushMsg($arrayHeader,$arrayPostData);

}
}*/
}

//$id='C22521a49473a70959e78d41650314a50';
$idadmin ='C701d3b84cd8afc5d2800f7b1b0f0b09c';
//$idvip ='C22521a49473a70959e78d41650314a50';
$id199 ='C678b1d0f7f216ba96cf8b6e784bac718';
//ห้องใหม่
$idvip1='Cfee29536f26d44c081fe4eeb08a5400e';
$idvip2='Cd95550591ae6ca7084af635c0d822c59';

//$mess="หวยรัฐบน";
$formula =["เลขวิน","เลขรูด","เลขเสียว","เลขปัก","เลขไหล","เลขตอง","เลขวินบน","เลขวินล่าง","เลขรูดบน","เลขรูดล่าง"]; //,"เลขวินบน","เลขวินล่าง","เลขรูดบน","เลขรูดล่าง"
$url =["http://www.phonenana.com/line-bot/push-win.php","http://www.phonenana.com/line-bot/push-rood.php","http://www.phonenana.com/line-bot/push-seal.php"
,"http://www.phonenana.com/line-bot/push-puk.php","http://www.phonenana.com/line-bot/push-flow.php","http://www.phonenana.com/line-bot/remind.php"
,"http://www.phonenana.com/line-bot/push-win-on.php","http://www.phonenana.com/line-bot/push-win-lower.php","http://www.phonenana.com/line-bot/push-rood-on.php"
,"http://tornvidia.thddns.net:5152/easylotto/line-bot/push-rood-lower.php"];

$url1=["http://www.phonenana.com/line-bot/reviews-win.txt","http://www.phonenana.com/line-bot/reviews-rood.txt","http://www.phonenana.com/line-bot/reviews-rood.txt",
"http://www.phonenana.com/line-bot/reviews-puk.txt","http://www.phonenana.com/line-bot/reviews-flow.txt","http://www.phonenana.com/line-bot/reviews-tong.txt"
,"http://www.phonenana.com/line-bot/reviews-win.txt","http://www.phonenana.com/line-bot/reviews-win.txt","http://www.phonenana.com/line-bot/reviews-rood.txt"
,"http://tornvidia.thddns.net:5152/easylotto/line-bot/reviews-rood.txt"];

$remove=["http://www.phonenana.com/line-bot/del-win.php","http://www.phonenana.com/line-bot/del-rood.php","http://www.phonenana.com/line-bot/del-rood.php",
"http://www.phonenana.com/line-bot/del-bot.php","http://www.phonenana.com/line-bot/del-flow.php","http://www.phonenana.com/line-bot/del-tong.php",
"http://www.phonenana.com/line-bot/del-win.php","http://www.phonenana.com/line-bot/del-win.php","http://www.phonenana.com/line-bot/del-rood.php"
,"http://www.phonenana.com/line-bot/del-rood.php"];

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

$formula1 =["หวยรัฐบน","หวยรัฐล่าง"];
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
