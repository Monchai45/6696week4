<!DOCTYPE html>
<html lang="en">
<head>
    

    <!-- เพิ่ม bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ตัวอย่างภาษา PHP และ Boostrap</title>

        <!-- เพิ่ม sweetalert  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.10/dist/sweetalert2.min.css">

        <!-- เพิ่มfont -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Charm:wght@400;700&family=Mali:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: "Charm", serif;
            font-weight: 400;
            font-style: normal;
            margin-left: 100px;
        }
    </style>
</head>

<body>
    <h1>การเขียนโปรแกรมด้วย PHP </h> <br>
    664485022 นายมนชัย รัตนบุตร <br>
    หมู่เรียน 66/96 <br>

    <div class="alert alert-success">
  <strong>สำเร็จแล้ว</strong> ใช้ bootstrap ได้แล้ว
</div>


</body>


<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- sweet alert -->

<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.10/dist/sweetalert2.all.min.js"></script>
    <script>
        $(function() {
            $('#alert').click(function() {
                Swal.fire(
                    'Good job!',
                    'You clicked the button!',
                    'success'
                );
            });
            $('#alert2').click(function() {
                Swal.fire(
                    'Very Good!',
                    'You clicked the button!',
                    'success'
                );
            });
        });
    </script>

<button type="button" class="btn btn-info">กรุณากดปุ่มเพื่อยืนยัน</button>
<button type="button" class="btn btn-danger">ยกเลิกการสมัครข้อมูล</button>
<br> <br>
<div class="card bg-dark text-white">
    <div class="card-body">ยินดีต้อนรับ</div>
  </div>
  <br>

  <div class="card" style="width:400px">
  <img class="card-img-top" src="mai.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">นายมนชัย รัตนบุตร</h4> <br>
    <p class="card-text">คติประจำใจ : มือต้องไว ใจต้องนิ่ง</p> <br>
    <a href="https://npru.ac.th/index.php" class="btn btn-primary">See Profile</a>
  </div>
</div>

<button type="button" class="btn btn-primary"id="alert">ทดสอบเรียกใช้งาน Sweet alert</button>
<button type="button" class="btn btn-outline-secondary"id="alert2">Sweet alert</button>

<br><br>

</html> 