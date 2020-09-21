<?php


$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://carloan.freewillsolutions.com/carloan/rest/handler/apichkuser/login",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_2TLS,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "username=@Sawad1979&password=ca20f49dbcf69dfa25779898284141696d967e85&language=TH",
  CURLOPT_HTTPHEADER => array(
    "Content-Type: application/x-www-form-urlencoded"
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
