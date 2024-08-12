<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bot-menu</title>
</head>
<body>
    <?php
    // Data array in PHP
    $data_bot = [
        "a" => [
            ["code" => "62140", "descript" => "zip code Kamp", "details" => "note Kamp"],
            ["code" => "78531", "descript" => "zip code Pra", "details" => "note Pra"]
        ],
        "b" => [
            ["code" => "61050", "descript" => "zip code Nkr", "details" => "note Nkr"]
        ],
        "c" => [
            ["code" => "10540", "descript" => "zip code Sum", "details" => "note Sum"]
        ],
        "d" => [
            ["code" => "58430", "descript" => "zip code Bank", "details" => "note Bank"]
        ]
    ];

    // Determine which checkbox is selected
    $selected = $_POST['data'] ?? 'a'; // Default to 'a' if none is selected
    ?>

    <form method="post">
        <div>
            <label>
                <input type="checkbox" name="data" value="a" <?php echo ($selected === 'a') ? 'checked' : ''; ?> onchange="this.form.submit()">
                แสดงข้อมูล a
            </label>
            <label>
                <input type="checkbox" name="data" value="b" <?php echo ($selected === 'b') ? 'checked' : ''; ?> onchange="this.form.submit()">
                แสดงข้อมูล b
            </label>
            <label>
                <input type="checkbox" name="data" value="c" <?php echo ($selected === 'c') ? 'checked' : ''; ?> onchange="this.form.submit()">
                แสดงข้อมูล c
            </label>
            <label>
                <input type="checkbox" name="data" value="d" <?php echo ($selected === 'd') ? 'checked' : ''; ?> onchange="this.form.submit()">
                แสดงข้อมูล d
            </label>
        </div>
    </form>

    <div id="table-container" style="<?php echo empty($selected) ? 'display: none;' : 'display: block;'; ?>">
        <table border="1">
            <tr>
                <th>ลำดับ</th>
                <th>รหัส</th>
                <th>คำอธิบาย</th>
                <th>รายละเอียด</th>
            </tr>
            <tbody id="bot-table">
                <?php if (!empty($selected)) : ?>
                    <?php foreach ($data_bot[$selected] as $index => $item) : ?>
                        <tr>
                            <td><?php echo strtoupper($selected) . '-' . ($index + 1); ?></td>
                            <td><?php echo htmlspecialchars($item['code']); ?></td>
                            <td><?php echo htmlspecialchars($item['descript']); ?></td>
                            <td><?php echo htmlspecialchars($item['details']); ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
