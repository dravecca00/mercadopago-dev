<?php
$AT = 'APP_USR-6317427424180639-042414-47e969706991d3a442922b0702a0da44-469485398';
/*
 $cURLConnection = curl_init();
$URLMP = 'https://api.mercadopago.com/v1/payments/'.$_REQUEST['id'].'?access_token='.$AT;
curl_setopt($cURLConnection, CURLOPT_URL, $URLMP);
curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($cURLConnection);
curl_close($cURLConnection);

file_put_contents('results.json', $HTTP_RAW_POST_DATA);
file_put_contents('1.txt', $HTTP_RAW_POST_DATA);
*/
// Takes raw data from the request
$data = file_get_contents('php://input');
// Converts it into a PHP object
//$data = json_decode($json, TRUE);

file_put_contents('1.txt', $data);
header("HTTP/1.1 200 OK");
?>