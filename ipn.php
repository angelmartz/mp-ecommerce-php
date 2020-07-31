<?php 
require_once 'bootstrap.php';
// Testing only not for production
$payment = fopen("pagos.txt", "a");
$json = file_get_contents('php://input');
fwrite($payment, $json);
fclose($payment);