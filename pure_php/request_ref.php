<?php 
 include('./config/config.php');

 if (isset($_GET['req'], $_GET['effective_date'])){
  $req = $_GET['req'];
  $effective_date = $_GET['effective_date'];
  if($_POST && $req === 'edit'){
   $auto_id = $_POST['auto_id'];
   $date = $_POST['date'];
   $mlr_rate = $_POST['mlr_rate'];
   $mrr_rate = $_POST['mrr_rate'];
   $remark = "";
  }
  else if($_POST && $req === 'add'){
   $date = "";
   $mlr_rate = "";
   $mrr_rate = "";
   $remark = "";
  }

  echo $date, $mlr_rate, $mrr_rate, $remark;
 }else{
  echo "ไม่พบข้อมูลที่ส่งมา";
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
 <script>
  function back(){  
   window.location.href="ref_index.php";
  }
  function handleInputChange(event){
    document.getElementById('mlr_rate').value = event.target.value;
    console.log('newValue: ', event.target.value);

    form.appendChild(autoIDInput);
  }
 </script>
</head>
<body>
  <div style="display: flex; flex-direction: column; justify-content: center; 
  align-items: center; ">
   <h2>การจัดการดอกเบี้ย</h2>
   <form>
    <div style="display: flex; flex-direction: column; justify-content: center; align-items: start;
    gap: 1rem; background-color: #98FB98; padding: 2rem 2rem 1rem 2rem; border-style: solid solid none solid; border-color: #111;
    ">    
     <label style="display: flex; justify-content: center; align-items: start; gap: 1.5rem;">
      เวลาที่มีผล
      <input value="<?php echo $date; ?>" readonly>
     </label >
     <lSabel style="display: flex; justify-content: center; align-items: start; gap: 3.8rem;">
      MLR
      <input value="<?php echo $mlr_rate; ?>" onchange="(event) => handleInputChange(event.target.value)" >
     </lSabel>
     <label style="display: flex; justify-content: center; align-items: start; gap: 3.8rem;">
      MRR
      <input value="<?php echo $mrr_rate; ?>" >
     </label>
     <label style="display: flex; justify-content: center; align-items: start; gap: 3.2rem;">
      remark
      <input value="" >
     </label>
    </div>   
   </form>
   <div style="width: 20.6rem; height: 2rem; background-color: #98FB98;
    border-style: none solid solid solid; border-color: #111;
    display: flex; justify-content: center; align-items: start;">
    <button type="button" id="back" onclick="back()" style="margin: 0 0 0 2rem;">กลับ</button>
    <button style="margin-left: 1rem;">บันทึก</button>
   </div>
 </div>
</body>
</html>