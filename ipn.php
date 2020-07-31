<?php 
require_once 'bootstrap.php';
// Testing only
$payment = fopen("pagos.txt", "wb");
$json = file_get_contents('php://input');
fwrite($payment, print_r($json, true));
fclose($payment);