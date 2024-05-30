<?php
 require_once "employee.php";
 require_once "office.php";
 require_once "company.php";

 class Programmer extends Employee implements Office, Company{
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
  public function officeName($name){
   echo "Head office = ".$name."<br>";
  }
  public function setWorking($work):string{
   return "working style".$work."<br>";
  }
  public function setCompanyName($name){
   
  }
 }
?>