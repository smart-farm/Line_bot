<?php
$access_token = 'yxt+KOaBKsQa04Sn5P1keFt676R5VbmoL0lF+6rrzKi6xiyiklFFMAu1pY8eZJSzem5Wfs7lWzVed/YBPVCyvrenb4iJou76TTvvGkMDj8JmzHZeDWGYOko5Ygi+DRgakfTlDs+z92t0Eqa0if9ZEAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
