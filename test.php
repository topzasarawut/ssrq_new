<?php
    /**
     * เปิดใช้งาน Session
     */
    session_start(); 

        $name = $_POST ["name"];
        // echo $name;
        // exit
        $_SESSION['name'] = $name;
        $_SESSION['answer_fee1'] = $answer_fee1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Situational Self-Recognition Quiz (SSRQ) By Neverdie ๘ Studio</title>
    <!-- ติดตั้งการใช้งาน CSS ต่างๆ -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Prompt&display=swap" rel="stylesheet">
    <style>body,section{font-family: 'Prompt', sans-serif;}</style>
    
</head>
<body>
    <!-- Section Navbar -->
    <?php include_once('includes/navbar.php') ?>
    
    <?php 
        include_once('php/connect.php');

        $sql = "SELECT * FROM `quiz`";
        $result = $conn->query($sql);
    ?>

<!-- Page Content -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <br><br><br>
          <h4 class="card-title d-inline-block">ยินดีต้อนรับ <?php echo $name;?> </h4>
          <h5>คำชี้แจง</h5>
          <h6>แบบทดสอบการรู้จักตนเองเชิงสถานการณ์ มีทั้งหมด 44 ข้อ</h6>
          <h6>เมื่อตอบเสร็จระบบจะประมวลผมและแสดงให้ทราบในทันที</h6>    
        </div>

      <form role="form" action="showdata_test2.php" method="post"> 
      <div class="col-md-9 mx-auto mt-4">
        <!-- question1 -->
        <div class="card">
        <!-- <div class="form-group">
              <label for="FullName">ชื่อผู้ทดสอบการรู้จักตนเองเชิงสถานการณ์</label>
              <input type="text" disabled class="form-control" name="FullName" id="FullName" placeholder="FullName" value="<?php echo $name ; ?>">
            </div> -->
            <div class="form-group">
              <label for="FullName">ชื่อผู้ทดสอบการรู้จักตนเองเชิงสถานการณ์</label>
              <input type="text" class="form-control" name="FullName" id="FullName" placeholder="FullName" value="<?php echo $name ; ?>">
            </div>

          <div class="card-header">
          ข้อ 1 ในขณะที่ครูกำลังสอน สุภาวดีไม่เข้าใจที่ครูพูดเลยถึงแม้จะตั้งใจเรียนก็ตามแต่เพราะต้องการให้ได้คะแนนดีๆเพื่อจะได้ประสบความสำเร็จในอนาคต ถ้านักเรียนเป็นสุภาวดีจะทำอย่างไร
          </div>
          <div class="card-body">
            <input type="radio" id="answer_fee1" name="answer_fee1" value="4" required="required" checked>
            <label for="answer_fee1">ก.ขอให้ครูช่วยอธิบายให้ใหม่อีกครั้ง</label><br>
            <input type="radio" id="answer_fee1" name="answer_fee1" value="1">
            <label for="answer_fee1">ข.ไม่เป็นไรแล้วค่อยลอกการบ้านเพื่อน</label><br>
            <input type="radio" id="answer_fee1" name="answer_fee1" value="2">
            <label for="answer_fee1">ค.ไม่กล้าถามครูแต่จะขอให้เพื่อนอธิบายให้</label><br>
            <input type="radio" id="answer_fee1" name="answer_fee1" value="3">
            <label for="answer_fee1">ง.จดจ่อในเรื่องที่เรียนแม้นว่าจะไม่</label>
          </div>
        </div>

        
        <?php
          $_SESSION['name'] = $name;
          $_SESSION['answer_fee1'] = $answer_fee1;
          echo $name;
          echo $answer_fee1;
        ?>


        <div class="card-footer">
              <!-- <button type="submit" name="submit" class="btn btn-primary">ข้อถัดไป</button>  -->
              <a href="showdata_test2.php">ข้อถัดไป</a>
          </div>
      </div>
      
      </form>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


    <!-- Section Footer -->
    <?php include_once('includes/footer.php') ?>


    <!-- ติดตั้งการใช้งาน Javascript ต่างๆ -->
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


     
</body>
</html>

