<?php
/**
 * XML POST Request
 */

$url = 'http://dev-trinh.besmartee.com/dev-test/api-interview.php';
$origin = 'http://besmarteetechtest';

include "xml-str.php";
// $xmlString = simplexml_load_file('request.xml');
$post = array('xml' => $xmlString);

$curl = curl_init($url);

$headers = array(
  'Content-Type: text/xml',
  'Access-Control-Allow-Origin: '.$origin
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
