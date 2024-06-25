<?php
include('./config/config.php');

if (isset($_GET['req'], $_GET['effective_date'])) {
  $req = $_GET['req'];
  $effective_date = $_GET['effective_date'];

  if ($_POST && $req === 'edit' ) {
    $auto_id = isset($_POST['auto_id']) ? $_POST['auto_id'] : '';
    $date = isset($_POST['date']) ? $_POST['date'] : '';
    $mlr_rate = isset($_POST['mlr_rate']) ? $_POST['mlr_rate'] : '';
    $mrr_rate = isset($_POST['mrr_rate']) ? $_POST['mrr_rate'] : '';
    $remark = isset($_POST['remark']) ? $_POST['remark'] : '';

    // Insert or update the database
    // ตัวอย่างการเชื่อมต่อกับฐานข้อมูลและดำเนินการ
    // $sql = "INSERT INTO your_table (auto_id, date, mlr_rate, mrr_rate, remark, effective_date) 
    //         VALUES ('$auto_id', '$date', '$mlr_rate', '$mrr_rate', '$remark', '$effective_date')";
    // $result = pg_query($sql);

    // if ($result) {
    //   echo "บันทึกข้อมูลเรียบร้อยแล้ว";
    // } else {
    //   echo "เกิดข้อผิดพลาดในการบันทึกข้อมูล";
    // }
  } else if ($_POST && $req === 'add') {
    // Similar code for add case
    $auto_id = '';
    $date = isset($_POST['date']) ? $_POST['date'] : '';
    $mlr_rate = isset($_POST['mlr_rate']) ? $_POST['mlr_rate'] : '';
    $mrr_rate = isset($_POST['mrr_rate']) ? $_POST['mrr_rate'] : '';
    $remark = isset($_POST['remark']) ? $_POST['remark'] : '';
  }
  echo $date, $mlr_rate, $mrr_rate, $remark, $req;
} else {
  echo "ไม่พบข้อมูลที่ส่งมา";
}
