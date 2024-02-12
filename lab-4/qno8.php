<?php

class Employee {
    private $name;
    private $salary;

    public function __construct($name, $salary) {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function getName() {
        return $this->name;
    }

    public function getSalary() {
        return $this->salary;
    }

    public function setSalary($salary) {
        if ($salary > 0) {
            $this->salary = $salary;
        }
    }
}

// Creating an instance of Employee
$employee = new Employee("Ajay", 50000);

// Accessing properties using getter methods
echo "Employee Name: " . $employee->getName() . "<br>";
echo "Employee Salary: " . $employee->getSalary() . "<br>";

// Modifying property using setter method
$employee->setSalary(60000);

// Accessing modified property
echo "Modified Employee Salary: " . $employee->getSalary() . "<br>";

?>


<!-- Encaptulation Example -->