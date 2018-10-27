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
   //$puk = file_get_contents('http://www.phonenana.com/yeekee/line_puk.php?formula=p53&status=hl');
   //$win = file_get_contents('http://www.phonenana.com/yeekee/line_win.php?formula=v222&status=h');
   //$seal = file_get_contents('http://www.phonenana.com/yeekee/line.php?formula=b&status=shl');
   //$rood = file_get_contents('http://www.phonenana.com/yeekee/line.php?formula=bd&status=hl');

   /*date_default_timezone_set("Asia/Bangkok");
   $today=date("Y-m-d");
   if(time()>=strtotime("00:00:00") && time()<strtotime("00:00:00 + 4 hour"))
   {$today=date("Y-m-d",strtotime("-1 days",strtotime($today)));}
   include("connect.php");*/
   if($message == "เลขปัก"){

     		/*			$sql="SELECT* from bot_puk where date='$today' ORDER BY bot_id DESC LIMIT 0,1";
     					$result=mysql_db_query($dbname,$sql);
     					$op=mysql_fetch_array($result);
     					$formula=$op[formula];
     					if ($formula=="")
     					{ $formula="line_puk.php?formula=p50&status=h"; }
*/
     //$requal = file_get_contents("http://tornvidia.thddns.net:5152/easylotto/line-bot/line_puk.php?formula=p50&status=h");*
     $ms="line_puk.php?formula=p50&status=h";
     $requal = file_get_contents("http://tornvidia.thddns.net:5152/easylotto/line-bot/$ms");
     $content = file_get_contents("http://tornvidia.thddns.net:5152/easylotto/line-bot/reviews.txt", "\xEF\xBB\xBF");
     echo $content;
      $arrayPostData['to'] = $id;
      $arrayPostData['messages'][0]['type'] = "text";
      $arrayPostData['messages'][0]['text'] = $content;

      pushMsg($arrayHeader,$arrayPostData);
   }
   if($message == "เลขวิน"){
      $arrayPostData['to'] = $id;
      $arrayPostData['messages'][0]['type'] = "text";
      $arrayPostData['messages'][0]['text'] = $win;

      pushMsg($arrayHeader,$arrayPostData);
   }

   if($message == "เลขเสียว"){
      $arrayPostData['to'] = $id;
      $arrayPostData['messages'][0]['type'] = "text";
      $arrayPostData['messages'][0]['text'] =$seal;
      pushMsg($arrayHeader,$arrayPostData);
   }

   if($message == "เลขรูด"){
      $arrayPostData['to'] = $id;
      $arrayPostData['messages'][0]['type'] = "text";
      $arrayPostData['messages'][0]['text'] = $rood;
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
