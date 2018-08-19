<?php
$access_token = '9JsyVZesJeoMHmqSvsGVLCJKHQOd3A1VoZW9GP3C+Ps/hNoFy6rPZY66MOlbViN7em5Wfs7lWzVed/YBPVCyvrenb4iJou76TTvvGkMDj8InRwGgHGjPrLv04FHpN9OEay7V9yLs2Jz+XRPVnuLSYgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
