<?php
    /**
     * เปิดใช้งาน Session
     */
    session_start(); 

        // echo $_POST["FullName"]."<br>";
        // echo $_POST["sum1"]."<br>";
        // echo $_POST["sum2"]."<br>";
        // echo $_POST["answer_fee23"]."<br>";
        // echo $_POST["answer_fee24"]."<br>";
        // echo $_POST["answer_fee25"]."<br>";
        // echo $_POST["answer_fee26"]."<br>";
        // echo $_POST["answer_fee27"]."<br>";
        // echo $_POST["answer_fee28"]."<br>";
        // echo $_POST["answer_fee29"]."<br>";
        // echo $_POST["answer_fee30"]."<br>";
        // exit;

        $sum3 = $_POST["answer_fee23"] + $_POST["answer_fee24"] + $_POST["answer_fee25"]
               + $_POST["answer_fee26"] + $_POST["answer_fee27"] 
               + $_POST["answer_fee28"] + $_POST["answer_fee29"] + $_POST["answer_fee30"];
        // echo $sum3;

        // exit;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Situational Self-Recognition Quiz (SSRQ) By Neverdie ๘ Studio</title>
    <!-- ติดตั้งการใช้งาน CSS ต่างๆ -->
    <!-- <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="learnphp/theme/css/bootstrap-theme.css">
    <link href="https://fonts.googleapis.com/css?family=Prompt&display=swap" rel="stylesheet">
    <style>body,section{font-family: 'Prompt', sans-serif;}</style>
    <style>
      #b1 {
        background: rgb(211, 148, 105);
        /* border: 5px solid rgb(52, 143, 108); */
        /* position: static; */
      }
	  </style>
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
      <div class="card bg-warning">
        <div class="card-header bg-warning">
          <br><br><br>
          <h4 class="card-title d-inline-block">ยินดีต้อนรับ <?php echo $_POST["FullName"];?> </h4>
          <h5>คำชี้แจง</h5>
          <h6>แบบทดสอบการรู้จักตนเองเชิงสถานการณ์ หน้า 4/5 ข้อ31 - ข้อ38</h6> 
        </div>

      <form role="form" action="showdata_test5.php" method="post"> 
      <div class="col-md-9 mx-auto mt-4">
        <!-- question1 -->
        <div class="card" id="b1">
        <!-- <div class="form-group">
              <label for="FullName">ชื่อผู้ทดสอบการรู้จักตนเองเชิงสถานการณ์</label>
              <input type="text" disabled class="form-control" name="FullName" id="FullName" placeholder="FullName" value="<?php echo $name ; ?>">
            </div> -->

              <!-- FullName -->
                <div class="card" id="b1">
                    <div class="card-header">
                    <div class="card-body">
                      <input type="radio" id="FullName" name="FullName" value="<?php echo $_POST["FullName"]; ?>" required="required" checked>
                      <label for="1"><?php echo $_POST["FullName"]; ?></label><br>
                    <!-- </div>
                  </div> -->

                  <!-- sum1 -->
                <!-- <div class="card">
                    <div class="card-header">
                    <div class="card-body"> -->
                      <input type="radio" id="sum1" name="sum1" value="<?php echo $_POST["sum1"]; ?>" required="required" checked>
                      <label for="1">ตัวชี้วัดที่1</label><br>
                    <!-- </div>
                  </div> -->

                  <!-- sum2 -->
                <!-- <div class="card">
                    <div class="card-header">
                    <div class="card-body"> -->
                    <input type="radio" id="sum2" name="sum2" value="<?php echo $_POST["sum2"]; ?>" required="required" checked>
                      <label for="1">ตัวชี้วัดที่2</label><br>
                    <!-- </div>
                  </div> -->

                  <!-- sum3 -->
                <!-- <div class="card">
                    <div class="card-header">
                    <div class="card-body"> -->
                      <input type="radio" id="sum3" name="sum3" value="<?php echo $sum3; ?>" required="required" checked>
                      <label for="1">ตัวชี้วัดที่3</label><br>
                    </div>
                  </div>

          


            <div class="form-group"  id="b1">
              <h5>ตัวชี้วัดที่ 4 ด้านการตั้งเป้าหมาย</h5>
              <!-- <label for="FullName">ชื่อผู้ทดสอบการรู้จักตนเองเชิงสถานการณ์</label>
              <input type="text" class="form-control" name="FullName" id="FullName" placeholder="FullName" value="<?php echo $_POST["FullName"]; ?>"> -->
            </div>
 
          <!-- question31 -->
        <div class="card" id="b1">
          <div class="card-header">
          ข้อ 31&nbsp;ดาวเรืองเรียนวิชาคณิตศาสตร์ไม่เก่ง ดาวเรืองค้นจึงคว้าหาความรู้เพิ่มเติมโดยการอ่านหนังสือและตั้งใจเรียนให้มากขึ้นแต่ผลการเรียนก็ไม่ดีขึ้นถ้านักเรียนเป็นดาวเรืองจะทำอย่างไร          </div>
          <div class="card-body">
            <input type="radio" id="answer_fee31" name="answer_fee31" value="1" required="required">
            <label for="1">ก.เฉยๆไม่สนใจทำต่อไปอีก </label><br>
            <input type="radio" id="answer_fee31" name="answer_fee31" value="2">
            <label for="2">ข.ไม่ท้อแท้พยายามทำต่อไป </label><br>
            <input type="radio" id="answer_fee31" name="answer_fee31" value="3">
            <label for="3">ค.อดทนหาข้อบกพร่องของตัวเอง </label><br>
            <input type="radio" id="answer_fee31" name="answer_fee31" value="4">
            <label for="4">ง.ขยันเพิ่มขึ้นและแก้ไขข้อบกพร่องของตนเอง </label>
          </div>
        </div>

        <!-- question32 -->
        <div class="card" id="b1">
          <div class="card-header">
          ข้อ 32&nbsp;“คนเรา...ถ้าค้นพบจุดเด่นของตนที่พัฒนาได้...ก็จะมีผลงานที่ดีที่สุด” จากข้อความนี้นักเรียนคิดหรืออยากทำสิ่งใด          </div>
          <div class="card-body">
            <input type="radio" id="answer_fee32" name="answer_fee32" value="2" required="required">
            <label for="1">ก.เฉยๆไม่รู้สึกอะไร </label><br>
            <input type="radio" id="answer_fee32" name="answer_fee32" value="1">
            <label for="2">ข.ไม่อยากทำอะไรเพราะขี้เกียจ </label><br>
            <input type="radio" id="answer_fee32" name="answer_fee32" value="3">
            <label for="3">ค.ทำอะไรสักอย่างที่ตนทำได้ </label><br>
            <input type="radio" id="answer_fee32" name="answer_fee32" value="4">
            <label for="4">ง.ทำอะไรสักอย่างที่ตนทำได้ดีและบ่งบอกถึงความสามารถของตนเอง </label>
          </div>
        </div>

        <!-- question33 -->
        <div class="card" id="b1">
          <div class="card-header">
          ข้อ 33&nbsp;คุณครูมอบหมายให้แนนซี่ทำกิจกรรมกลุ่มแกะสลักผักและผลไม้แกะสลักแตงโมให้เสร็จและเก็บอุปกรณ์ให้เรียบร้อย ถ้านักเรียนเป็นสมาชิกกลุ่มของแนนซี่ นักเรียนจะทำอย่างไร          </div>
          <div class="card-body">
            <input type="radio" id="answer_fee33" name="answer_fee33" value="2" required="required">
            <label for="1">ก.ไม่สนใจช่วยเพื่อน</label><br>
            <input type="radio" id="answer_fee33" name="answer_fee33" value="1">
            <label for="2">ข.ไม่สนใจแล้วชวนเพื่อนไปเล่น </label><br>
            <input type="radio" id="answer_fee33" name="answer_fee33" value="3">
            <label for="3">ค.ช่วยกันทำงานและเก็บอุปกรณ์ให้ทันเวลา </label><br>
            <input type="radio" id="answer_fee33" name="answer_fee33" value="4">
            <label for="4">ง.แบ่งหน้าที่กันทำงานและช่วยกันทำงานให้สำเร็จทันเวลา </label>
          </div>
        </div>

        <!-- question34 -->
        <div class="card" id="b1">
          <div class="card-header">
          ข้อ 34&nbsp;คุณครูมอบหมายงานให้นักเรียนทำชิ้นหนึ่งที่ค่อนข้างยากและต้องทักษะหลายอย่างในการทำงานจึงจะสำเร็จลุล่วงและส่งทันตามเวลาที่กำหนดในการทำงานลักษณะนี้ นักเรียนจะทำอย่างไร          </div>
          <div class="card-body">
            <input type="radio" id="answer_fee34" name="answer_fee34" value="3" required="required">
            <label for="1">ก.ต้องศึกษาค้นคว้าทดลองทำอย่างเต็มที่ </label><br>
            <input type="radio" id="answer_fee34" name="answer_fee34" value="1">
            <label for="2">ข.นำงานนั้นไปจ้างคนอื่นทำ จะได้ไม้เสียเวลาทำในสิ่งที่ตนเองไม่ถนัด </label><br>
            <input type="radio" id="answer_fee34" name="answer_fee34" value="4">
            <label for="3">ค.วางแผนเพื่อกำหนดการทำงาน ค้นคว้าและลงมือทำ </label><br>
            <input type="radio" id="answer_fee34" name="answer_fee34" value="2">
            <label for="4">ง.หาเพื่อมาช่วยเพื่อให้ทำงานให้เสร็จจะได้ส่งทันเวลา </label>
          </div>
        </div>

        <!-- question35 -->
        <div class="card" id="b1">
          <div class="card-header">
          ข้อ 35&nbsp;เมื่อครูที่สอนนักเรียนบอกว่านักเรียนเป็นคนใจร้อน ไม่ค่อยมีความรอบคอบในการทำงานหรือทำข้อสอบ นักเรียนรู้สึกอย่างไร          </div>
          <div class="card-body">
            <input type="radio" id="answer_fee35" name="answer_fee35" value="1" required="required">
            <label for="1">ก.ไม่เชื่อคุณครูเพราะรู้สึกว่าตัวเองไม่ใช่คนใจร้อน </label><br>
            <input type="radio" id="answer_fee35" name="answer_fee35" value="2">
            <label for="2">ข.ไม่สนใจเพราะถึงจะเป็นคนใจร้อน ไม่รอบคอบก็ไม่ทำให้ใครเดือดร้อน </label><br>
            <input type="radio" id="answer_fee35" name="answer_fee35" value="3">
            <label for="3">ค.ฟังที่ครูบอกแต่ก็ไม่แก้ไขเหมือนเดิม </label><br>
            <input type="radio" id="answer_fee35" name="answer_fee35" value="4">
            <label for="4">ง.ฟังที่ครูบอกแล้วนำมาปรับปรุงแก้ไข </label>
          </div>
        </div>

        <!-- question36 -->
        <div class="card" id="b1">
          <div class="card-header">
          ข้อ 36&nbsp;เมื่อคนที่บ้านนักเรียน บอกว่านักเรียนเป็นคนขี้เกียจสันหลังยาว นักเรียนรู้สึกอย่างไร          </div>
          <div class="card-body">
            <input type="radio" id="answer_fee36" name="answer_fee36" value="1" required="required">
            <label for="1">ก.ไม่สนใจ </label><br>
            <input type="radio" id="answer_fee36" name="answer_fee36" value="2">
            <label for="2">ข.คนที่บ้านพูดเกินไปฉันแค่นอนตื่นสายและไม่ค่อยอ่านหนังสือเท่านั้น </label><br>
            <input type="radio" id="answer_fee36" name="answer_fee36" value="3">
            <label for="3">ค.ฟังและมาสำรวจตนเองตามที่เขาพูดว่าใช่หรือไม่ </label><br>
            <input type="radio" id="answer_fee36" name="answer_fee36" value="4">
            <label for="4">ง.ฟังและนำมาสำรวจตนเอง หาทางปรับปรุงแก้ไข </label>
          </div>
        </div>

        <!-- question37 -->
        <div class="card" id="b1">
          <div class="card-header">
          ข้อ 37&nbsp;อีก 1 เดือนข้างหน้าจะถึงกำหนดเวลาสอบปลายภาคเรียน นักเรียนจะเตรียมตัวในการสอบอย่างไร          </div>
          <div class="card-body">
            <input type="radio" id="answer_fee37" name="answer_fee37" value="1" required="required">
            <label for="1">ก.ฉันไม่เคยเตรียมตัวสอบเลย </label><br>
            <input type="radio" id="answer_fee37" name="answer_fee37" value="2">
            <label for="2">ข.อ่านหนังสือบ้างบางวิชา </label><br>
            <input type="radio" id="answer_fee37" name="answer_fee37" value="3">
            <label for="3">ค.จัดตารางอ่านหนังสือ แต่ก็ทำตามได้บ้างไม่ได้บ้าง </label><br>
            <input type="radio" id="answer_fee37" name="answer_fee37" value="4">
            <label for="4">ง.จัดตารางอ่านหนังสือ และพยายามอ่านให้ได้ตามตารางที่จัด </label>
          </div>
        </div>

        <!-- question38 -->
        <div class="card" id="b1">
          <div class="card-header">
          ข้อ 38&nbsp;วิชาประวัติศาสตร์ ครูอุมาพรได้สั่งให้นักเรียนเขียนประวัติของตัวเองแล้วส่งในชั่วโมง พลอยได้ทำงานเสร็จแล้วมาส่งคุณครู แต่คุณครูบอกว่างานไม่สมบูรณ์ ให้นำมาแก้ไขใหม่ ถ้านักเรียนเป็นพลอยจะทำอย่างไร          </div>
          <div class="card-body">
            <input type="radio" id="answer_fee38" name="answer_fee38" value="4" required="required">
            <label for="1">ก.นำมาแก้ไขตามที่ครูแนะนำด้วยความเต็มใจ </label><br>
            <input type="radio" id="answer_fee38" name="answer_fee38" value="3">
            <label for="2">ข.นำมาแก้ไขตามที่ครูแนะนำจนครบ </label><br>
            <input type="radio" id="answer_fee38" name="answer_fee38" value="2">
            <label for="3">ค.นำมาแก้ไขเป็นบางส่วน </label><br>
            <input type="radio" id="answer_fee38" name="answer_fee38" value="1">
            <label for="4">ง.ไม่แก้ไขตามที่ครูบอกเพราะคิดว่าทำดีแล้ว </label>
          </div>
        </div>

        <div class="progress">
          <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">80%</div>
        </div>

        <div class="card-footer">
            <button type="submit" name="submit" class="btn btn-success">หน้าถัดไป 4/5</button> 
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

