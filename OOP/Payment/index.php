<?php

include_once 'Payment.php';
include_once 'CreditCardPayment.php';
include_once 'PaypalPayment.php';

$payment1 = new Payment(100.50);
echo $payment1->process();
echo "<br>";

$cardNum = new CreditCardPayment(10.00, "0234857029384752");
echo $cardNum->process();
echo "<br>";

$paypal = new PaypalPayment(100.50, "Kenjiepen14@gmail.com");
echo $paypal->process();
echo "<br>";

echo Payment::$total . "Total Revenue Collected: ";


