<?php
 require_once "employee.php";
 class Sale extends Employee {
  function __construct($name, $salary){
   parent::__construct($name, "Seller", $salary);
   echo "working = ".$this->companyName."<br>";
  }
  function description(){
   echo "role : sale product.<br>";
  }
  function getBonus():string{
   return "25%<br><hr>";
  }
 }
?>