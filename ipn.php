<?php 
require_once 'bootstrap.php';
// Testing only
$payment = fopen("pagos.txt", "wb");
$json = file_get_contents('php://input');
fwrite($payment, $json);
fclose($payment);