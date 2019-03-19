<?php
$accessToken = "H/3YHwJLFV7Cj/q8eSSUgx+XSWSYBi5SLBuivSbFqfVEyYtNbtc80mTo+PYMM88XhpAHaJB13UaYxZ0gmzsfdjHoCjCPrcRgz8wv14zvwkH6/JyFK8gRdIBaDrzN0StiOx4yZbi80yLFkB1NZ+l+8QdB04t89/1O/w1cDnyilFU=";//copy ข้อความ Channel access token ตอนที่ตั้งค่า
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

if($arrayJson['events'][0]['type']=='memberJoined'){
  $arrayPostData['to'] = $id;
  $arrayPostData['messages'][0]['type'] = "text";
  $arrayPostData['messages'][0]['text'] ="ยินดีต้อนรับจ้า";
  pushMsg($arrayHeader,$arrayPostData);
}
if($arrayJson['events'][0]['type']=='memberLeft'){
  $arrayPostData['to'] = $id;
  $arrayPostData['messages'][0]['type'] = "text";
  $arrayPostData['messages'][0]['text'] ="ขอบคุณที่ใช้บริการค่ะ";
  $arrayPostData['messages'][1]['type'] = "sticker";
  $arrayPostData['messages'][1]['packageId'] = "2";
  $arrayPostData['messages'][1]['stickerId'] = "42";
  pushMsg($arrayHeader,$arrayPostData);
}

if($message == "gettoken"){
    $arrayPostData['to'] = $id;
    $arrayPostData['messages'][0]['type'] = "text";
    $arrayPostData['messages'][0]['text'] =$id;
    pushMsg($arrayHeader,$arrayPostData);
}



//"เลขวิน","เลขรูด","เลขเสียว","เลขปัก","เลขตอง",
$formula =["เลขมัดบน","เลขมัดล่าง","เลขรูดบน","เลขรูดล่าง","หวยรัฐบาล","วินบน","วินล่าง","รูดบน","รูดล่าง","รูดบนล่าง","ปักสิบบน","ปักหน่วยบน"
,"ปักสิบล่าง","ปักหน่วยล่าง","เลขเจาะ","หวยลาว","หวยเวียดนาม","หวยมาเลย์","หุ้นไทยเย็น","หุ้นดาวน์โจน","นิเคอิเช้า","นิเคอิบ่าย","ฮั่งเส็งเช้า","ฮั่งเส็งบ่าย"]; //,,"เลขวินบน","เลขวินล่าง","เลขรูดบน","เลขรูดล่าง"
//"http://easylotto.in.th/line-huay/push-win.php","http://easylotto.in.th/line-huay/push-rood.php","http://easylotto.in.th/line-huay/push-seal.php","http://easylotto.in.th/line-huay/push-puk.php","http://easylotto.in.th/line-huay/remind.php",
$url =[
"http://easylotto.in.th/huay-cus/yeekee-bundle.php","http://easylotto.in.th/huay-cus/yeekee-bundle-lo.php","http://easylotto.in.th/line-cus/huay-rood-on.php"
,"http://easylotto.in.th/huay-cus/push-rood-lower.php","http://easylotto.in.th","http://easylotto.in.th/huay-cus/line_winon.php?formula=wh"
,"http://easylotto.in.th/huay-cus/line_winon.php?formula=wl","http://easylotto.in.th/huay-cus/line_winon.php?formula=rh","http://easylotto.in.th/huay-cus/line_winon.php?formula=rl"
,"http://easylotto.in.th/huay-cus/line_winon.php?formula=rhl","http://easylotto.in.th/huay-cus/line_winon.php?formula=ph1"
,"http://easylotto.in.th/huay-cus/line_winon.php?formula=ph2","http://easylotto.in.th/huay-cus/line_winon.php?formula=pl0","http://easylotto.in.th/huay-cus/line_winon.php?formula=pl1"
,"http://easylotto.in.th/huay-cus/yeekee-drill.php","http://easylotto.in.th","http://easylotto.in.th","http://easylotto.in.th","http://easylotto.in.th","http://easylotto.in.th"
,"http://easylotto.in.th","http://easylotto.in.th","http://easylotto.in.th","http://easylotto.in.th"];


