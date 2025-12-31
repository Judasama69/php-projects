<?php

include 'Foods.php';

$Burger = new Foods();
$Hotdog = new Foods();

$Burger->set_name('Burger');
$Burger->set_type('Junk Food');
$Burger->set_quantity(2);


$Hotdog->set_name('Hotdog');
$Hotdog->set_type('Junk Food');
$Hotdog->set_quantity(3);

echo $Burger->get_name();
echo "<br>";
echo $Burger->get_type();
echo "<br>";
echo $Burger->get_quantity();
echo "<br>";
echo $Hotdog->get_name();
echo "<br>";
echo $Hotdog->get_type();
echo "<br>";
echo $Hotdog->get_quantity();

