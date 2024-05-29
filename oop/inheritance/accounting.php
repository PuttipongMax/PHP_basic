<?php
 require_once "employee.php";
 class Accounting extends Employee {
  function __construct($name, $salary){
   parent::__construct($name, "Accounting", $salary);
   echo "working = ".$this->companyName."<br>";
  }
  function description(){
   echo "role: made account <br>";
  }
  function getBonus():string{
   return "10%<br><hr>";
  }
 }
?>