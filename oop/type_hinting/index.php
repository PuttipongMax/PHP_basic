<?php
 require_once "employee.php";

 $emp1=new Employee("Kong", "Ceo", 100000);
 $emp2=new Employee("Joo", "Programmer", 18000);

 showEmployee($emp1);
 showEmployee($emp2);

 function showEmployee(Employee $obj){
  echo "----Data Employee----<br>";
  echo "Name = ".$obj->name."<br>";
  echo "Department = ".$obj->department."<br>";
  echo "Salary = ".$obj->salary."<br><hr>";
 }
?>