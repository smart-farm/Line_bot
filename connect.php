<?php
$host="easylotto.in.th";
$user="root";
$pw="Ae411215267";
$dbname="phonenan_2016";
$c=mysql_connect($host,$user,$pw);
if (!$c)
{
	echo "ไม่สามารถเชื่อมต่อได้";
	exit();
}
echo "เชื่อมต่อได้";
?>