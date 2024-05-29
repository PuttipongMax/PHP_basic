<?php
 class Employee{
  // create attribute
  private $name; 
  private $department;

  function __construct($name, $department){
   $this->name = $name;
   $this->department = $department;
   echo "Create Object <br/>";
  }
  function __destruct(){
   echo "call use destruct";
  }

  public function setEmpName($nameParam){
   $this->name = $nameParam;
  }
  public function setEmpDepartment($nameDepartment){
   $this->department = $nameDepartment;
  }
  public function showData(){
   echo "employee name = ".$this->name."<br/>";
   echo "department = ".$this->department."<hr/>";
  }
 }

 // create object
 $emp1 = new Employee("jane", "Accountant");
 // $emp1->setEmpName("jan");
 // $emp1->setEmpDepartment("Accountan");
 $emp1->showData();
?>