<!DOCTYPE html>
<html lang="th">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Bot-menu</title>
 <script>
  const data_bot = {
   "a": [
    {
     "code": "62140",
     "descript": "zip code Kamp",
     "details": "note Kamp"
    },
    {
     "code": "78531",
     "descript": "zip code Pra",
     "details": "note Pra"
    }
   ],
   "b": [
    {
     "code": "61050",
     "descript": "zip code Nkr",
     "details": "note Nkr"
    }
   ],
   "c": [
    {
     "code": "10540",
     "descript": "zip code Sum",
     "details": "note Sum"
    }
   ],
   "d": [
    {
     "code": "58430",
     "descript": "zip code Bank",
     "details": "note Bank"
    }
   ]
  };

  function displayData() {
   const table = document.getElementById('bot-table');
   table.innerHTML = ''; // ล้างข้อมูลเดิมในตาราง

   // วนลูปผ่านเช็คบ็อกซ์ทั้งหมด
   const checkboxes = document.querySelectorAll('.data-checkbox');
   checkboxes.forEach((checkbox) => {
    if (checkbox.checked) {
     const key = checkbox.value;
     const items = data_bot[key];

     items.forEach((value, index) => {
      const row = document.createElement('tr');

      // คอลัมน์ลำดับ
      const cellIndex = document.createElement('td');
      cellIndex.textContent = `${key.toUpperCase()}-${index + 1}`;
      row.appendChild(cellIndex);

      // คอลัมน์รหัส
      const cellCode = document.createElement('td');
      cellCode.textContent = value.code;
      row.appendChild(cellCode);

      // คอลัมน์คำอธิบาย
      const cellDescription = document.createElement('td');
      cellDescription.textContent = value.descript;
      row.appendChild(cellDescription);

      // คอลัมน์รายละเอียด
      const cellDetails = document.createElement('td');
      cellDetails.textContent = value.details;
      row.appendChild(cellDetails);

      table.appendChild(row);
     });
    }
   });
  }

  function toggleTable(event) {
   const checkboxes = document.querySelectorAll('.data-checkbox');
   const clickedCheckbox = event.target;

   // Uncheck all checkboxes except the clicked one
   checkboxes.forEach(checkbox => {
    if (checkbox !== clickedCheckbox) {
     checkbox.checked = false;
    }
   });

   const isAnyChecked = clickedCheckbox.checked;
   const tableContainer = document.getElementById('table-container');

   if (isAnyChecked) {
    tableContainer.style.display = 'block';
    displayData();
   } else {
    tableContainer.style.display = 'none';
   }

   // const checkboxes = document.querySelectorAll('.data-checkbox');
   // const isAnyChecked = Array.from(checkboxes).some(checkbox => checkbox.checked);
   // const tableContainer = document.getElementById('table-container');

   // if (isAnyChecked) {
   //  tableContainer.style.display = 'block';
   //  displayData();
   // } else {
   //  tableContainer.style.display = 'none';
   // }
  }

  window.onload = function() {
   document.querySelector('input[value="a"]').checked = true; // Check the "a" checkbox by default
   toggleTable({ target: document.querySelector('input[value="a"]') }); // Display the "a" table by default
  };
 </script>
</head>
<body>
 <div>
  <div>
   <label>
    <input type="checkbox" class="data-checkbox" value="a" onclick="toggleTable(event)">
    แสดงข้อมูล a
   </label>
   <label>
    <input type="checkbox" class="data-checkbox" value="b" onclick="toggleTable(event)">
    แสดงข้อมูล b
   </label>
   <label>
    <input type="checkbox" class="data-checkbox" value="c" onclick="toggleTable(event)">
    แสดงข้อมูล c
   </label>
   <label>
    <input type="checkbox" class="data-checkbox" value="d" onclick="toggleTable(event)">
    แสดงข้อมูล d
   </label>
  </div>
  <div id="table-container" style="display: none;">
   <table border="1">
    <tr>
     <th>ลำดับ</th>
     <th>รหัส</th>
     <th>คำอธิบาย</th>
     <th>รายละเอียด</th>
    </tr>
    <tbody id="bot-table">
    </tbody>
   </table>
  </div>
 </div>
</body>
</html>



