<?php



require "vendor/autoload.php";

$access_token = '9JsyVZesJeoMHmqSvsGVLCJKHQOd3A1VoZW9GP3C+Ps/hNoFy6rPZY66MOlbViN7em5Wfs7lWzVed/YBPVCyvrenb4iJou76TTvvGkMDj8InRwGgHGjPrLv04FHpN9OEay7V9yLs2Jz+XRPVnuLSYgdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'd868b6f44341554ebbcee219509768d9';

$pushID = 'Ue23dc23159b8afb9249240a371607166';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
