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
    
       <h1>โปรแกรมบันทึกข้อมูล ลิโอเนล เมสซิ</h1>

<form class="row g-3">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">ชื่อนักฟุตบอล</label>
    <input type="email" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">เกิดวันที่</label>
    <input type="text" class="form-control" id="inputPassword4">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">สถานที่เกิด</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="โรซาริโอ ประเทศอาร์เจนตินา">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">สโมสรปัจจุบัน</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="อินเตอร์ ไมอามี (สหรัฐอเมริกา)">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">ตำแหน่ง</label>
    <input type="text" class="form-control" id="inputCity">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">สัญชาติ</label>
    <select id="inputState" class="form-select">
      <option selected>Choose...</option>
      <option>อาร์เจนตินา</option>
    </select>
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">ความสำเร็จในระดับสโมสร</label>
    <input type="text" class="form-control" id="inputZip">
  </div>
  <div class="col-12">
    <label for="inputPassword4" class="form-label">การเริ่มต้นเส้นทางอาชีพ</label>
    <input type="text" class="form-control" id="inputPassword4">
  </div>
  <div class="col-12">
    <label for="inputPassword4" class="form-label">รางวัลอันทรงเกียรติ</label>
    <input type="text" class="form-control" id="inputPassword4">
  </div>
  <div class="col-12">
    <label for="inputPassword4" class="form-label">สไตล์การเล่น</label>
    <input type="text" class="form-control" id="inputPassword4">
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary"id="alert">บันทึกการสมัครข้อมูล</button>
    <button type="reset" class="btn btn-danger"id="alert2">ยกเลิกการสมัครข้อมูล</button>
  </div>
</form>
จัดทำโดย นายมนชัย รัตนบุตร 664485022 หมู่เรียน 66/96 <br> 


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
                    'บันทึกข้อมูลสำเร็จ',
                    'You clicked the button!',
                    'success'
                );
            });
            $('#alert2').click(function() {
                Swal.fire(
                    'แก้ไขข้อมูล',
                    'You clicked the button!',
                    'success'
                );
            });
        });
    </script>

</html> 