<!-- <!DOCTYPE html>
<html lang="th">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Bot-menu</title>
 <script>
  const data_bot = {
   "a": [
    {
    "code": "62140",
    "descript": "zip code Kamp",
    "details": "note Kamp"
    },
    {
    "code": "78531",
    "descript": "zip code Pra",
    "details": "note Pra"
    }
  ],
   "b": {
    "code": "61050",
    "descript": "zip code Nkr",
    "details": "note Nkr"
   },
   "c": {
    "code": "10540",
    "descript": "zip code Sum",
    "details": "note Sum"
   },
   "d": {
    "code": "58430",
    "descript": "zip code Bank",
    "details": "note Bank"
   }
  };

  function displayData() {
   const table = document.getElementById('bot-table');
   table.innerHTML = ''; // ล้างข้อมูลเดิมในตาราง

   // วนลูปผ่านเช็คบ็อกซ์ทั้งหมด
   const checkboxes = document.querySelectorAll('.data-checkbox');
   checkboxes.forEach((checkbox) => {
    if (checkbox.checked) {
     const key = checkbox.value;
     const value = data_bot[key];
     const row = document.createElement('tr');

     // คอลัมน์ลำดับ
     const cellIndex = document.createElement('td');
     cellIndex.textContent = key.toUpperCase();
     row.appendChild(cellIndex);

     // คอลัมน์รหัส
     const cellCode = document.createElement('td');
     cellCode.textContent = value.code;
     row.appendChild(cellCode);

     // คอลัมน์คำอธิบาย
     const cellDescription = document.createElement('td');
     cellDescription.textContent = value.descript;
     row.appendChild(cellDescription);

     // คอลัมน์รายละเอียด
     const cellDetails = document.createElement('td');
     cellDetails.textContent = value.details;
     row.appendChild(cellDetails);

     table.appendChild(row);
    }
   });
  }

  function toggleTable() {
   const checkboxes = document.querySelectorAll('.data-checkbox');
   const isAnyChecked = Array.from(checkboxes).some(checkbox => checkbox.checked);
   const tableContainer = document.getElementById('table-container');

   if (isAnyChecked) {
    tableContainer.style.display = 'block';
    displayData();
   } else {
    tableContainer.style.display = 'none';
   }
  }
 </script>
</head>
<body>
 <div>
  <div>
   <label>
    <input type="checkbox" class="data-checkbox" value="a" onclick="toggleTable()">
    แสดงข้อมูล a
   </label>
   <label>
    <input type="checkbox" class="data-checkbox" value="b" onclick="toggleTable()">
    แสดงข้อมูล b
   </label>
   <label>
    <input type="checkbox" class="data-checkbox" value="c" onclick="toggleTable()">
    แสดงข้อมูล c
   </label>
   <label>
    <input type="checkbox" class="data-checkbox" value="d" onclick="toggleTable()">
    แสดงข้อมูล d
   </label>
  </div>
  <div id="table-container" style="display: none;">
   <table border="1">
    <tr>
     <th>ลำดับ</th>
     <th>รหัส</th>
     <th>คำอธิบาย</th>
     <th>รายละเอียด</th>
    </tr>
    <tbody id="bot-table">
    </tbody>
   </table>
  </div>
 </div>
</body>
</html> 

<! ---------------------------------------------------- -->

<!-- <!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Bot-menu</title>
 <script>
  const data_bot = [
   {
    "a" : {
     "code" : "62140",
     "descript" : "zip code Kamp",
     "details" : "note kamp"
    }
   },
   {
    "b" : {
     "code" : "61050",
     "descript" : "zip code Nkr",
     "details" : "note Nkr"
    }
   },
   {
    "c" : {
     "code" : "10540",
     "descript" : "zip code Sum",
     "details" : "note Sum"
    }
   },
   {
    "d" : {
     "code" : "58430",
     "descript" : "zip code Bank",
     "details" : "note Bank"
    }
   }
  ];

  function displayData() {
   const table = document.getElementById('bot-table');
   data_bot.forEach((item, index) => {
    const key = Object.keys(item)[0];
    const value = item[key];
    const row = document.createElement('tr');

    // Index column
    const cellIndex = document.createElement('td');
    cellIndex.textContent = index + 1;
    row.appendChild(cellIndex);

    // Checkbox column
    const cellCheckbox = document.createElement('td');
    const checkbox = document.createElement('input');
    checkbox.type = 'checkbox';
    checkbox.id = key;
    checkbox.value = value;
    checkbox.addEventListener('change', function() {
     const details = document.getElementById(`details-${key}`);
     if (this.checked) {
      details.style.display = 'table-cell';
     } else {
      details.style.display = 'none';
     }
    });
    cellCheckbox.appendChild(checkbox);
    row.appendChild(cellCheckbox);

    // Description column
    const cellDescription = document.createElement('td');
    cellDescription.textContent = `Description for ${key}`;
    row.appendChild(cellDescription);

    // Details column
    const cellDetails = document.createElement('td');
    cellDetails.id = `details-${key}`;
    cellDetails.style.display = 'none';
    cellDetails.textContent = `Details about ${value}`;
    row.appendChild(cellDetails);

    table.appendChild(row);
   });
  }

  window.onload = displayData;
 </script>
</head>
<body>
 <div>
  <div>Bot ฐานข้อมูลรหัส</div>
  <div>
   <table>
    <tr>
     <th>ลำดับ</th>
     <th>รหัส</th>
     <th>คำอธิบาย</th>
     <th>รายละเอียด</th>
    </tr>
    <tbody id="bot-table">
    </tbody>
   </table>
  </div>
 </div>
</body>
</html> -->

<!--    --------------------------------------------------------- -->
