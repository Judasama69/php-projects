<?php
require_once 'Person.php';

class Teacher extends Person {
    public $specialization;

    public function __construct($name, $idNumber, $department, $specialization) {
        parent::__construct($name, $idNumber, $department);
        $this->specialization = $specialization;
    }

    #[Override]
    public function getAccessLevel(): string
    {
        return "Access Level: Teacher – Access to classrooms, faculty rooms, and laboratories.";
    }
}