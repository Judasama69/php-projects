<?php

require_once 'Pets/Dog.php';
require_once 'Wild/Dog.php';

use Pets\Dog;
use Wild\Dog as wildAnimal;

$pets = new Dog();
$wild = new wildAnimal();

echo $pets->describe();
echo "<br>";
echo $wild->describe();
