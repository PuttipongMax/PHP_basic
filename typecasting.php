<?php

 $price="100";

 $delivery=50;

 // "100" + 50 = 150 typecasting with system php
 $total=$price + $delivery;
 echo $total."<br>"; 

 $number = 200.9;
 echo $number."<br>";

 // typecasting with owner
 $number = (string)$number;
 echo gettype($number);
?>