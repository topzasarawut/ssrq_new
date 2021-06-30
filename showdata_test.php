<?php
    /**
     * เปิดใช้งาน Session
     */
    session_start(); 

        $name = $_POST ["name"];
        // echo $name;
        // exit
        // $_SESSION['name'] = $name;
        // $_SESSION['answer_fee1'] = $answer_fee1;
        
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
          <h4 class="card-title d-inline-block">ยินดีต้อนรับ <?php echo $name;?> </h4>
          <!-- <h5>คำชี้แจง</h5> -->
          <h6>แบบทดสอบการรู้จักตนเองเชิงสถานการณ์ หน้า 1/5 ข้อ1 - ข้อ10</h6>
          <h6>เมื่อตอบเสร็จระบบจะประมวลผมและแสดงให้ทราบในทันที</h6>      
        </div>

      <form role="form" action="showdata_test2.php" method="post"> 
      <div class="col-md-9 mx-auto">
        <!-- question1 -->
        <div class="card bg-da">
        <!-- <div class="form-group">
              <label for="FullName">ชื่อผู้ทดสอบการรู้จักตนเองเชิงสถานการณ์</label>
              <input type="text" disabled class="form-control" name="FullName" id="FullName" placeholder="FullName" value="<?php echo $name ; ?>">
            </div> -->
            <div class="card-header bg-da">
              <label for="FullName">ชื่อผู้ทดสอบการรู้จักตนเองเชิงสถานการณ์</label>
              <input type="text" class="form-control" name="FullName" id="FullName" placeholder="FullName" value="<?php echo $name ; ?>">
            </div>
            <div class="card bg-da"><h5>ตัวชี้วัดที่ 1 ด้านการรับรู้ความสามารถของตนเอง</h5></div>
          
          <div class="card-header bg-da">
          ข้อ 1 ในขณะที่ครูกำลังสอน สุภาวดีไม่เข้าใจที่ครูพูดเลยถึงแม้จะตั้งใจเรียนก็ตามแต่เพราะต้องการให้ได้คะแนนดีๆเพื่อจะได้ประสบความสำเร็จในอนาคต ถ้านักเรียนเป็นสุภาวดีจะทำอย่างไร
          </div>
          <div class="card-body">
            <input type="radio" id="answer_fee1" name="answer_fee1" value="4" required="required">
            <label for="answer_fee1">ก.ขอให้ครูช่วยอธิบายให้ใหม่อีกครั้ง</label><br>
            <input type="radio" id="answer_fee1" name="answer_fee1" value="1">
            <label for="answer_fee1">ข.ไม่เป็นไรแล้วค่อยลอกการบ้านเพื่อน</label><br>
            <input type="radio" id="answer_fee1" name="answer_fee1" value="2">
            <label for="answer_fee1">ค.ไม่กล้าถามครูแต่จะขอให้เพื่อนอธิบายให้</label><br>
            <input type="radio" id="answer_fee1" name="answer_fee1" value="3">
            <label for="answer_fee1">ง.จดจ่อในเรื่องที่เรียนแม้นว่าจะไม่</label>
          </div>
        </div>

        <!-- question2 -->
        <div class="card-header bg-da">
          <div class="card-header">
          ข้อ 2 เวลาที่ครูสอนและให้คิดตามไปด้วย สุวิชามักจะไม่คิดตามเพราะมัวแต่คิดเรื่องอื่น ถ้านักเรียนเป็นสุวิชาจะทำอย่างไร
          </div>
          <div class="card-body">
            <input type="radio" id="answer_fee2" name="answer_fee2" value="2" required="required">
            <label for="1">ก.ไม่สามารถคิดตามได้เพราะเรื่องที่เรียนยากเกินไป </label><br>
            <input type="radio" id="answer_fee2" name="answer_fee2" value="1">
            <label for="2">ข.ไม่สามารถคิดตามได้เพราะมีเรื่องอื่นที่ต้องคิด</label><br>
            <input type="radio" id="answer_fee2" name="answer_fee2" value="3">
            <label for="3">ค.คิดตามไปด้วยแต่อาจจะคิดเรื่องอื่นในขณะเดียวกัน</label><br>
            <input type="radio" id="answer_fee2" name="answer_fee2" value="4">
            <label for="4">ง.พยายามคิดตามและทำความเข้าใจในสิ่งที่ครูกำลังสอน</label>
          </div>
        </div>

        <!-- question3 -->
        <div class="card-header bg-da">
          <div class="card-header">
          ข้อ 3&nbsp;สมปองเห็นเพื่อนๆดื่มเครื่องดื่มที่มีแอลกอฮอล์อย่างมีความสุขคุยกันอย่างสนุกสนานอยากเข้าร่วมด้วยแต่ก็รู้ว่าเป็นสิ่งที่ไม่ดีถ้านักเรียนเป็นสมปองจะทำอย่างไร          </div>
          <div class="card-body">
            <input type="radio" id="answer_fee3" name="answer_fee3" value="1" required="required">
            <label for="1">ก.ไปดื่มเต็มที่กับเพื่อน </label><br>
            <input type="radio" id="answer_fee3" name="answer_fee3" value="3">
            <label for="2">ข.ดื่มนิดหน่อย แล้วขอดื่มเครื่องดื่มแทน</label><br>
            <input type="radio" id="answer_fee3" name="answer_fee3" value="2">
            <label for="3">ค.ปฏิเสธเพื่อนพร้อมต่อว่าเพื่อน </label><br>
            <input type="radio" id="answer_fee3" name="answer_fee3" value="4">
            <label for="4">ง.ปฏิเสธอย่างสุภาพแล้วขอดื่มเครื่องดื่มอื่นแทน </label>
          </div>
        </div>

        <!-- question4 -->
        <div class="card-header bg-da">
          <div class="card-header">
          ข้อ 4&nbsp;วันนี้อภิชัยต้องไปเรียนพิเศษวิชาคณิตศาสตร์และอภิชัยรู้สึกเบื่อมาก ไกรฤกษ์เลยชวนอภิชัยไปแอบเล่นการพนันกับเพื่อนอีก 3 คน ถ้านักเรียนเป็นอภิชัยจะทำอย่างไร          </div>
          <div class="card-body">
            <input type="radio" id="answer_fee4" name="answer_fee4" value="2" required="required">
            <label for="1">ก.ไปกับเพื่อนเพราะขัดเพื่อนไม่ได้แต่ไม่เล่น </label><br>
            <input type="radio" id="answer_fee4" name="answer_fee4" value="4">
            <label for="2">ข.ไม่ไปเล่นการพนันกับเพื่อนเพราะไม่ชอบและรู้ว่ามันเป็นสิ่งที่ไม่ดี </label><br>
            <input type="radio" id="answer_fee4" name="answer_fee4" value="1">
            <label for="3">ค.ไปเล่นการพนันกับเพื่อนแก้เซ็งทั้งๆที่รู้ว่ามันไม่ดี </label><br>
            <input type="radio" id="answer_fee4" name="answer_fee4" value="3">
            <label for="4">ง.ไม่ไปเล่นการพนันกับเพื่อนเพราะกลัวแม่ดุและรู้ว่ามันเป็นสิ่งที่ไม่ดี </label>
          </div>
        </div>

        <!-- question5 -->
        <div class="card-header bg-da">
          <div class="card-header">
          ข้อ 5&nbsp;ในวันเสาร์ขณะที่วิภาดากำลังทำโครงงานคุณธรรมอยู่นั้น มาลีวัลย์มาชวนไปเที่ยวห้างสรรพสินค้า ถ้านักเรียนเป็นวิภาดานักเรียนจะทำอย่างไร</div>
          <div class="card-body">
            <input type="radio" id="answer_fee5" name="answer_fee5" value="4" required="required">
            <label for="1">ก.ทำงานให้เสร็จก่อนแล้วค่อยขอผู้ปกครองไปเที่ยวห้างกับมาลีวัลย์ </label><br>
            <input type="radio" id="answer_fee5" name="answer_fee5" value="1">
            <label for="2">ข.เก็บงานไว้ทำวันหลังแล้วไปเที่ยวห้างสรรพสินค้ากับมาลีวัลย์ </label><br>
            <input type="radio" id="answer_fee5" name="answer_fee5" value="2">
            <label for="3">ค.ขออนุญาตผู้ปกครองก่อนไปเที่ยวห้างสรรพสินค้ากับมาลีวัลย์แล้วค่อยกลับมาทำงานส่ง </label><br>
            <input type="radio" id="answer_fee5" name="answer_fee5" value="3">
            <label for="4">ง.ไม่ไปเที่ยวห้างสรรพสินค้ากับมาลีวัลย์เพราะต้องทำงานให้เสร็จ </label>
          </div>
        </div>

        <!-- question6 -->
        <div class="card-header bg-da">
          <div class="card-header">
          ข้อ 6&nbsp;อาจารย์ฝ่ายกีฬามองเห็นว่า เกียรติศักดิ์สามารถเป็นตัวแทนนักกีฬาของโรงเรียนได้ เขาจึงพยายามฝึกซ้อมอย่างหนัก แต่เมื่อไปแข่งขันแล้วพ่ายแพ้กลับมา ถ้านักเรียนเป็นเกียรติศักดิ์จะทำอย่างไร          </div>
          <div class="card-body">
            <input type="radio" id="answer_fee6" name="answer_fee6" value="4" required="required">
            <label for="1">ก.พยายามฝึกซ้อมกีฬานั้นต่อไปอย่างสม่ำเสมอ </label><br>
            <input type="radio" id="answer_fee6" name="answer_fee6" value="1">
            <label for="2">ข.เปลี่ยนไปสนใจกิจกรรมอื่นๆที่เราต้องการแทน </label><br>
            <input type="radio" id="answer_fee6" name="answer_fee6" value="2">
            <label for="3">ค.กลับมาซ้อมบ้างบางเวลา </label><br>
            <input type="radio" id="answer_fee6" name="answer_fee6" value="3">
            <label for="4">ง.กลับมาซ้อมเพิ่มเพราะอาจารย์บอกว่าครั้งหน้าจะส่งเราไปแข่งขันอีก </label>
          </div>
        </div>

        <!-- question7 -->
        <div class="card-header bg-da">
          <div class="card-header">
          ข้อ 7&nbsp;ครูสุวรรณลาตำหนิพงศกรว่าไม่ทำเวรทำความสะอาดห้องเรียนและลงโทษให้พงศกรทำความสะอาดห้องเรียนทุกวันเป็นเวลา 1 สัปดาห์ถ้านักเรียนเป็นพงศกรจะทำอย่างไรเมื่อเห็นว่าตนเองได้ทำเวรแล้ว          </div>
          <div class="card-body">
            <input type="radio" id="answer_fee7" name="answer_fee7" value="4" required="required">
            <label for="1">ก.พูดชี้แจงด้วยน้ำเสียงปกติ </label><br>
            <input type="radio" id="answer_fee7" name="answer_fee7" value="2">
            <label for="2">ข.นิ่งเฉยทำเป็นไม่ค่อยสนใจฟัง </label><br>
            <input type="radio" id="answer_fee7" name="answer_fee7" value="1">
            <label for="3">ค.พูดโต้ตอบทันทีเพื่อให้ครูรู้ว่าไม่พอใจ </label><br>
            <input type="radio" id="answer_fee7" name="answer_fee7" value="3">
            <label for="4">ง.พูดโต้ตอบทันทีเพื่อให้ครูรู้ว่าไม่พอใจแต่ยินยอมทำ </label>
          </div>
        </div>

        <!-- question8 -->
        <div class="card-header bg-da">
          <div class="card-header">
          ข้อ 8&nbsp;กานดานัดกับสุพรทิพย์ว่าจะไปเที่ยวห้างกันในวันเสาร์แต่พอถึงวันนัดหมายในตอนเช้ากานดาโทรศัพท์ไปหาสุพรทิพย์และได้คำตอบว่าสุพรทิพย์ไม่อยากไปแล้วถ้านักเรียนเป็นกานดาจะเลือกทำข้อใดต่อไปนี้          </div>
          <div class="card-body">
            <input type="radio" id="answer_fee8" name="answer_fee8" value="2" required="required">
            <label for="1">ก.พูดโว้ยวายเสียงดังเพื่อให้สุพรทิพย์ไปด้วยให้ได้  </label><br>
            <input type="radio" id="answer_fee8" name="answer_fee8" value="3">
            <label for="2">ข.พูดประชดว่าไม่เป็นไรด้วยน้ำเสียงที่ไม่พอใจ  </label><br>
            <input type="radio" id="answer_fee8" name="answer_fee8" value="4">
            <label for="3">ค.ถามเหตุผลว่าของสุพรทิพย์ก่อนว่าทำไมไม่ไป  </label><br>
            <input type="radio" id="answer_fee8" name="answer_fee8" value="1">
            <label for="4">ง.โมโหและต่อว่าสุพรทิพย์ว่าเป็นคนกลับกลอก</label>
          </div>
        </div>

        <!-- question9 -->
        <div class="card-header bg-da">
          <div class="card-header">
          ข้อ 9&nbsp;วลัยพรทำการบ้านยังไม่เสร็จเพราะไม่เข้าใจ จึงขอให้สัตนันท์ช่วยอธิบาย โดยสัตนันท์สัญญาว่าจะช่วยแต่ปรากฏว่าสัตนันท์ไม่ว่างจึงยังไม่ได้ช่วยทำ ถ้านักเรียนเป็นวลัยพรจะทำอย่างไร          </div>
          <div class="card-body">
            <input type="radio" id="answer_fee9" name="answer_fee9" value="4" required="required">
            <label for="1">ก.ขอให้ช่วยทำหลังเลิกเรียน </label><br>
            <input type="radio" id="answer_fee9" name="answer_fee9" value="1">
            <label for="2">ข.ขู่สัตนันท์ว่าถ้าไม่ช่วยจะเลิกคบกัน </label><br>
            <input type="radio" id="answer_fee9" name="answer_fee9" value="2">
            <label for="3">ค.ถามสัตนันท์ด้วยสีหน้าไม่พอใจว่าจะช่วยหรือไม่หากไม่ช่วยจะหาเพื่อนคนอื่นให้ช่วย </label><br>
            <input type="radio" id="answer_fee9" name="answer_fee9" value="3">
            <label for="4">ง.ถามสัตนันท์ด้วยสีหน้าปกติว่าจะช่วยหรือไม่และจะว่างช่วยตอนไหน ถ้าไม่ว่างจริงๆจะได้ไปถามเพื่อนคนอื่น </label>
          </div>
        </div>

        <!-- question10 -->
        <div class="card-header bg-da">
          <div class="card-header">
          ข้อ 10&nbsp;ขวัญใจย้ายโรงเรียนบ่อยเนื่องจากคุณพ่อเป็นข้าราชการจึงจำเป็นต้องย้ายโรงเรียนเพื่อติดตามพ่อ ถ้านักเรียนเป็นขวัญใจต้องย้ายโรงเรียนบ่อยนักเรียนจะทำอย่างไร          </div>
          <div class="card-body">
            <input type="radio" id="answer_fee10" name="answer_fee10" value="3" required="required">
            <label for="1">ก.เสียใจที่ต้องจากเพื่อนสนิทโรงเรียนเดิมแต่ก็ต้องย้ายตามผู้ปกครอง </label><br>
            <input type="radio" id="answer_fee10" name="answer_fee10" value="2">
            <label for="2">ข.ขอผู้ปกครองไม่ย้ายไปด้วยขออยู่หอพักเพราะไม่อยากจากเพื่อนที่โรงเรียนเดิม </label><br>
            <input type="radio" id="answer_fee10" name="answer_fee10" value="4">
            <label for="3">ค.คิดว่าการพบเพื่อนใหม่เป็นประสบการณ์ที่ดีชินกับการย้ายโรงเรียนแล้ว </label><br>
            <input type="radio" id="answer_fee10" name="answer_fee10" value="1">
            <label for="4">ง.รู้สึกกังวลทุกครั้งในการเข้าเรียนโรงเรียนใหม่และพบเพื่อนใหม่ </label>
          </div>
        </div>


        <div class="progress">
          <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 20%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">20%</div>
        </div>


        <div class="card-footer">
              <button type="submit" name="submit" class="btn btn-success">หน้าถัดไป 1/5</button> 
              <!-- <a href="submit.php">ข้อถัดไป</a> -->
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

