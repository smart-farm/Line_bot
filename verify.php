<?php
$access_token = 'sW5KonkE+78G+ayD9/5XrwmuDDXXYovBJAXBwRXCXz3TwmzmUJ7S3rmI9vzyubS/Cidc4AZAwWPV499vmoF8GTzpf0kMT4IyA2OD1gpmtzzQDdLvimCPadn407NeLc1LLc/JCU/o7Bc8znWurkBG/QdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
