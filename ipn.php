<?php 
require_once 'bootstrap.php';

$payment = fopen("pagos.txt", "wb");
$info = 'test';
fwrite($payment, $info);
fclose($payment);