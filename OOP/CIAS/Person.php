<?php
class Person {
    public $name;
    public $idNumber;
    public $department;

    public function __construct($name, $idNumber, $department) {
        $this->name = $name;
        $this->idNumber = $idNumber;
        $this->department = $department;
    }

    public function displayInfo(): void {
        echo "Name: $this->name <br>";
        echo "ID Number: $this->idNumber <br>";
        echo "Department: $this->department <br>";
    }


    public function getAccessLevel(): string
    {
        return "Access Level: General - Limited access.";
    }
}