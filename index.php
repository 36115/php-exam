
<?php
    require('dbconnect.php');

    $sql = "SELECT * FROM students ORDER BY prefix DESC, id ASC";
    $result = $conn->query($sql);

    $count = mysqli_num_rows($result);
    $order = 1;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สรวิชญ์-11</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container py-2">
        <h1>1. ให้นักเรียนเขียนคำสั่งภาษา PHP ชื่อนักเรียนลงในตารางตามรูปแบบ</h1>
        <p>**สามารถเปิดหาข้อมูลจาก internet ได้ สามารถใช้ Framework ในการสร้าง Table ได้</p>
        <table class="table">
    <thead>
        <tr>
        <th scope="col">No.</th>
        <th scope="col">ชื่อ</th>
        <th scope="col">นามสกุล</th>
        <th scope="col">ห้อง</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($row = mysqli_fetch_assoc($result)) {?>
                <tr>
                    <td><?php echo $order++?></td>
                    <td><?php echo $row["prefix"].$row["fname"]?></td>
                    <td><?php echo $row["lname"]?></td>
                    <td><?php echo $row["class"]?></td>
                </tr>
                <?php }?>
    </tbody>
    </table>
    <h1>2. ให้นักเรียนเขียนคำสั่งภาษา PHP นับจำนวนข้อมูลใน Array โดยข้อมูลที่กำหนดให้ ข้อมูลที่กำหนด ให้ ['รายชื่อนักเรียน ม.6/10' คำตอบ คือ 40 คน]</h1>
    <p>**สามารถเปิดหาข้อมูลจาก internet ได้</p>
    <h2 class="text text-center">จำนวนนักเรียนใน Database = <?php echo $count;?> คน</h้>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>
