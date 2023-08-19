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

    public function setSalary($newSalary) {
        if ($newSalary > 0) {
            $this->salary = $newSalary;
        }
    }
}

$employee = new Employee('Adrita', 100000);
echo $employee->getName() . " is Salary: " . $employee->getSalary() ."TAKA"."<br>";
$employee->setSalary(110000);
echo "Updated Salary: " . $employee->getSalary() ."TAKA"."\n";

?>