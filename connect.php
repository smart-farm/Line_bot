<?php
$host="http://tornvidia.thddns.net:5152";
$user="root";
$pw="Ae41121526";
$dbname="phonenan_2016";
$c=mysql_connect($host,$user,$pw);
if (!$c)
{
	echo "ไม่สามารถเชื่อมต่อได้";
	exit();
}
?>