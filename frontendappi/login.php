<?php
$curl = curl_init();
$auth_data = array(
    'username' => 'asanscliment@gmail.com',
    'password' => '123456',
    'remember_me'=> true,
    'grant_type' => 'password',
    'client_id' => '2',
    'client_secret' => '6ZeKM052XSnYLFOMkheCc7FfxGehRlMQdpb5chXe'
);
curl_setopt($curl,CURLOPT_POST,1);
curl_setopt($curl,CURLOPT_POSTFIELDS,$auth_data);
curl_setopt($curl,CURLOPT_URL,'http://localhost:8000/oauth/token');
curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
curl_setopt($curl,CURLOPT_HTTPAUTH,CURLAUTH_BASIC);

$result = curl_exec($curl);
if(!$result) die('Conection Failure');
curl_close($curl);
var_dump($result);
$data2 = json_decode($result,true);
var_dump($data2);
var_dump($data2['access_token']);