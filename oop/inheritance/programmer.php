<?php
 require_once "employee.php";
 class Programmer extends Employee{
  function __construct($name, $salary){
   parent::__construct($name, "Programmer", $salary);
   echo "working = ".$this->companyName."<br>";
  }
  function description(){
   echo "role : made website or software.<br>";
  }
  function getBonus():string{
   return "20%<br><hr>";
  }
 }
?>