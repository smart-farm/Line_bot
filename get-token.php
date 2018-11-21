<?php
$token_id=$_GET[id];

include "../connect.php";

//echo "รอบที่ $round_post วันที่ $date_post บน $high_post ล่าง $low_post";

if ($token_id!="")
{
											$sql="insert into line_token values(null,'$token_id')";
											$result=mysql_db_query($dbname,$sql);


}else{
	echo "ไม่สามารถเพิ่มข้อมูลได้";
}

mysql_close(); ?>
