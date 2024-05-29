<?php

$balance = 1000;
$withdraw = 300;

echo "เงินในบัญชี = ".$balance."<br>";
echo "จำนวนเงินที่ถอน = ".$withdraw."<br>";
if( $withdraw <= $balance && $withdraw > 0){
 echo "สามารถกดเงินได้ <br>";
 $balance = $balance-$withdraw; // คำนวณยอดเงินคงเหลือ
 echo "ยอดเงินคงเหลือ = ".$balance."<br>";
}
else{
 echo "ยอดเงินคงเหลือไม่พอ <br>";
}
echo "คืนบัตรกดเงิน<br>";

?>

<?php

 /* การหาพื้นที่สี่เหลื่ยม area = width * height */
 $width = 40;
 $height = 40;

 if($width>0 && $height>0){
  $area = $width * $height;
  echo "พื้นที่สี่เหลี่ยม = ".$area." ตารางนิ้ว <br>";
 }
 else{
  echo "ต้องป้อนตัวเลข ความกว้างเเละความสูง มากกว่า 0 <br>";
 }

?>

<?php

 $score=65;
 $grade = "";

 if($score >= 80){
  $grade= "A";
 }
 else if($score >= 70){
  $grade= "B";
 }
 else if($score >= 60){
  $grade= "C";
 }
 else if($score >= 50){
  $grade= "D";
 }
 else{
  $grade= "F";
 }

 echo "your score is ".$score." receive grade = ".$grade;

?>