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


   date_default_timezone_set("Asia/Bangkok");
    $today=date("Y-m-d");
    if($message=="เลขวิน"||$message=="เลขรูด"||$message=="เลขเสียว"||$message=="เลขปัก"||$message=="เลขไหล"||$message=="เลขตอง"){
    if($id==$idcheck){
    if(time()>=strtotime("09:00:00")&& time()<strtotime("23:59:00 + 1 hour")) // + 3 hour
    {
      $today=date("Y-m-d",strtotime("-1 days",strtotime($today)));
     $idfree ='C6158fb947c96653e2706ce8eb2dbae9b';

   }else{
     $idfree ='C6158fb947c96653e2706ce8eb2dbae9bbbbbb';

     $arrayPostData['to'] = $idcheck;
     $arrayPostData['messages'][0]['type'] = "text";
     $arrayPostData['messages'][0]['text'] ="แจ้งสมาชิก เรื่องการส่งเลขแบบพิเศษ
----------------------
ระบบส่งเลขตามคำสั่ง Line จะเปิดให้บริการอีกครั้ง
เวลา 09.00 น.-22.00 น. แต่ทางโปรแกรมอีซี่รอตโต้จะยังส่ง
เลขยี่กี 1 สูตร ทุกๆ 15 นาที ตามปกติจ้า.
----------------------
ขออภัยในความ..ไม่สะดวก";
     pushMsg($arrayHeader,$arrayPostData);

   }
 }

/* if($id==$idcheckk){
 if(time()>=strtotime("09:00:00")&& time()<strtotime("23:59:00 + 1 hour")) // + 3 hour
 {
   $today=date("Y-m-d",strtotime("-1 days",strtotime($today)));
  $idfree2 ='Cb2a0ab426f804a15c8233782ea28805d';

 }else{
  $idfree2 ='Cb2a0ab426f804a15c8233782ea28805dddd';

  $arrayPostData['to'] = $idcheckk;
  $arrayPostData['messages'][0]['type'] = "text";
  $arrayPostData['messages'][0]['text'] ="แจ้งสมาชิก เรื่องการส่งเลขแบบพิเศษ
 ----------------------
 ระบบส่งเลขตามคำสั่ง Line จะเปิดให้บริการอีกครั้ง
 เวลา 09.00 น.-22.00 น. แต่ทางโปรแกรมอีซี่รอตโต้จะยังส่ง
 เลขยี่กี 1 สูตร ทุกๆ 15 นาที ตามปกติจ้า.
 ----------------------
 ขออภัยในความ..ไม่สะดวก";
  pushMsg($arrayHeader,$arrayPostData);

 }
}*/

}



   $idsmile ='C701d3b84cd8afc5d2800f7b1b0f0b09c';
   $idvip ='C22521a49473a70959e78d41650314a50';
   $id199 ='C678b1d0f7f216ba96cf8b6e784bac718';



   if($message == "เลขปัก"){
      if($id==$idvip||$id==$id199||$id==$idfree||$id==$idsmile||$id==$idfree2){
     $requal = file_get_contents("http://tornvidia.thddns.net:5152/easylotto/line-bot/push-puk.php");
     $content = file_get_contents("http://tornvidia.thddns.net:5152/easylotto/line-bot/reviews-puk.txt", "\xEF\xBB\xBF");
    // echo $content;
      $arrayPostData['to'] = $id;
      $arrayPostData['messages'][0]['type'] = "text";
      $arrayPostData['messages'][0]['text'] = $content;
      pushMsg($arrayHeader,$arrayPostData);
     $requal = file_get_contents("http://tornvidia.thddns.net:5152/easylotto/line-bot/del-bot.php");
   }
   }
