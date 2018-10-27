<?php
$ms="line_puk.php?formula=p50&status=h";
$requal = file_get_contents("http://tornvidia.thddns.net:5152/easylotto/line-bot/$ms");
echo $requal;
$content = file_get_contents("http://tornvidia.thddns.net:5152/easylotto/line-bot/reviews.txt", "\xEF\xBB\xBF");
echo $content;

?>
