<?php
class FullTimeEmployee extends Employee
{
    private
    float $monthlyRate;

	public function __construct(string $name, float $monthlyRate)
{
    parent::__construct($name);
    $this->monthlyRate = $monthlyRate;
}


	function calculateSalary(): float
    {
        return $this->monthlyRate;
    }
}