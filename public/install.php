<?php
//Require helper
require 'helpers.php';

//set variables for our request
$shop = $_GET['shop'];

$api_key = 'a254c125c54b4c01a55b576cf1ea6de9';
$scope = 'read_orders,write_products';
$redirect_url = 'http://localhost/test-app/public/token_generator.php';

//Build install/approval URL to redirect to
$install_url = "https://{$shop}/admin/oauth/authorize?client_id={$api_key}&scope={$scope}&redirect_uri={$redirect_url}";

// Redirect
header('Location: ' . $install_url);
die();
