<?php
 $total1=null;
 $total2="";
 $total3=0;
 $total4="Kongruksiam";

 // unset delete value $total4 to undefined
 unset($total4);

 // isset check variable is value. if has value is true(1) not hos is false
 echo "isset function"."<br>";
 echo "ตัวเเปร total1 = ".isset($total1)."<br>"; // false
 echo "ตัวเเปร total2 = ".isset($total2)."<br>"; // true(1)
 echo "ตัวเเปร total3 = ".isset($total3)."<br>"; // true(1)
 echo "ตัวเเปร total4 = ".isset($total4)."<br>"; // true(1)

 echo "<hr>";
 /* empty check variable is 0, " ", null els. has result is true(1) 
 if not empty is result to not show anything */
 $result1=null;
 $result2="";
 $result3=0;
 $result4="Kongruksiam";

 echo "empty function"."<br>";
 echo "ตัวเเปร result1 = ".empty($result1)."<br>"; // true(1)
 echo "ตัวเเปร result2 = ".empty($result2)."<br>"; // true(1)
 echo "ตัวเเปร result3 = ".empty($result3)."<br>"; // true(1)
 echo "ตัวเเปร result4 = ".empty($result4)."<br>"; // false
 echo "<hr>";

 // isnull function check variable is null has result is true(1) 
 echo "is_null function"."<br>";
 echo "ตัวเเปร result1 = ".is_null($result1)."<br>"; // true(1)
 echo "ตัวเเปร result1 = ".is_null($result2)."<br>"; // false
 echo "ตัวเเปร result1 = ".is_null($result3)."<br>"; // false
 echo "ตัวเเปร result1 = ".is_null($result4)."<br>"; // false
 echo "<hr>";

 echo "var_dump function"."<br>";
 echo var_dump($result1)."<br>"; // NULL
 echo var_dump($result2)."<br>"; // string(0) : ""
 echo var_dump($result3)."<br>"; // int(0) : 0
 echo var_dump($result4)."<br>"; // string(11) : "Kongruksiam"
 echo "<hr>";
?>