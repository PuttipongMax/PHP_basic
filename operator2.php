<?php 
 $a=500;
 $b="500";

 var_dump($a == $b)."<br>"; // same is value only
 var_dump($a === $b); // same is type and value 
 var_dump($a != $b); //  value is not equal only
 var_dump($a !== $b); // type and value is not equal
 var_dump($a > $b); // compare $a more than $b and return true or false
 var_dump($a <> $b); //  value is not equal only equal ' != '
 var_dump($a >= $b); // compare $a more than or equal $b and return true or false

 /*
 operator spaceship in use php seven
 
 a<b = -1
 a=b = 0
 a>b = 1

 <=> is operator spaceship

 */

 var_dump($a<=>$b);

?>