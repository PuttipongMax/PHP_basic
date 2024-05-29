<?php
 $price=50; //integer;
 $score=90.58; //double;

 $name = "kongruksiam studio";
 $isvalid = false;

 $price = $price+100;

 echo $name."<br>";
 echo $isvalid."<br>";
 echo $price."<br>";
 echo $score."<br>";

 echo "<hr>";

 // gettype();
 echo gettype($score)."<br>";

 // settype()
 settype($score, "integer");
 
 echo gettype($score);
?>