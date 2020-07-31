<?php 
require_once 'bootstrap.php';
// Testing only not for production
$payment = fopen("pagos.txt", "a");
$json = file_get_contents('php://input');
fwrite($payment, "================" . PHP_EOL);
fwrite($payment, $json);
fwrite($payment, "================ POST" . PHP_EOL);
fwrite($payment, $_POST);
fwrite($payment, "================ GET" . PHP_EOL);
fwrite($payment, $_GET);
fwrite($payment, "================ REQUEST" . PHP_EOL);
fwrite($payment, $_REQUEST);
fclose($payment);