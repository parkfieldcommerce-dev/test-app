<?php
// create a new cURL resource
$ch = curl_init();

// set your URL to the request URL
curl_setopt($ch, CURLOPT_URL, "https://app.rees46.com/shopify/fetch");
curl_setopt($ch, CURLOPT_POST, 1); 

// pass to the browser to return results of the request
$response = curl_exec($ch);
print_r($response);exit;

