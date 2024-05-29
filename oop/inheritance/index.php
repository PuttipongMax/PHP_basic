<?php
 require_once "accounting.php";
 require_once "programmer.php";
 require_once "sale.php";
 require_once "company.php";

 echo Company::$companyName."<br>";
 Company::info();

 $emp1 = new Accounting("Jane", 20000);
 $emp1->setSalary(80000);
 $emp1->showData();
 $emp1->description();
 echo "Receive bonus = ".$emp1->getBonus();

 $emp2 = new Programmer("Kong", 40000);
 $emp2->showData();
 $emp2->description();
 echo "Receive bonus = ".$emp2->getBonus();

 $emp3 = new Sale("Joo", 50000);
 $emp3->showData();
 $emp3->description();
 echo "Receive bonus = ".$emp3->getBonus();
?>