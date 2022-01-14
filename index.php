<?php
require './public/helpers.php';

//get shop name from url
$shop = $_GET['shop'];

//validate shop domain
$error_url = 'Location: ' . './error/error.php';
$install_url = 'Location: ' . './public/install.php?shop=' . $shop;

$validate_shop = validateShopDomain($shop);

if(!$validate_shop) {
  header($error_url);
  exit;
}

header($install_url);
exit;