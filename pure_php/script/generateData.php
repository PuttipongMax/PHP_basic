<?php
// include('./config/config.php');
// ฟังก์ชันเพื่อสร้างข้อมูลในรูปแบบที่กำหนด
function generateData($num_records) {
    $data = [];
    
    for ($i = 0; $i < $num_records; $i++) {
        // สร้างวันที่แบบสุ่ม
        $year = rand(2550, 2565); // ใช้ปีพ.ศ.ในช่วง 2550-2565
        $month = rand(1, 12);
        $day = rand(1, 28); // เพื่อหลีกเลี่ยงปัญหาวันที่เกินในบางเดือน
        $date = sprintf('%04d-%02d-%02d', $year, $month, $day);
        
        // สร้างค่าดอกเบี้ยแบบสุ่ม
        $mlr = number_format(rand(500, 1200) / 100, 2); // ค่า MLR ในช่วง 5.00-12.00
        $mrr = number_format(rand(700, 2500) / 100, 2); // ค่า MRR ในช่วง 7.00-15.00
        
        // เพิ่มข้อมูลเข้าไปในอาร์เรย์
        $data[] = [
            'date' => $date,
            'MLR' => $mlr,
            'MRR' => $mrr
        ];
    }
    
    return $data;
}

// สร้างข้อมูล 10 รายการ
$num_records = 10;
$data = generateData($num_records);

// เชื่อมต่อฐานข้อมูล (สมมติใช้ PDO)
try {
    $pdo = new PDO('pgsql:host=localhost;dbname=approve_ref_interest', 'postgres', '1234');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // เตรียมคำสั่ง SQL สำหรับการ insert
    $stmt = $pdo->prepare("
        INSERT INTO ref_interest (ref_code, ref_valule, date, effective_date) 
        VALUES (:ref_code, :ref_value, :date, :effective_date)
    ");
    
    // Loop ผ่านข้อมูลที่สร้างขึ้นและทำการ insert
    foreach ($data as $record) {
        $date = $record['date'];
        
        // Insert MLR
        $stmt->execute([
            ':ref_code' => 'MLR',
            ':ref_value' => $record['MLR'],
            ':date' => $date,
            ':effective_date' => $date
        ]);

        // Insert MRR
        $stmt->execute([
            ':ref_code' => 'MRR',
            ':ref_value' => $record['MRR'],
            ':date' => $date,
            ':effective_date' => $date
        ]);
    }

    echo "Data inserted successfully!";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
