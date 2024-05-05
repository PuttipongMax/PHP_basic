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
 
 print($animals["cat"]."<br>");
?>

<?php
 // Accessing array data with a for loop
 $number = [10, 20, 30, 40, 50];
 $fruit = ["orange", "papaya", "apple", "banana", "jackfruit", "grape", "banana"];

 $totalFruit = count($fruit);
 for($index = 0; $index<$totalFruit; $index++){
  print("position = ".$index." => ".$fruit[$index]."<br>");
 }
 
 // search duplicate values in array
 print_r(array_count_values($fruit));
 echo "<br>";
?>

<?php
 $animals = ["dog"=>"สุนัข", "cat"=>"เเมว", "pig"=>"หมู", "rabbit"=>"กระต่าย"];

 // not use already.
 // while($item=each($animals)){
 //  print("Key = ".$item["key"]." value = ".$item["value"]."<br>");
 // }
?>

<?php
 $animals = ["dog"=>"สุนัข", "cat"=>"เเมว", "pig"=>"หมู", "rabbit"=>"กระต่าย"];
 
 foreach($animals as $en => $th){
  print("คำศัพท์ ".$en."<br>");
 }
 echo "hello<br>";
?>

<?php
 // array key
 $number = [10, 20, 30, 40, 10, 20, 30, 40, 10];
 $fruit = ["ส้ม", "มะละกอ", "เเอปเปิ้ล", "กล้วย", "ขนุน", "น้อยหน่า", "กล้วย", "องุ่น", "เเตงโม"];
 foreach($fruit as $item){
  print($item."<br>");
 }

 // array pair-key
 $animals = ["dog"=>"สุนัข", "cat"=>"เเมว", "pig"=>"หมู", "rabbit"=>"กระต่าย"];
 foreach($animals as $key=>$value){
  print($key." => ".$value."<br>");
 }
?>

<?php
 // array 2D
//  $products = array(
//   array("คีบอร์ด", "keyboard", 900),
//   array("เมาส์", "Mouse", 1200),
//   array("โต๊ะ", "Table", 3000)
//  );

//  print($products[0][0]); // คีบอร์ด
//  echo "<br>";
//  print($products[2][1]); // Table

$products = array(
  array("TH"=>"คีบอร์ด", "EN"=>"keyboard", "Price"=>900),
  array("TH"=>"เมาส์", "EN"=>"Mouse", "Price"=>1200),
  array("TH"=>"โต๊ะ", "EN"=>"Table", "Price"=>3000),
  array("TH"=>"จอ", "EN"=>"Monitor", "Price"=>12000)
 );

 foreach($products as $product){
  print("ชื่อสินค้า (TH) = ".$product["TH"]."<br>"); 
  print("ชื่อสินค้า (EN) = ".$product["EN"]."<br>");
  print("ราคา = ".$product["Price"]." บาท <br>");
  echo "<hr>";
 }
?>

<?php
 $fruits = ["มะละกอ", "ฝรั้ง", "มะนาว", "ทุเรียน"];
 print_r($fruits);
 echo "<br>";

 array_push($fruits, "มะม่วง");
 array_push($fruits, "มังคุด");
 array_pop($fruits);
 array_unshift($fruits, "ส้ม");
 array_unshift($fruits, "องุ่น");
 array_shift($fruits);

 print_r($fruits);
?>