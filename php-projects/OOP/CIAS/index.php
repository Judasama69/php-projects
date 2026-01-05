<?php

include 'Staff.php';
include 'Student.php';
include 'Teacher.php';

$student = new Student("Andrew Santos", "2024-00213", "CIT", "BSIT");
echo "===== STUDENT PROFILE =====<br>";
$student->displayInfo();
echo "Course: $student->course <br>";
echo $student->getAccessLevel() . "<br><br>";

$teacher = new Teacher("Prof. Liza Mercado", "2023-00891", "CBA", "Accounting");
echo "===== TEACHER PROFILE =====<br>";
$teacher->displayInfo();
echo "Specialization: $teacher->specialization <br>";
echo $teacher->getAccessLevel() . "<br><br>";

$staff = new Staff("Mr. Glenn Dela Cruz", "2021-00340", "Admin Office", "Registrar Clerk");
echo "===== STAFF PROFILE =====<br>";
$staff->displayInfo();
echo "Role: $staff->role <br>";
echo $staff->getAccessLevel() . "<br>";