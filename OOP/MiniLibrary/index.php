<?php


include 'Books.php';

$Book1 = new Books(" J.K Rowling", " Harry Potter", False);


echo $Book1->getDetails();
echo "<br>";
echo $Book1->borrowBook();
echo "<br>";