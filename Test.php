<?php
date_default_timezone_set("Asia/Bangkok");
$today=date("Y-m-d");
/*if(time()>=strtotime("00:00:00") && time()<strtotime("00:00:00 + 4 hour"))
{$today=date("Y-m-d",strtotime("-1 days",strtotime($today)));}*/
include("connect.php");
         $sql="SELECT* from bot_puk where date='$today' ORDER BY bot_id DESC LIMIT 0,1";
         $result=mysql_db_query($dbname,$sql);
         $op=mysql_fetch_array($result);
         $formula=$op[formula];
         if ($formula=="")
         { $formula="line_puk.php?formula=p50&status=h"; }
echo $formula;
?>
