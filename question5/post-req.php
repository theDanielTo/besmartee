<?php
$url = 'http://dev-trinh.besmartee.com/dev-test/api-interview.php';
$xmlString = include "xml-str.php";
$post = array('xml' => $xmlString);

$curl = curl_init($url);

$headers = array(
  "Content-Type: text/xml"
);

$options = array(
  CURLOPT_URL => $url,
  CURLOPT_POST => true,
  CURLOPT_POSTFIELDS => $post,
  CURLOPT_HTTPHEADER => $headers,
  CURLOPT_RETURNTRANSFER => true
);

curl_setopt_array($curl, $options);
$result = curl_exec($curl);
echo $result;
curl_close($curl);
