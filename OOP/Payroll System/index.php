<?php

require_once 'Employee.php';
require_once 'FullTimeEmployee.php';
require_once 'Contractor.php';

$employee = new FullTimeEmployee("Kenjie", 25000.00);
$intern = new Contractor("Ivan", 150.00, 160);

$staff = [$intern, $employee];
foreach ($staff as $person) {
    echo "Employee: " . $person->getName() . "<br>";
    echo "Salary: $" . number_format($person->calculateSalary(), 2) . "<br><br>";
}