//&&$id==$idvip||$id==$idfree
   if($message == "เลขวิน"){
      if($id==$idvip||$id==$id199||$id==$idfree||$id==$idsmile||$id==$idfree2){
     $requal = file_get_contents("http://tornvidia.thddns.net:5152/easylotto/line-bot/push-win.php");
     $content = file_get_contents("http://tornvidia.thddns.net:5152/easylotto/line-bot/reviews-win.txt", "\xEF\xBB\xBF");
    // echo $content;
      $arrayPostData['to'] = $id;
      $arrayPostData['messages'][0]['type'] = "text";
      $arrayPostData['messages'][0]['text'] = $content;
      pushMsg($arrayHeader,$arrayPostData);
     $requal = file_get_contents("http://tornvidia.thddns.net:5152/easylotto/line-bot/del-win.php");
   }
   }

   if($message == "เลขเสียว"){
      if($id==$idvip||$id==$id199||$id==$idfree||$id==$idsmile||$id==$idfree2){
     $requal = file_get_contents("http://tornvidia.thddns.net:5152/easylotto/line-bot/push-seal.php");
     $content = file_get_contents("http://tornvidia.thddns.net:5152/easylotto/line-bot/reviews-rood.txt", "\xEF\xBB\xBF");
    // echo $content;
      $arrayPostData['to'] = $id;
      $arrayPostData['messages'][0]['type'] = "text";
      $arrayPostData['messages'][0]['text'] = $content;
      pushMsg($arrayHeader,$arrayPostData);
     $requal = file_get_contents("http://tornvidia.thddns.net:5152/easylotto/line-bot/del-rood.php");
   }
   }

   if($message == "เลขรูด"){
     if($id==$idvip||$id==$id199||$id==$idfree||$id==$idsmile||$id==$idfree2){
     $requal = file_get_contents("http://tornvidia.thddns.net:5152/easylotto/line-bot/push-rood.php");
     $content = file_get_contents("http://tornvidia.thddns.net:5152/easylotto/line-bot/reviews-rood.txt", "\xEF\xBB\xBF");
    // echo $content;
      $arrayPostData['to'] = $id;
      $arrayPostData['messages'][0]['type'] = "text";
      $arrayPostData['messages'][0]['text'] = $content;
      pushMsg($arrayHeader,$arrayPostData);
     $requal = file_get_contents("http://tornvidia.thddns.net:5152/easylotto/line-bot/del-rood.php");
   }
   }

   if($message =="เลขไหล"){
     if($id==$idvip||$id==$id199||$id==$idfree||$id==$idsmile||$id==$idfree2){
     $requal = file_get_contents("http://tornvidia.thddns.net:5152/easylotto/line-bot/push-flow.php");
     $content = file_get_contents("http://tornvidia.thddns.net:5152/easylotto/line-bot/reviews-flow.txt", "\xEF\xBB\xBF");
    // echo $content;
      $arrayPostData1['to'] = $id;
      $arrayPostData1['messages'][0]['type'] = "text";
      $arrayPostData1['messages'][0]['text'] = $content;
      pushMsg($arrayHeader,$arrayPostData1);
     $requal = file_get_contents("http://tornvidia.thddns.net:5152/easylotto/line-bot/del-flow.php");
   }
   }

   if($message=="เลขตอง"){
     if($id==$idvip||$id==$id199||$id==$idfree||$id==$idsmile||$id==$idfree2){
     $requal = file_get_contents("http://tornvidia.thddns.net:5152/easylotto/line-bot/remind.php");
     $content = file_get_contents("http://tornvidia.thddns.net:5152/easylotto/line-bot/reviews-tong.txt", "\xEF\xBB\xBF");
    // echo $content;
      $arrayPostData1['to'] = $id;
      $arrayPostData1['messages'][0]['type'] = "text";
      $arrayPostData1['messages'][0]['text'] = $content;
      pushMsg($arrayHeader,$arrayPostData1);
     $requal = file_get_contents("http://tornvidia.thddns.net:5152/easylotto/line-bot/del-tong.php");
     }
   }

   if($message =="เลขแนะนำ"){
     $random=(rand(0,4));
     if($random==0){
       $requal = file_get_contents("http://tornvidia.thddns.net:5152/easylotto/line-bot/push-puk.php");
       $content = file_get_contents("http://tornvidia.thddns.net:5152/easylotto/line-bot/reviews-puk.txt", "\xEF\xBB\xBF");
      // echo $content;
        $arrayPostData['to'] = $id;
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = $content;
        pushMsg($arrayHeader,$arrayPostData);
       $requal = file_get_contents("http://tornvidia.thddns.net:5152/easylotto/line-bot/del-bot.php");

  }
  if($random==1){
    $requal = file_get_contents("http://tornvidia.thddns.net:5152/easylotto/line-bot/push-win.php");
    $content = file_get_contents("http://tornvidia.thddns.net:5152/easylotto/line-bot/reviews-win.txt", "\xEF\xBB\xBF");
   // echo $content;
     $arrayPostData['to'] = $id;
     $arrayPostData['messages'][0]['type'] = "text";
     $arrayPostData['messages'][0]['text'] = $content;
     pushMsg($arrayHeader,$arrayPostData);
    $requal = file_get_contents("http://tornvidia.thddns.net:5152/easylotto/line-bot/del-win.php");

  }
  if($random==2){
    $requal = file_get_contents("http://tornvidia.thddns.net:5152/easylotto/line-bot/push-seal.php");
    $content = file_get_contents("http://tornvidia.thddns.net:5152/easylotto/line-bot/reviews-rood.txt", "\xEF\xBB\xBF");
   // echo $content;
     $arrayPostData['to'] = $id;
     $arrayPostData['messages'][0]['type'] = "text";
     $arrayPostData['messages'][0]['text'] = $content;
     pushMsg($arrayHeader,$arrayPostData);
    $requal = file_get_contents("http://tornvidia.thddns.net:5152/easylotto/line-bot/del-rood.php");

  }
  if($random==3){
    $requal = file_get_contents("http://tornvidia.thddns.net:5152/easylotto/line-bot/push-rood.php");
    $content = file_get_contents("http://tornvidia.thddns.net:5152/easylotto/line-bot/reviews-rood.txt", "\xEF\xBB\xBF");
   // echo $content;
     $arrayPostData['to'] = $id;
     $arrayPostData['messages'][0]['type'] = "text";
     $arrayPostData['messages'][0]['text'] = $content;
     pushMsg($arrayHeader,$arrayPostData);
    $requal = file_get_contents("http://tornvidia.thddns.net:5152/easylotto/line-bot/del-rood.php");

  }
  if($random==4){

    $requal = file_get_contents("http://tornvidia.thddns.net:5152/easylotto/line-bot/push-flow.php");
    $content = file_get_contents("http://tornvidia.thddns.net:5152/easylotto/line-bot/reviews-flow.txt", "\xEF\xBB\xBF");
   // echo $content;
     $arrayPostData1['to'] = $id;
     $arrayPostData1['messages'][0]['type'] = "text";
     $arrayPostData1['messages'][0]['text'] = $content;
     pushMsg($arrayHeader,$arrayPostData1);
    $requal = file_get_contents("http://tornvidia.thddns.net:5152/easylotto/line-bot/del-flow.php");

  }
  }


   if($message == "หวยรัฐบน"){
     if($id==$idvip||$id==$id199||$id==$idsmile){
     $content = file_get_contents("http://tornvidia.thddns.net:5152/easylotto/line-bot/lotto.txt", "\xEF\xBB\xBF");
    // echo $content;
      $arrayPostData1['to'] = $id;
      $arrayPostData1['messages'][0]['type'] = "text";
      $arrayPostData1['messages'][0]['text'] = $content;
      pushMsg($arrayHeader,$arrayPostData1);
     //$requal = file_get_contents("http://tornvidia.thddns.net:5152/easylotto/line-bot/del-bot.php");
     }
   }

   if($message == "หวยรัฐล่าง"){
     if($id==$idvip||$id==$id199||$id==$idsmile){
     $content = file_get_contents("http://tornvidia.thddns.net:5152/easylotto/line-bot/lotto-in.txt", "\xEF\xBB\xBF");
    // echo $content;
      $arrayPostData1['to'] = $id;
      $arrayPostData1['messages'][0]['type'] = "text";
      $arrayPostData1['messages'][0]['text'] = $content;
      pushMsg($arrayHeader,$arrayPostData1);
     //$requal = file_get_contents("http://tornvidia.thddns.net:5152/easylotto/line-bot/del-bot.php");
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
