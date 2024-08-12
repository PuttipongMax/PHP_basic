<?php 
  include('./config/config.php');

  $date = "";
  $mlr_rate = "";
  $mrr_rate = "";
  $remark = "";
  $auto_id = ""; // Add this line to initialize $auto_id

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

  echo $date, $mlr_rate, $mrr_rate, $remark, $req;
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
  function validateNumberFormat(value) {
    const pattern = /^\d{1,2}\.\d{3}$/;
    return pattern.test(value);
  }

  function requestRate(req, effective_date, auto_id, date, mlr_rate, mrr_rate, remark){
    if (!validateNumberFormat(mlr_rate)) {
      alert("MLR rate must follow the format ##.###");
      return;
    }
    if (!validateNumberFormat(mrr_rate)) {
      alert("MRR rate must follow the format ##.###");
      return;
    }
  
    var form = document.createElement('form');
    form.method = 'post';
    form.action = `process_ref.php?req=${req}&effective_date=${effective_date}`;

    var autoIDInput = document.createElement('input');
    autoIDInput.type = 'hidden';
    autoIDInput.name = 'auto_id';
    autoIDInput.value = auto_id;
    form.appendChild(autoIDInput);

    var dateInput = document.createElement('input');
    dateInput.type = 'hidden';
    dateInput.name = 'date';
    dateInput.value = date;
    form.appendChild(dateInput);

    var mlrRateInput = document.createElement('input');
    mlrRateInput.type = 'hidden';
    mlrRateInput.name = 'mlr_rate';
    mlrRateInput.value = mlr_rate;
    form.appendChild(mlrRateInput);

    var mrrRateInput = document.createElement('input');
    mrrRateInput.type = 'hidden';
    mrrRateInput.name = 'mrr_rate';
    mrrRateInput.value = mrr_rate;
    form.appendChild(mrrRateInput);

    var remarkInput = document.createElement('input');
    remarkInput.type = 'hidden';
    remarkInput.name = 'remark';
    remarkInput.value = remark;
    form.appendChild(remarkInput);

    document.body.appendChild(form);
    form.submit();
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
      <?php if($req === 'edit'): ?>
        <input name="date" value="<?php echo $date; ?>" readonly>
      <?php elseif($req === 'add'): ?>
        <input name="date" value="<?php echo $date; ?>" >
      <?php endif; ?>
     </label >
     <label style="display: flex; justify-content: center; align-items: start; gap: 3.8rem;">
      MLR
      <input name="mlr_rate" value="<?php echo $mlr_rate; ?>" >
     </label>
     <label style="display: flex; justify-content: center; align-items: start; gap: 3.8rem;">
      MRR
      <input name="mrr_rate" value="<?php echo $mrr_rate; ?>" >
     </label>
     <label style="display: flex; justify-content: center; align-items: start; gap: 3.2rem;">
      remark
      <input name="remark" value="<?php echo $remark; ?>" >
     </label>
    </div>   
   </form>
   <div style="width: 20.6rem; height: 2rem; background-color: #98FB98;
    border-style: none solid solid solid; border-color: #111;
    display: flex; justify-content: center; align-items: start;">
    <button type="button" id="back" onclick="back()" style="margin: 0 0 0 2rem;">กลับ</button>
    <button 
      style="margin-left: 1rem;" 
      onclick="requestRate(
       '<?php echo $req; ?>', 
       '<?php echo $effective_date; ?>', 
       '<?php echo $auto_id; ?>', 
       document.querySelector('input[name=date]').value, 
       document.querySelector('input[name=mlr_rate]').value,
       document.querySelector('input[name=mrr_rate]').value, 
       document.querySelector('input[name=remark]').value)
       ">
        บันทึก
      </button>
   </div>
 </div>
</body>
</html>