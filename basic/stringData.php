<?php
 $pass = "hello57";
 echo "password = ".$pass."<br>";

 $result = md5($pass);
 echo "md5 = ".$result."<br>";

 $result = sha1($pass);
 echo "sha1 = ".$result."<br>";

 $result = crypt($pass, ".dk");
 echo "crypt = ".$result."<br>";

 $encode = base64_encode($pass);
 echo "encode = ".$encode."<br>";

 $result = base64_decode($encode);
 echo "decode = ".$result."<hr>";
?>

<?php
 $number = 100.14;

 echo $number."<br>";
 
 $result=ceil($number);
 echo "round up = ".$result."<br>";

 $result=floor($number);
 echo "round down = ".$result."<br>";

 $result=round($number);
 echo "round = ".$result."<hr>";
?>

<?php
 $number = 35000832.4585;

 echo $number."<br>";

 $resultInt = number_format($number);
 echo $resultInt."<br>";

 $resultDec = number_format($number, 3);
 echo $resultDec."<hr>";
?>

<?php
 date_default_timezone_set("Asia/Bangkok");
 echo date("r")."<br>";

 echo date("l")."<br>";

 echo date("j F Y")."<br>";

 echo date("G:i:s A")."<br>";

 echo date("d/m/y")."<hr>";
?>

<?php
 date_default_timezone_set("Asia/Bangkok");
 echo time()."<br>";

 echo "current day = ".date("d/m/y", time())."<br>";
 
 $days3 = time()+(60*60*24*3);
 echo "next 3 days = ".date("d/m/Y", $days3)."<br>";

 $week = time()+(60*60*24*7);
 echo "next week = ".date("d/m/Y", $week)."<hr>";
?>

<?php
 date_default_timezone_set("Asia/Bangkok");
 $date_time = getdate();

 echo "days = ".$date_time["mday"]."<br>";
 echo "months = ".$date_time["month"]."<br>";
 echo "years = ".$date_time["year"]."<br>";

 echo $date_time["mday"],"/",$date_time["month"],"/",$date_time["year"], "<br>";

 echo "hours = ".$date_time["hours"]."<br>";
 echo "minutes = ".$date_time["minutes"]."<br>";
 echo "second = ".$date_time["seconds"]."<br>";

 echo $date_time["hours"],":",$date_time["minutes"],":",$date_time["seconds"], "<hr>";
?>

<?php
 date_default_timezone_set("Asia/Bangkok");
 
 // mm/dd/YYYY
 $result=checkdate(2, 23, 2021);
 if($result){
  echo "format date correct";
 }else{
  echo "format date incorrect!!!";
 }
 echo "<hr>";
?>