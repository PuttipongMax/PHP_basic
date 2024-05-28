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

<?php
 $fruits=["มะละกอ", "ฝรั่ง", "มะนาว", "ทุเรียน"];

 // array_splice( "ชื่อ array", "ตำเเหน่ง index", "จำนวนที่ต้องการลบ" )
 print_r($fruits); echo "<hr>";
 print("<br>");
 $newfruits = array("องุ่น", "มะนาว");

 // remove index 1 to 2 out array $fruits
 array_splice($fruits, 1, 2);
 //  $newfruits into $fruits
 array_splice($fruits, 1, 0, $newfruits);
 print_r($fruits); echo "<hr>";
?>

<?php
 // single sort & single r_sort
 $number=[10, 2, 3, 45, 150, 60, -10, 30, 40, 50, 60, 70];
 $city = [
  "กรุงเทพมหานคร",
  "เชียงใหม่",
  "ภูเก็ต",
  "ชลบุรี",
  "นครราชสีมา",
  "ขอนแก่น",
  "เชียงราย",
  "สงขลา",
  "พิษณุโลก",
  "สุราษฎร์ธานี"
];

sort($number);
print_r($number); echo "<hr>";
rsort($number);
print_r($number);  echo "<hr>";

sort($city);
print_r($city); echo "<hr>";
rsort($city);
print_r($city);  echo "<hr>";

?>

<?php
 // pair sort & single r_sort
 $arr = ["A"=>20, "C"=>15, "B"=>30, "D"=>25];
 $country = ["TH"=>"ไทย", "JP"=>"ญี่ปุ่น", "US"=>"สหรัฐอเมริกา", "CN"=>"จีน"];
 // sort value 
 asort($arr);
 print_r($arr); echo "<hr>";
 arsort($arr);
 print_r($arr);  echo "<hr>";
 // sort key
 ksort($country);
 print_r($country); echo "<hr>";
 krsort($country);
 print_r($country);  echo "<hr>";
?>

<?php
  $city = [
   "กรุงเทพมหานคร",
   "เชียงใหม่",
   "ภูเก็ต",
   "ชลบุรี",
   "นครราชสีมา",
   "ขอนแก่น",
   "เชียงราย",
   "สงขลา",
   "พิษณุโลก",
   "สุราษฎร์ธานี"
 ];
 // Random switching
 print_r($city); echo "<hr>";
 shuffle($city);
 print_r($city); echo "<hr>";
?>

<?php
 $number=[10, 2, 3, 45, 150, 60, -10, 30, 40, 50, 60, 70];
 print_r($number); echo "<hr>";

 $newArray = array_reverse($number);
 print_r($newArray); echo "<hr>";
?>

<?php
 $number = [10, 20, 15, 20, 30, 10, 20];
 $colors = ["red"=>"สีเเดง", "yellow"=>"สีเหลือง", "green"=>"สีเขียว"];
 print_r($colors); echo "<hr>";

 $color_keys = array_keys($colors);
 $color_value = array_values($colors);
 print_r($color_keys); echo "<hr>";
 print_r($color_value); echo "<hr>";

 $result = array_flip($colors);
 print("<hr>");
 print_r($result); echo "<hr>";

 print_r($number); echo "<hr>";
 $unique = array_unique($number);
 print_r($unique); echo "<hr>";
?>

<?php
 $number = [10, 20, 15, 20, 30, 10, 20];
 $colors = ["red"=>"สีเเดง", "yellow"=>"สีเหลือง", "green"=>"สีเขียว"];
 if(array_key_exists("green", $colors)){
  print_r("find key success"); echo "<hr>";
 } else{
  print("not found key"); echo "<hr>";
 }
 if(in_array("สีเเดง", $colors)){
  print("find value success"); echo "<hr>";
 } else{
  print("not found value"); echo "<hr>";
 }
?>

<?php
 $arr1=["product"=>"table", "color"=>"orange", "price"=>500];
 $arr2=["discount"=>100, "delivery"=>30, "price"=>2000];

 $resultMerge = array_merge($arr1, $arr2);
 print_r($resultMerge); echo "<hr>";

 $resultRecursiveMerge = array_merge_recursive($arr1, $arr2);
 print_r($resultRecursiveMerge); echo "<hr>";
?>

<?php
 $arr1 = ["dog", "cat", "pig", "ant"];
 $arr2 = ["หมา", "เเมว", "หมู", "มด"];

 $resultCombine = array_combine($arr1, $arr2);
 print_r($resultCombine);
?>





