<?php
class Contractor extends Employee
{
    private
    float $hourlyRate;
	private int $hoursWorked;

    public function __construct(string $name, float $hourlyRate, int $hoursWorked)
{
    parent::__construct($name);

    $this->hourlyRate = $hourlyRate;
    $this->hoursWorked = $hoursWorked;
}

    function calculateSalary(): float
    {
        return $this->hourlyRate * $this->hoursWorked;
    }
}