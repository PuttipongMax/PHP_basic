<?php
 // create function 
 function show(){
  print("<b>Hello web Developer</b>");
  print("<br>");
  print("<hr>");
 }
 // execute function 
 show();
?>

<?php
 // Create a function to receive value 
 function shows($message){
  print("<b>Hello ".$message."</b>");
  print("<br>");
  print("<hr>");
 }
 function add($number1, $number2, $number3){
  $result = $number1+$number2+$number3;
  print($number1."+".$number2."+".$number3."=".$result);
  print("<br>");
  print("<hr>");
 }

 add(100, 200, 400);
 shows("PHP");
?>

<?php
 // Create a function to return value
 function getAddress(){
  return "Nevada";
 }
 function getBonus(){
  $bonus = 5000;
  return $bonus;
 }
 
 $city = getBonus();
 print('Bonus amount = '.getBonus());
 print('<br>');
 $salary = 20000+getBonus();

 print('Salary including bonus = '.$salary."<br>");
?>

<?php
 // Create a function to receive and return value
 function getTotal($salary){
  $month = 12;
  return $salary*$month;
 }
 $amount = 30000;
 print("my salary is ".$amount);
 print("<br>");
 $total = getTotal($amount);
 print("Annual income ".$total."<br>");
 print("<hr>");
?>

<?php
 // Create a function to default value
 function showData($fname, $lname, $city="london"){
  print("FullName : ".$fname."<br>");
  print("LastName : ".$lname."<br>");
  print("address : ".$city."<br><hr>");
 }
 showData("kong", "ruksiam", "nevada");
 showData("somchai", "ruksiam")
?>

<?php
 // global and local variable 
 $x = 100;
 $y = 200;

 function showNumber(){
  // local
  global $x;
  $GLOBALS ["z"] = 4000;
  print("variable x = ".$x."<br>");
 }
 showNumber();
 print("value x = ".$x."<br>");
 print("value z = ".$z."<br>");
?>