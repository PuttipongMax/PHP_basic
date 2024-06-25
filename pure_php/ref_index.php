
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
 <script>
  function closeWindow(){  
   window.close();  
  } 
  function requestRate(req, effective_date, auto_id, date, mlr_rate, mrr_rate){
   var form = document.createElement('form');
    form.method = 'post';
    form.action = `request_ref.php?req=${req}&effective_date=${effective_date}`;

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

    document.body.appendChild(form);
    form.submit();
  }
 </script>
</head>
<body>
  <h1 style="display: flex; justify-content: center; align-items: center;">จัดการอัตราดอกเบี้ย</h1>
  <table width="100%" border="0" cellpadding="3" cellspacing="2" bgcolor="#EAEAEA">
   <tr bgcolor="#73ABD1">
    <th align="center" width="16%">REF-ID</th>
    <th align="center" width="16%">Effective_date</th>
    <th align="center" width="16%">MLR</th>
    <th align="center" width="16%">MRR</th>
    <th align="center" width="16%">edit/cancel</th>
   </tr>
<?php 
 include('./config/config.php');
 session_start();
 $sql_fetch = "SELECT
    ROW_NUMBER() OVER (ORDER BY g.effective_date ASC) AS auto_id,
    g.\"effective_date\",
    g.\"ref_valule\" AS MLR,
    d.\"ref_valule\" AS MRR
   FROM
    ref_interest g
   JOIN
    ref_interest d
   ON
    g.\"effective_date\" = d.\"effective_date\"
    AND g.\"ref_code\" = 'MLR'
    AND d.\"ref_code\" = 'MRR'
   ORDER BY effective_date ASC
 ";
 $result_fetch = pg_query($sql_fetch);
 if(pg_num_rows($result_fetch) > 0){
  $i = 0;
  while($res = pg_fetch_assoc($result_fetch)){
   $auto_id = $res['auto_id'];
   $effective_date = $res['effective_date'];
   $mlr_rate = $res['mlr'];
   $mrr_rate = $res['mrr'];

   $pattern = '/^(\d{4}-\d{2}-\d{2}) (\d{2}:\d{2})/';
   if (preg_match($pattern, $effective_date, $matches)) { 
     $date = $matches[1];
     $time = $matches[2];
   }

   $bgcolor = ($i % 2 == 0) ? "" : "#fff";
   echo "
    <tr bgcolor=\"$bgcolor\">
     <td align=\"center\">$auto_id</td> 
     <td align=\"center\">$date</td>
     <td align=\"center\">$mlr_rate</td>
     <td align=\"center\">$mrr_rate</td>
     <td align=\"center\">
      <input type='button' id='edit' name='edit' value='แก้ไข' onclick=\"requestRate('edit', '$effective_date', '$auto_id', '$date', '$mlr_rate', '$mrr_rate')\">
      <input type='button' id='cancel' name='cancel' value='ยกเลิก' onclick=\"if(confirm('ยืนยันการลบอัตราดอกเบี้ยอ้างอิง')){ requestRate('cancel', '$effective_date') }\">
     </td>
    </tr>  
   ";
  }
 }
?>
 </table>
 <div style="display: flex; justify-content: center; align-items: center;
 background-color: #73ABD1; margin-top: 4px; padding-top: 0.5rem; padding-bottom: 0.5rem;">
  <button id='close' onclick="closeWindow()">ปิด</button>
  <button id=create' onclick="requestRate('add', '<?php echo $effective_date; ?>')">เพิ่มอัตราดอกเบี้ยอ้างอิง</button>
 </div> 
</body>
</html>
