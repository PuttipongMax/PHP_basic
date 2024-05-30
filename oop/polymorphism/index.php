<?php
 require_once "accounting.php";
 require_once "programmer.php";
 require_once "sale.php";
 require_once "company.php";

 // echo Company::$companyName."<br>";

 $emp1 = new Programmer("Jane", 20000, 4);
 $emp1->showData();
 // echo $emp1;
 // $emp1->skill("php", "javascript", "java");
 // $emp1->showData();

 $emp2 = new Accounting("Kong", 40000);
 $emp2->showData();
 // echo $emp2;
 // $emp2->skill("php");
 // $emp2->showData();

 $emp3 = new Sale("Joo", 50000, "eu");
 $emp3->showData();
 // echo $emp3;
 // $emp3->skill("php", "javascript");
 // $emp3->showData();
?>