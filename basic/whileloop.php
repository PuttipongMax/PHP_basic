<?php

$count=1;
$limit=10;
while($count <= $limit){
 echo "Round no.".$count."<br>";
 $count++;
}

echo "program end."

?>

<?php
 $count=1;
 $limit=10;
?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<body>
 <h1>Food Menu</h1>
 <select name="" id="">
  <?php while($count <= $limit){?>
  <option value="<?php echo $count;?>">menu no <?php echo $count; ?></option>  
  <?php
   $count++;
  }
  ?>
 </select>
</body>
</html>