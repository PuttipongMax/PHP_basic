<?php
 require_once "employee.php";
 class Programmer extends Employee{
  private $exp;
  function __construct($name, $salary, $exp){
   $this->exp = $exp;
   parent::__construct($name, "Programmer", $salary);
   echo "Working = ".$this->companyName."<br>";
  }
  function description(){
   echo "Role : made website or software.<br>";
  }
  function getBonus():string{
   return "20%<br><hr>";
  }

  // overloading method
  function __call($name, $args){
   if($name=="skill"){
    $c = count($args); // count number argument
    switch($c){
     case 1:
      echo "use Language = ".$args[0]."<br>";
      break;
     case 2:
      echo "use Language = ".$args[0].", ".$args[1]."<br>";
      break;
     case 3:
      echo "use Language = ".$args[0].", ".$args[1].", ".$args[2]."<br>";
      break;
     default:
      echo "Find not found!!!";
      break;
    }
   }
  }

  // magic method
  function __toString():string{
   return "Name programmer = ".$this->name."salary = ".$this->salary."<br>";
  }

  public function showData(){
   echo "Name = ".$this->name."<br>";
   echo "department = ".$this->department."<br>";
   echo "salary = ".$this->salary."<br/>";
   echo "Experience = ".$this->exp."<br>";
   echo "<hr>";
  }
 }
?>