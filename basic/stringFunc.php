<?php
 $str1 = "Kong";
 $str2 = "love php";
 $str3 = "basic";

 echo $str1, $str2, $str3; echo "<hr>";

 print($str1);
 print($str2);
 print($str3); echo "<hr>";
?>

<?php
 // compare string
 $str1="kongruksiam";
 $str2="KONGruksiam";

 $result=strcmp($str1, $str2); // case sensitive 
 if($result==0){
  echo "str1 and str2 equal value";
 }else if($result == -1) {
  echo "str1 less than str2";
 }else if($result == 1) {
  echo "str1 more than str2";
 }
 echo "<hr>";

 $result2=strcasecmp($str1, $str2); // not cas case sensitive
 if($result2==0){
  echo "str1 and str2 equal value";
 }else if($result2 == -1) {
  echo "str1 less than str2";
 }else if($result2 == 1) {
  echo "str1 more than str2";
 }else{
  echo "not case";
 }
 echo "<br>";
 echo $result2; echo "<hr>";
?>

<?php 
 $str1="kongrUksiam";
 $str2="kongruksiam";
 $total = strspn($str1, $str2);
 echo "matching found : ".$total; echo "<hr>";

 $totals = strcspn($str1, $str2);
 echo "not matching found : ".$totals; echo "<hr>";
?>

<?php
 $str="     Kongruksiam ";

 $count = strlen($str);
 echo "length message ".$count; echo "<br>";

 $resultTrim = trim($str);
 echo "length message ".strlen($resultTrim); echo "<br>";

 $resultLtrim = ltrim($str);
 echo "length message ".strlen($resultLtrim); echo "<br>";

 $resultRtrim = rtrim($str);
 echo "length message ".strlen($resultRtrim); echo "<hr>";
?>

<?php
 $str = "hello world I love Php";

 print($str); echo "<br>";
 $lower = strtolower($str);
 echo $lower."<br>";

 $upper = strtoupper($str);
 echo $upper."<br>";

 $wordUc = ucwords($str);
 echo $wordUc."<br>";

 $wordFirst = ucfirst($str);
 echo $wordFirst."<hr>";
?>

<?php
 $arr=array("Hello", "World", "i", "love", "PHP");

 $str=implode("-", $arr); // concat array string
 echo $str."<br>";

 $strExplode = explode("-", $str);
 echo "your name ".$strExplode[0]."<br>";
 echo "your come from ".$strExplode[1]."<hr>";
?>

<?php
 $txt = "kongruksiam";

 echo $txt."<br>";
 echo substr($txt, 3)."<br>";
 echo substr($txt, 3, 3)."<br>";

 $arr = str_split($txt, 4);
 print_r($arr); echo "<hr>";
?>

<?php
 $str = "Hello PHP I Love PHP";

 $result = strstr($str, "hello");
 if($result){
  print("message found");
 }else {
  print("message not found");
 }
 echo "<hr>";

 // not case sensitive
 $result2 = stristr($str, "hello");
 if($result2){
  print("message found");
 }else {
  print("message not found");
 }
 echo "<hr>";
?>

<?php  
 $str = "Hello PHP, Hello JavaScript";

 $newStr = str_replace("Hello", "สวัสดี", $str);
 print($str."<br>");
 print($newStr."<br>");

 $newStr2 = strrev($str);
 print($newStr2."<br>");

 $newStr3 = str_repeat($str, 5);
 print($newStr3."<h>");
?>
