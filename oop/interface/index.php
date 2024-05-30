<?php
 require_once "accounting.php";
 require_once "programmer.php";
 require_once "sale.php";
 require_once "company.php";

 // echo Company::$companyName."<br>";

 $emp1 = new Programmer("Jane", 20000, 4);
 $emp1->showData();
 $emp1->officeName("New York");
 echo $emp1->setWorking("Work from home.");

 $emp2 = new Programmer("Kong", 40000);
 $emp2->showData();
 $emp2->officeName("Las Vecus");
 echo $emp2->setWorking("Site on.");
?>