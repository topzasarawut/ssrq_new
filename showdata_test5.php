<?php
    /**
     * เปิดใช้งาน Session
     */
    session_start(); 

        // echo $_POST["FullName"]."<br>";
        // echo $_POST["sum1"]."<br>";
        // echo $_POST["sum2"]."<br>";
        // echo $_POST["sum3"]."<br>";
        // echo $_POST["answer_fee31"]."<br>";
        // echo $_POST["answer_fee32"]."<br>";
        // echo $_POST["answer_fee33"]."<br>";
        // echo $_POST["answer_fee34"]."<br>";
        // echo $_POST["answer_fee35"]."<br>";
        // echo $_POST["answer_fee36"]."<br>";
        // echo $_POST["answer_fee37"]."<br>";
        // echo $_POST["answer_fee38"]."<br>";
        // exit;

        $sum4 = $_POST["answer_fee31"] + $_POST["answer_fee32"] + $_POST["answer_fee33"]
              + $_POST["answer_fee34"] + $_POST["answer_fee35"] 
              + $_POST["answer_fee36"] + $_POST["answer_fee37"] + $_POST["answer_fee38"];
        // echo $sum4;

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
        background: rgb(138, 226, 153);
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
          <h6>แบบทดสอบการรู้จักตนเองเชิงสถานการณ์ หน้า 5/5 ข้อ39 - ข้อ44</h6>
          <h6>เมื่อตอบเสร็จระบบจะประมวลผมและแสดงให้ทราบในทันที</h6>    
        </div>

      <form role="form" action="create.php" method="post"> 
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
                      <input type="radio" disable id="FullName" name="FullName" value="<?php echo $_POST["FullName"]; ?>" required="required" checked>
                      <label for="1"><?php echo $_POST["FullName"]; ?></label><br>
                    <!-- </div>
                  </div> -->

                  <!-- sum1 -->
                <!-- <div class="card">
                    <div class="card-header">
                    <div class="card-body"> -->
                      <input type="radio" disable id="sum1" name="sum1" value="<?php echo $_POST["sum1"]; ?>" required="required" checked>
                      <label for="1">ตัวชี้วัดที่1</label><br>
                    <!-- </div>
                  </div> -->

                  <!-- sum2 -->
                <!-- <div class="card">
                    <div class="card-header">
                    <div class="card-body"> -->
                    <input type="radio" disable id="sum2" name="sum2" value="<?php echo $_POST["sum2"]; ?>" required="required" checked>
                      <label for="1">ตัวชี้วัดที่2</label><br>
                    <!-- </div>
                  </div> -->

                  <!-- sum3 -->
                <!-- <div class="card">
                    <div class="card-header">
                    <div class="card-body"> -->
                    <input type="radio" disable id="sum3" name="sum3" value="<?php echo $_POST["sum3"]; ?>" required="required" checked>
                      <label for="1">ตัวชี้วัดที่3</label><br>
                    <!-- </div>
                  </div> -->

                  <!-- sum4 -->
                <!-- <div class="card">
                    <div class="card-header">
                    <div class="card-body"> -->
                      <input type="radio" disable id="sum4" name="sum4" value="<?php echo $sum4; ?>" required="required" checked>
                      <label for="1">ตัวชี้วัดที่4</label><br>
                    </div>
                  </div>

          
            <div class="form-group">
              <h5>ตัวชี้วัดที่ 5 ด้านการแก้ปัญหา</h5>
              <!-- <label for="FullName">ชื่อผู้ทดสอบการรู้จักตนเองเชิงสถานการณ์</label>
              <input type="text" class="form-control" name="FullName" id="FullName" placeholder="FullName" value="<?php echo $_POST["FullName"]; ?>"> -->
            </div>
 
          <!-- question39 -->
        <div class="card" id="b1">
          <div class="card-header">
          ข้อ 39&nbsp;น้ำตาลมีน้ำหนักตัวเกินเกณฑ์มากจึงต้องการลดน้ำหนักเพื่อจะเข้ารับการคัดเลือกเป็นเชียร์ลีดเดอร์ในเดือนหน้าถ้านักเรียนเป็นน้ำตาลจะทำอย่างไร          </div>
          <div class="card-body">
            <input type="radio" id="answer_fee39" name="answer_fee39" value="1" required="required">
            <label for="1">ก.กินยาลดความอ้วนทั้งๆที่รู้ว่ามันไม่ดีแต่ลดไว </label><br>
            <input type="radio" id="answer_fee39" name="answer_fee39" value="4">
            <label for="2">ข.ลดอาหารและวางแผนออกกำลังกาย </label><br>
            <input type="radio" id="answer_fee39" name="answer_fee39" value="2">
            <label for="3">ค.อดอาหารไปเลยน้ำหนักจะได้ลดลงไว </label><br>
            <input type="radio" id="answer_fee39" name="answer_fee39" value="3">
            <label for="4">ง.ซื้ออาหารเสริมราคาแพงมาทานจากเงินเก็บของตนเอง </label>
          </div>
        </div>

        <!-- question40 -->
        <div class="card" id="b1">
          <div class="card-header">
          ข้อ 40&nbsp;อัลเบริต์ ไอน์สไตล์ กล่าวว่า “ถ้าผมมีเวลา 1 ชั่วโมงในการแก้ปัญหา ผมจะใช้เวลา 55 นาทีขบคิดเกี่ยวกับปัญหานั้นและใช้เวลา 5 นาทีหาวิธีแก้ปัญหา” จากประโยคที่กล่าวมาเวลาเกิดปัญหาขึ้นนักเรียนสามารถบอกปัญหาที่เกิดขึ้นกับตนเองได้เพียงใด          </div>
          <div class="card-body">
            <input type="radio" id="answer_fee40" name="answer_fee40" value="3" required="required">
            <label for="1">ก.ทุกครั้งเวลาที่เกิดปัญหาฉันรู้ว่าต้นตอของปัญหาเกิดจากอะไร </label><br>
            <input type="radio" id="answer_fee40" name="answer_fee40" value="2">
            <label for="2">ข.บางครั้งก็บอกได้ บางครั้งก็บอกไม่ได้ </label><br>
            <input type="radio" id="answer_fee40" name="answer_fee40" value="1">
            <label for="3">ค.ฉันไม่สามารถบอกปัญหาทีเกิดขึ้นกับฉันได้เลยมันสับสนไปหมด </label><br>
            <input type="radio" id="answer_fee40" name="answer_fee40" value="4">
            <label for="4">ง.ทุกครั้งเวลาที่เกิดปัญหาฉันรู้ว่าต้นตอของปัญหาเกิดจากอะไรและฉันรู้วิธีในการแก้ปัญหานั้น </label>
          </div>
        </div>

        <!-- question41 -->
        <div class="card" id="b1">
          <div class="card-header">
          ข้อ 41&nbsp;ถ้านักเรียนลืมหนังสือเรียนวิชาภาษาไทยมาโรงเรียน นักเรียนควรแก้ปัญหาอย่างไรจึงจะเหมาะสมที่สุด          </div>
          <div class="card-body">
            <input type="radio" id="answer_fee41" name="answer_fee41" value="1" required="required">
            <label for="1">ก.ไม่เข้าห้องเรียนเพื่อเรียนวิชานี้เพราะขี้เกียจอยู่แล้ว </label><br>
            <input type="radio" id="answer_fee41" name="answer_fee41" value="2">
            <label for="2">ข.ซื้อหนังสือเรียนเล่มใหม่เพิ่มอีก 1 เล่ม </label><br>
            <input type="radio" id="answer_fee41" name="answer_fee41" value="4">
            <label for="3">ค.บอกคุณครูและขอดูกับเพื่อนที่นั่งข้างๆ </label><br>
            <input type="radio" id="answer_fee41" name="answer_fee41" value="3">
            <label for="4">ง.ขออนุญาตคุณครูกลับไปเอาหนังสือเรียนที่บ้าน </label>
          </div>
        </div>

        <!-- question42 -->
        <div class="card" id="b1">
          <div class="card-header">
          ข้อ 42&nbsp;จากการตกลงกันในที่ประชุมสภานักเรียน เรื่องการจัดพิธีไหว้ครูประจำปีการศึกษานี้อย่างประหยัด นักเรียนได้รับมอบหมายให้เป็นหัวหน้ากลุ่มจัดทำพานดอกไม้-ธูปเทียน ที่จะใช้ในพิธีนักเรียนจะเตรียมงานอย่างไร          </div>
          <div class="card-body">
            <input type="radio" id="answer_fee42" name="answer_fee42" value="2" required="required">
            <label for="1">ก.คุยกับเพื่อนในห้องให้รวบรวมเงินกันไปจ้างร้านดอกไม้จัดให้ </label><br>
            <input type="radio" id="answer_fee42" name="answer_fee42" value="1">
            <label for="2">ข.มอบให้เพื่อนผู้หญิงทำเพราะเป็นงานของผู้หญิง </label><br>
            <input type="radio" id="answer_fee42" name="answer_fee42" value="3">
            <label for="3">ค.ให้เพื่อนหาวัสดุ อุปกรณ์มาช่วยกันทำพอเป็นพิธีเพื่อให้มีในวันไหว้ครู </label><br>
            <input type="radio" id="answer_fee42" name="answer_fee42" value="4">
            <label for="4">ง.ให้เพื่อทุกคนนำอุปกรณ์ ดอกไม้ ธูปเทียนมารวมกัน เพื่อประดิษฐ์พานไหว้ครูตามวัสดุที่มี </label>
          </div>
        </div>

        <!-- question43 -->
        <div class="card" id="b1">
          <div class="card-header">
          ข้อ 43&nbsp;เมื่อนัดเพื่อนทำงานกลุ่มหรือไปทำกิจกรรมอื่นใดด้วยกันแล้วเพื่อนมาไม่เคยตรงเวลานักเรียนทำอย่างไร          </div>
          <div class="card-body">
            <input type="radio" id="answer_fee43" name="answer_fee43" value="1" required="required">
            <label for="1">ก.เลิกคบเพื่อนคนนั้น </label><br>
            <input type="radio" id="answer_fee43" name="answer_fee43" value="2">
            <label for="2">ข.มาสายเหมือนเพื่อนจะได้มาเวลาตรงกัน </label><br>
            <input type="radio" id="answer_fee43" name="answer_fee43" value="3">
            <label for="3">ค.รู้ว่าเพื่อนจะมาสายเลยนัดเวลาไม่ตรงกับที่ตนเองมาเช่น เวลาจริงอยากนัด 9.30 น. แต่บอกให้เพื่อนมา 9.00 น. </label><br>
            <input type="radio" id="answer_fee43" name="answer_fee43" value="4">
            <label for="4">ง.คุยกับเพื่อนให้เข้าใจว่าถ้าเพื่อนมาช้าไม่ตรงเวลาจะเกิดผลเสียอย่างไรแล้วให้เพื่อนปรับปรุงตัว </label>
          </div>
        </div>

        <!-- question44 -->
        <div class="card" id="b1">
          <div class="card-header">
          ข้อ 44&nbsp;ถ้านักเรียนเคยทำให้พ่อแม่ ผู้ปกครองผิดหวัง จากพฤติกรรมใดๆ ของนักเรียน เช่น พูดโกหก , โดดเรียนไปเล่นเกม ,ติดการพนัน,สอบตก ฯลฯ ถ้าย้อนเวลากลับไปได้นักเรียนจะ...          </div>
          <div class="card-body">
            <input type="radio" id="answer_fee44" name="answer_fee44" value="1" required="required">
            <label for="1">ก.ไม่แน่ใจว่าจะทำเหมือนเดิมหรือไม่ </label><br>
            <input type="radio" id="answer_fee44" name="answer_fee44" value="2">
            <label for="2">ข.ต้องดูสถานการณ์ ณ ขณะนั้น </label><br>
            <input type="radio" id="answer_fee44" name="answer_fee44" value="3">
            <label for="3">ค.ไม่ทำเหมือนเดิมแน่นอน </label><br>
            <input type="radio" id="answer_fee44" name="answer_fee44" value="4">
            <label for="4">ง.รู้ว่าสิ่งที่ทำเป็นสิ่งไม่ดีจะไม่ทำตั้งแต่เริ่มแรก </label>
          </div>
        </div>
 
        <div class="progress">
          <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">100%</div>
        </div>



        <div class="card-footer">
            <button type="submit" name="submit" class="btn btn-success">ส่งแบบทดสอบ 5/5</button> 
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

