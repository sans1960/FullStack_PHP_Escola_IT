<?php
require_once 'datos.php';


$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,'http://localhost:8000/api/pictures');
$headers = array(
    'Accept:application/json',
    'Authorization: Bearer '.$datos2
);
curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$res = curl_exec($ch);
// var_dump($res);
$data3 = json_decode($res,true);
var_dump($data3);
// var_dump($data3['data'][0]['name']);
curl_close($ch);