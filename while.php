<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<style>
        /* ตั้งค่าพื้นหลังและโทนสีโดยรวม (Cool Blue Theme) */
        body {
            font-family: 'Sarabun', sans-serif;
            background-color: #f0f4f8; /* สีฟ้าไอซ์บลูอ่อนๆ ช่วยให้สบายตา */
            color: #334155; /* สีตัวอักษรเทาเข้ม นุ่มนวลกว่าสีดำล้วน */
            margin: 0;
            padding: 40px 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        /* กล่องการ์ดสี่เหลี่ยมมนหลัก */
        .card {
            background: #ffffff;
            border-radius: 16px; /* ขอบมน */
            box-shadow: 0 4px 20px rgba(148, 163, 184, 0.15); /* เงานุ่มๆ โทนฟ้าเทา */
            padding: 25px;
            margin-bottom: 20px;
            width: 100%;
            max-width: 450px; 
            box-sizing: border-box;
        }

        /* ตกแต่งกล่องหัวข้อชื่อผู้จัดทำ */
        .header-card {
            border-left: 6px solid #3b82f6; /* แถบสีฟ้าสดใสฝั่งซ้าย */
            background: #eff6ff; /* พื้นหลังฟ้าพาสเทลอ่อน */
        }

        h1 {
            margin: 0;
            font-size: 1.2rem;
            color: #1d4ed8; /* สีน้ำเงินเข้มดูเป็นระเบียบ */
            line-height: 1.5;
        }

        /* ตกแต่งลิงก์ */
        .nav-link {
            display: inline-block;
            margin-bottom: 15px;
            color: #2563eb;
            text-decoration: none;
            font-weight: 600;
            font-size: 0.95rem;
            transition: color 0.2s;
        }
        .nav-link:hover {
            color: #1d4ed8;
            text-decoration: underline;
        }

        /* ตกแต่ง Form */
        label {
            font-weight: 600;
            display: block;
            margin-bottom: 8px;
            color: #475569;
        }

        input[type="number"] {
            width: 100%;
            padding: 12px;
            border: 1.5px solid #cbd5e1;
            border-radius: 10px; /* ขอบมน */
            box-sizing: border-box;
            margin-bottom: 15px;
            font-size: 1rem;
            outline: none;
            background-color: #f8fafc;
            transition: all 0.2s;
        }

        input[type="number"]:focus {
            border-color: #3b82f6; 
            background-color: #ffffff;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.15); /* แสงเรืองรองสีฟ้าตอนคลิก */
        }

        input[type="submit"] {
            width: 100%;
            background-color: #3b82f6; /* สีฟ้าหลัก */
            color: white;
            border: none;
            padding: 12px;
            border-radius: 10px; 
            font-size: 1rem;
            cursor: pointer;
            font-weight: 600;
            transition: background-color 0.2s;
        }

        input[type="submit"]:hover {
            background-color: #2563eb; /* ฟ้าเข้มขึ้นเล็กน้อยตอนเมาส์ชี้ */
        }

        /* กล่องแสดงผลลัพธ์สูตรคูณ */
        .result-card {
            border-top: 5px solid #3b82f6;
            text-align: center;
        }

        .result-title {
            font-weight: 600;
            color: #1e40af;
            margin-bottom: 15px;
            font-size: 1.3rem;
            border-bottom: 2px dashed #e2e8f0;
            padding-bottom: 10px;
        }

        /* กรอบเล็กๆ เป็นพื้นหลังให้สูตรคูณแต่ละบรรทัด */
        .result-item {
            background-color: #f0f7ff; /* สีฟ้าพาสเทลนุ่มๆ */
            border: 1px solid #e0f2fe; 
            border-radius: 8px;        
            padding: 8px 15px;         
            margin: 6px 0;             
            font-size: 1.1rem;
            font-weight: 600;
            color: #334155;
            display: flex;             
            justify-content: center;
        }
    </style>
</head>
<body> 

    <div class="card header-card">
        <h1>งานที่ 1 ญาณิศา ทองคำพันธ์ุ BIT.2/4 เลขที่16</h1>
    </div>

    <div class="card">
        <a href="index.php" class="nav-link">← ไปที่ For Loop</a>
        
        <form action="" method="GET">
            <label for="num">เลขแม่สูตรคูณ</label>
            <input type="number" name="num" id="num" placeholder="ใส่ตัวเลขที่ต้องการคำนวณ..." required>
            <input type="submit" value="คำนวณ">
        </form>
    </div>

    <?php 
     if(isset($_GET["num"]) && $_GET["num"] != ""){
       $num = $_GET["num"];

       echo '<div class="card result-card">';
       echo '<div class="result-title">สูตรคูณแม่ ' . htmlspecialchars($num) . '</div>';

       // โค้ดที่แก้ไข: เปลี่ยนเป็น While Loop แสดงผลจาก 12 ลงไปถึง 1 ตามที่คุณเขียนไว้
       $i = 12;
       while ($i >= 1){ 
           echo '<div class="result-item">' . $num . ' x ' . $i . ' = ' . ($num * $i) . '</div>';
           $i--; 
       } 
       echo '</div>';
     }
    ?>

</body>
</html>
