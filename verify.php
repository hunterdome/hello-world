<?php
$access_token = '4UAn/1fgNz0N4m7zivdTMKRxee8svrkcKrKiWEC51nE8nf5kfLBcLyWSNS00Una9TtdxTOW4re0j737/6mqCpLLtir8aE0krBHfsDncbHDFzYBmlVxfr8sej5mxRMIrWbQtMTJu+lOKMdPGtnB+18AdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

?>
