<?php
 abstract class Employee {
  // create attribute
  protected $name; 
  protected $department;
  protected $salary;

  protected $companyName = "ABC Group";

  function __construct($name, $department, $salary){
   // echo $this->companyName."<br>";
   $this->name = $name;
   $this->department = $department;
   $this->salary = $salary;
   echo "Create Object <br/>";
  }
  function __destruct(){
   echo "call use destruct"."<br/>";
  }

  public function setEmpName($nameParam){
   $this->name = $nameParam;
  }
  public function setEmpDepartment($nameDepartment){
   $this->department = $nameDepartment;
  }
  public function setSalary($salary){
   $this->salary = $salary;
  }
  public function showData(){
   echo "employee name = ".$this->name."<br/>";
   echo "department = ".$this->department."<br/>";
   echo "salary = ".$this->salary."<br/><hr/>";
  }

  abstract public function description();
  abstract public function getBonus():string;
 }

 
 // create object
 // $emp1 = new Employee("jane", "Accountant");
 // $emp1->setEmpName("jan");
 // $emp1->setEmpDepartment("Accountan");
 // $emp1->showData();
?>