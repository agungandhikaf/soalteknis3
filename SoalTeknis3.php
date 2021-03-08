<?php

class Company {
    public $name;

    public function setCompanyName($name){
        $this->name = $name;
    }

    public function getCompanyName(){
        return $this->name;
    }
}

$company1 = new Company();
$company1->setCompanyName("Dot Indonesia");


class Department extends Company{
    public $name;

    public function setDepartmentName($name){
        $this->name = $name;
    }

    public function getDepartmentName(){
        return $this->name;
    }
}

$department1 = new Department();
$department1->setDepartmentName("Software Developer");


class Employee extends Department{
    public $name, $title, $salary;

    public function setEmployeeName($name){
        $this->name = $name;
    }
    public function getEmployeeTitle(){
        return $this->title;
    }
    public function getEmployeeProfile(){
        echo "Nama : ".$this->name."<br>"."Jabatan: ".$this->title."<br>"."Gaji 30 Hari: ".$this->salary." Rupiah";
        return "$this->name, $this->title, $this->salary";
    }
    public function getEmployeeMonthSalary($day){
        $this->salary = $day*30; //30 hari kerja
    }
}

$employee1 = new Employee();
$employee1->name = "Agung Andhika Firdiansyah";
$employee1->title = "Quality Assurance Tester";
$employee1->getEmployeeMonthSalary(25000);
$employee1->getEmployeeProfile();


