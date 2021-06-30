<?php
    /**
     * เปิดใช้งาน Session
     */
    // session_start(); 

        // $name = $_POST ["name"];
        // echo $name;
        // exit
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Situational Self-Recognition Quiz (SSRQ) By Neverdie ๘ Studio</title>
    <!-- ติดตั้งการใช้งาน CSS ต่างๆ -->
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Prompt&display=swap" rel="stylesheet">
    <style>body,section{font-family: 'Prompt', sans-serif;}</style>
    
</head>
<body>
    <!-- Section Navbar -->
    <?php include_once('../includes/navbar.php') ?>
    
    <?php 
        include_once('../php/connect.php');

        // $sql = "SELECT * FROM `quiz` WHERE `quizID`=1";
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
          <!-- <h4 class="card-title d-inline-block">ยินดีต้อนรับ <?php echo $name;?> </h4> -->
          <h5>คำชี้แจง</h5>
          <h6>แบบทดสอบการรู้จักตนเองเชิงสถานการณ์ มีทั้งหมด 44 ข้อ</h6>
          <h6>เมื่อตอบเสร็จระบบจะประมวลผมและแสดงให้ทราบในทันที</h6>    
        </div>
        
          <!-- <?php 
              $num = 0;
              while ($row = $result->fetch_assoc()) {
              $num++;
          ?> -->

        <!-- question2 -->
        <div class="card">
          <div class="card-header">
          ข้อ <?php echo $row['question_number'];?>&nbsp;<?php echo $row['question'];?>
          </div>
          <div class="card-body">
            <input type="radio" id="answer_fee2" name="answer_fee2" value="1" required="required">
            <label for="1">ก.<?php echo $row['answer1'];?></label><br>
            <input type="radio" id="answer_fee2" name="answer_fee2" value="2">
            <label for="2">ข.<?php echo $row['answer2'];?></label><br>
            <input type="radio" id="answer_fee2" name="answer_fee2" value="3">
            <label for="3">ค.<?php echo $row['answer3'];?></label><br>
            <input type="radio" id="answer_fee2" name="answer_fee2" value="4">
            <label for="4">ง.<?php echo $row['answer4'];?></label>
          </div>
        </div>
        
      </div>
      </form>

            <!-- <?php } ?> -->
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


    <!-- Section Footer -->
    <?php include_once('../includes/footer.php') ?>


    <!-- ติดตั้งการใช้งาน Javascript ต่างๆ -->
    <script src="../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script type="../text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


     
</body>
</html>
