<?php
 // array key
 $number = array(10, 20, 30);

 print_r($number);
 echo "<br>";
 $number[1] = 15;
 
 print($number[0]."<br>");
 print($number[1]."<br>");
 print($number[2]."<br>");
?>

<?php
 // array pair-key
 $products = array("กล้วย"=>50, "กระเป๋า"=>15000, "โต๊"=>500);

 print($products["กระเป๋า"]);
 echo "<br>";
?>

<?php
 // construct of range = range(start, stop, step);
 $number = range(1,20);
 $numberOdd = range(1,20,2);

 print_r($numberOdd);
 echo "<br>";

 $alphabet = range("A", "Z");
 $alphabetDivide = range("A", "Z", 2);

 print_r($alphabetDivide);
 echo "<br>";
?>

<?php
 // create array with blanket
 $number = [10, 20, 40];
 $animals = ["dog"=>"หมา", "cat"=>"เเมว", "pig"=>"หมู"];
 
 print($animals["cat"]);
?>