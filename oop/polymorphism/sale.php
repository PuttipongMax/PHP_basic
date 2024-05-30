<?php
 require_once "employee.php";
 class Sale extends Employee {
  private $area;
  function __construct($name, $salary, $area){
   $this->area = $area;
   parent::__construct($name, "Seller", $salary);
   echo "working = ".$this->companyName."<br>";
  }
  function description(){
   echo "role : sale product.<br>";
  }
  function getBonus():string{
   return "25%<br><hr>";
  }
  public function showData(){
   echo "Name = ".$this->name."<br>";
   echo "department = ".$this->department."<br>";
   echo "salary = ".$this->salary."<br>";
   echo "responsible area = ".$this->area."<br>";
   echo "<hr>";
  }
 }
?>