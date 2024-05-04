<?php

 $year = 15;

 switch($year){
  case 5:
   echo "Loan period = ".$year."years Interest charged at 10%";
   break;
  case 10:
   echo "Loan period = ".$year."years Interest charged at 20%";
   break;
  default:
   echo "Does not meet the specified conditions.";
 }

?>