//"http://easylotto.in.th/line-huay/reviews-win.txt","http://easylotto.in.th/line-huay/reviews-rood.txt","http://easylotto.in.th/line-huay/reviews-rood.txt",
//"http://easylotto.in.th/line-huay/reviews-puk.txt","http://easylotto.in.th/line-huay/reviews-tong.txt",

$url1=["http://easylotto.in.th/huay-cus/reviews-on.txt","http://easylotto.in.th/huay-cus/reviews-lo.txt","http://easylotto.in.th/huay-cus/reviews-rood.txt",
"http://easylotto.in.th/huay-cus/reviews-rood.txt","http://easylotto.in.th/bot-lotto-all.php?lotto=1"
,"http://easylotto.in.th/huay-cus/reviews-winon.txt","http://easylotto.in.th/huay-cus/reviews-winon.txt","http://easylotto.in.th/huay-cus/reviews-winon.txt",
"http://easylotto.in.th/huay-cus/reviews-winon.txt","http://easylotto.in.th/huay-cus/reviews-winon.txt","http://easylotto.in.th/huay-cus/reviews-winon.txt"
,"http://easylotto.in.th/huay-cus/reviews-winon.txt","http://easylotto.in.th/huay-cus/reviews-winon.txt","http://easylotto.in.th/huay-cus/reviews-winon.txt"
,"http://easylotto.in.th/huay-cus/reviews-drill.txt","http://easylotto.in.th/bot-lotto-all.php?lotto=2","http://easylotto.in.th/bot-lotto-all.php?lotto=4"
,"http://easylotto.in.th/bot-lotto-all.php?lotto=5","http://easylotto.in.th/bot-lotto-all.php?lotto=3","http://easylotto.in.th/bot-lotto-all.php?lotto=6"
,"http://easylotto.in.th/bot-lotto-all.php?lotto=7","http://easylotto.in.th/bot-lotto-all.php?lotto=8","http://easylotto.in.th/bot-lotto-all.php?lotto=9","http://easylotto.in.th/bot-lotto-all.php?lotto=10"];

//"http://easylotto.in.th/line-huay/del-win.php","http://easylotto.in.th/line-huay/del-rood.php","http://easylotto.in.th/line-huay/del-rood.php",
//"http://easylotto.in.th/line-huay/del-bot.php","http://easylotto.in.th/line-huay/del-tong.php",

$remove=[
"http://easylotto.in.th/huay-cus/del-mux-on.php","http://easylotto.in.th/huay-cus/del-mux-lo.php","http://easylotto.in.th/huay-cus/del-rood.php"
,"http://easylotto.in.th/huay-cus/del-rood.php","http://easylotto.in.th","http://easylotto.in.th/huay-cus/del-winon.php"
,"http://easylotto.in.th/huay-cus/del-winon.php","http://easylotto.in.th/huay-cus/del-winon.php","http://easylotto.in.th/huay-cus/del-winon.php"
,"http://easylotto.in.th/huay-cus/del-winon.php","http://easylotto.in.th/huay-cus/del-winon.php","http://easylotto.in.th/huay-cus/del-winon.php"
,"http://easylotto.in.th/huay-cus/del-winon.php","http://easylotto.in.th/huay-cus/del-winon.php","http://easylotto.in.th/huay-cus/del-drill.php"
,"http://easylotto.in.th","http://easylotto.in.th","http://easylotto.in.th","http://easylotto.in.th","http://easylotto.in.th","http://easylotto.in.th","http://easylotto.in.th","http://easylotto.in.th"];

$idvip='Cfec11ae0f0dddea4c32fb1f484071cd5';
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
  $arrayPostData['messages'][0]['text'] ="คำสั่งในการเรียกเลข อยู่ช่วงเวลาปรับปรุง ขออภัยในความไม่สะดวกครับ ";
  $arrayPostData['messages'][1]['type'] = "sticker";
  $arrayPostData['messages'][1]['packageId'] = "2";
  $arrayPostData['messages'][1]['stickerId'] = "34";
  pushMsg($arrayHeader,$arrayPostData);

}
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
