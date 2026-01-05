<?php
require_once 'Person.php';

class Staff extends Person {
    public $role;

    public function __construct($name, $idNumber, $department, $role) {
        parent::__construct($name, $idNumber, $department);
        $this->role = $role;
    }

    #[Override]
    public function getAccessLevel(): string
    {
        return "Access Level: Staff – Access to administrative offices and service areas.";
    }
}