<?php
require_once 'Person.php';

class Student extends Person {
    public $course;

    public function __construct($name, $idNumber, $department, $course) {
        parent::__construct($name, $idNumber, $department);
        $this->course = $course;
    }

    #[Override]
    public function getAccessLevel(): string
    {
        return "Access Level: Student – Access to classrooms, library, and computer labs.";
    }
}