<?php
    /**
     * เปิดใช้งาน Session
     */
    session_start(); 

        $name = $_POST ["name"];
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

      <form role="form" action="create.php" method="post"> 
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
 
        <!-- question2 -->
        <div class="card">
          <div class="card-header">
          ข้อ 2 เวลาที่ครูสอนและให้คิดตามไปด้วย สุวิชามักจะไม่คิดตามเพราะมัวแต่คิดเรื่องอื่น ถ้านักเรียนเป็นสุวิชาจะทำอย่างไร
          </div>
          <div class="card-body">
            <input type="radio" id="answer_fee2" name="answer_fee2" value="2" required="required" checked>
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
        <div class="card">
          <div class="card-header">
          ข้อ 3&nbsp;สมปองเห็นเพื่อนๆดื่มเครื่องดื่มที่มีแอลกอฮอล์อย่างมีความสุขคุยกันอย่างสนุกสนานอยากเข้าร่วมด้วยแต่ก็รู้ว่าเป็นสิ่งที่ไม่ดีถ้านักเรียนเป็นสมปองจะทำอย่างไร          </div>
          <div class="card-body">
            <input type="radio" id="answer_fee3" name="answer_fee3" value="1" required="required" checked>
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
        <div class="card">
          <div class="card-header">
          ข้อ 4&nbsp;วันนี้อภิชัยต้องไปเรียนพิเศษวิชาคณิตศาสตร์และอภิชัยรู้สึกเบื่อมาก ไกรฤกษ์เลยชวนอภิชัยไปแอบเล่นการพนันกับเพื่อนอีก 3 คน ถ้านักเรียนเป็นอภิชัยจะทำอย่างไร          </div>
          <div class="card-body">
            <input type="radio" id="answer_fee4" name="answer_fee4" value="2" required="required" checked>
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
        <div class="card">
          <div class="card-header">
          ข้อ 5&nbsp;ในวันเสาร์ขณะที่วิภาดากำลังทำโครงงานคุณธรรมอยู่นั้น มาลีวัลย์มาชวนไปเที่ยวห้างสรรพสินค้า ถ้านักเรียนเป็นวิภาดานักเรียนจะทำอย่างไร</div>
          <div class="card-body">
            <input type="radio" id="answer_fee5" name="answer_fee5" value="4" required="required" checked>
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
        <div class="card">
          <div class="card-header">
          ข้อ 6&nbsp;อาจารย์ฝ่ายกีฬามองเห็นว่า เกียรติศักดิ์สามารถเป็นตัวแทนนักกีฬาของโรงเรียนได้ เขาจึงพยายามฝึกซ้อมอย่างหนัก แต่เมื่อไปแข่งขันแล้วพ่ายแพ้กลับมา ถ้านักเรียนเป็นเกียรติศักดิ์จะทำอย่างไร          </div>
          <div class="card-body">
            <input type="radio" id="answer_fee6" name="answer_fee6" value="4" required="required" checked>
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
        <div class="card">
          <div class="card-header">
          ข้อ 7&nbsp;ครูสุวรรณลาตำหนิพงศกรว่าไม่ทำเวรทำความสะอาดห้องเรียนและลงโทษให้พงศกรทำความสะอาดห้องเรียนทุกวันเป็นเวลา 1 สัปดาห์ถ้านักเรียนเป็นพงศกรจะทำอย่างไรเมื่อเห็นว่าตนเองได้ทำเวรแล้ว          </div>
          <div class="card-body">
            <input type="radio" id="answer_fee7" name="answer_fee7" value="4" required="required" checked>
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
        <div class="card">
          <div class="card-header">
          ข้อ 8&nbsp;กานดานัดกับสุพรทิพย์ว่าจะไปเที่ยวห้างกันในวันเสาร์แต่พอถึงวันนัดหมายในตอนเช้ากานดาโทรศัพท์ไปหาสุพรทิพย์และได้คำตอบว่าสุพรทิพย์ไม่อยากไปแล้วถ้านักเรียนเป็นกานดาจะเลือกทำข้อใดต่อไปนี้          </div>
          <div class="card-body">
            <input type="radio" id="answer_fee8" name="answer_fee8" value="2" required="required" checked>
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
        <div class="card">
          <div class="card-header">
          ข้อ 9&nbsp;วลัยพรทำการบ้านยังไม่เสร็จเพราะไม่เข้าใจ จึงขอให้สัตนันท์ช่วยอธิบาย โดยสัตนันท์สัญญาว่าจะช่วยแต่ปรากฏว่าสัตนันท์ไม่ว่างจึงยังไม่ได้ช่วยทำ ถ้านักเรียนเป็นวลัยพรจะทำอย่างไร          </div>
          <div class="card-body">
            <input type="radio" id="answer_fee9" name="answer_fee9" value="4" required="required" checked>
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
        <div class="card">
          <div class="card-header">
          ข้อ 10&nbsp;ขวัญใจย้ายโรงเรียนบ่อยเนื่องจากคุณพ่อเป็นข้าราชการจึงจำเป็นต้องย้ายโรงเรียนเพื่อติดตามพ่อ ถ้านักเรียนเป็นขวัญใจต้องย้ายโรงเรียนบ่อยนักเรียนจะทำอย่างไร          </div>
          <div class="card-body">
            <input type="radio" id="answer_fee10" name="answer_fee10" value="3" required="required" checked>
            <label for="1">ก.เสียใจที่ต้องจากเพื่อนสนิทโรงเรียนเดิมแต่ก็ต้องย้ายตามผู้ปกครอง </label><br>
            <input type="radio" id="answer_fee10" name="answer_fee10" value="2">
            <label for="2">ข.ขอผู้ปกครองไม่ย้ายไปด้วยขออยู่หอพักเพราะไม่อยากจากเพื่อนที่โรงเรียนเดิม </label><br>
            <input type="radio" id="answer_fee10" name="answer_fee10" value="4">
            <label for="3">ค.คิดว่าการพบเพื่อนใหม่เป็นประสบการณ์ที่ดีชินกับการย้ายโรงเรียนแล้ว </label><br>
            <input type="radio" id="answer_fee10" name="answer_fee10" value="1">
            <label for="4">ง.รู้สึกกังวลทุกครั้งในการเข้าเรียนโรงเรียนใหม่และพบเพื่อนใหม่ </label>
          </div>
        </div>

        <!-- question11 -->
        <div class="card">
          <div class="card-header">
          ข้อ 11&nbsp;ถ้าเพื่อนบ้านนักเรียนปลูกต้นไม้ไว้ข้างบ้านแล้วต้นไม้ใหญ่ยืนกิ่งไม้เข้ามาในบ้านนักเรียนทำให้บดบังทัศนียภาพและอาจหักโค่นลงมาใส่บ้านนักเรียนได้ในสถานการณ์เช่นนี้นักเรียนจะทำอย่างไร          </div>
          <div class="card-body">
            <input type="radio" id="answer_fee11" name="answer_fee11" value="1" required="required" checked>
            <label for="1">ก.อยู่เฉยๆไม่กล้าไปแจ้งเพราะกลัวทะเลาะกับเพื่อนบ้าน </label><br>
            <input type="radio" id="answer_fee11" name="answer_fee11" value="2">
            <label for="2">ข.อยู่เฉยๆรอให้เกิดเหตุการณ์ต้นไม้หักใส่บ้านเราก่อนค่อยไปคุยกับเพื่อนบ้าน </label><br>
            <input type="radio" id="answer_fee11" name="answer_fee11" value="4">
            <label for="3">ค.เดินเข้าไปคุยกับเพื่อนบ้านแล้วบอกกล่าวถึงผลกระทบที่เกิดจากบ้านเราให้เพื่อนบ้านฟัง </label><br>
            <input type="radio" id="answer_fee11" name="answer_fee11" value="3">
            <label for="4">ง.เดินเข้าไปบอกให้เพื่อนบ้านตัดต้นไม้ถ้าไม่ทำจะบอกผู้ปกครองให้ขอใช้สิทธิดำเนินการทางกฎหมาย </label>
          </div>
        </div>

        <!-- question12 -->
        <div class="card">
          <div class="card-header">
          ข้อ 12&nbsp;อาจารย์ให้จับกลุ่มแสดงละครเวทีในงานวันสุนทรภู่ เพื่อนในกลุ่มให้ช่วยกันแสดงความคิดเห็นเพื่อนในกลุ่มคนหนึ่งเสนอว่าให้แสดงละครเรื่องโรมิโอกับจูเลียต นักเรียนไม่เห็นด้วยในสถานการณ์เช่นนี้นักเรียนจะทำอย่างไร          </div>
          <div class="card-body">
            <input type="radio" id="answer_fee12" name="answer_fee12" value="1" required="required" checked>
            <label for="1">ก.อยู่เฉยๆไม่กล้าคัดค้านเพื่อน </label><br>
            <input type="radio" id="answer_fee12" name="answer_fee12" value="2">
            <label for="2">ข.อยู่เฉยๆไม่กล้าคัดค้านแต่ถ้ามีเพื่อนคนไหนเสนอว่าไม่เห็นด้วยค่อยยกมือสนับสนุนเพื่อนคนนั้น</label><br>
            <input type="radio" id="answer_fee12" name="answer_fee12" value="3">
            <label for="3">ค.บอกเพื่อนว่าไม่เห็นด้วยเพราะมันไม่ใช่วรรณคดีของไทย </label><br>
            <input type="radio" id="answer_fee12" name="answer_fee12" value="4">
            <label for="4">ง.บอกเพื่อนว่าไม่เห็นด้วยเพราะไม่ใช่วรรณกรรมที่แต่งโดยสุนทรภู่และเสนอแนะวรรณกรรมที่สุนทรภู่เคยแต่งไว้ </label>
          </div>
        </div>

        <!-- question13 -->
        <div class="card">
          <div class="card-header">
          ข้อ 13&nbsp;โรงเรียนปิดประกาศรับสมัครสอบชิงทุนการศึกษาไปเรียนคอร์สภาษาอังกฤษระยะสั้นที่ประเทศสิงคโปร์เป็นเวลา 1 เดือนปรากฏว่านักเรียนและเพื่อนสนิทสอบได้เป็นตัวแทนโรงเรียนไปเรียนต่างประเทศต่อมาเพื่อนสนิทของนักเรียนไปไม่ได้เพราะป่วยทำให้นักเรียนต้องไปต่างประเทศคนเดียว           </div>
          <div class="card-body">
            <input type="radio" id="answer_fee13" name="answer_fee13" value="1" required="required" checked>
            <label for="1">ก.ไม่กล้าไปคนเดียวขอถอนการรับทุน </label><br>
            <input type="radio" id="answer_fee13" name="answer_fee13" value="2">
            <label for="2">ข.รู้สึกกลัวที่จะไปต่างประเทศคนเดียวแต่ก็ต้องไปเพราะได้ทุนแล้ว </label><br>
            <input type="radio" id="answer_fee13" name="answer_fee13" value="3">
            <label for="3">ค.รู้สึกตื่นเต้นและอยากไปพบกับเพื่อนใหม่และประสบการณ์ใหม่ที่ต่างประเทศ </label><br>
            <input type="radio" id="answer_fee13" name="answer_fee13" value="4">
            <label for="4">ง.รู้สึกตื่นเต้นและตั้งใจกับการเรียนภาษาอังกฤษมากพร้อมรับกับสถานการณ์ที่จะเกิดขึ้น </label>
          </div>
        </div>

        <!-- question14 -->
        <div class="card">
          <div class="card-header">
          ข้อ 14&nbsp;วันพรุ่งนี้ครูให้นักเรียนสำรวจรายชื่อคนที่จะไปเข้าค่ายอาสาพัฒนาและให้ส่งรายชื่อให้ครูในตอนเช้าวันรุ่งขึ้นเพื่อนคนหนึ่งในห้องไม่มาโรงเรียนนักเรียนจะทำอย่างไร          </div>
          <div class="card-body">
            <input type="radio" id="answer_fee14" name="answer_fee14" value="4" required="required" checked>
            <label for="1">ก.รอถามเพื่อนก่อน </label><br>
            <input type="radio" id="answer_fee14" name="answer_fee14" value="2">
            <label for="2">ข.ตัดสินใจแทนเพื่อน </label><br>
            <input type="radio" id="answer_fee14" name="answer_fee14" value="3">
            <label for="3">ค.ส่งรายชื่อให้ครูเท่าที่สำรวจได้ </label><br>
            <input type="radio" id="answer_fee14" name="answer_fee14" value="1">
            <label for="4">ง.ไม่สนใจเพื่อนตัดรายชื่อออก </label>
          </div>
        </div>

        <!-- question15 -->
        <div class="card">
          <div class="card-header">
          ข้อ 15&nbsp;นักเรียนกำลังทำการบ้านแล้วพ่อใช้ให้ไปรดน้ำต้นไม้นักเรียนจะทำอย่างไร เพราะอะไร          </div>
          <div class="card-body">
            <input type="radio" id="answer_fee15" name="answer_fee15" value="1" required="required" checked>
            <label for="1">ก.พ่อไม่เข้าใจพ่อทำอย่างนี้ได้อย่างไรเสียความรู้สึก </label><br>
            <input type="radio" id="answer_fee15" name="answer_fee15" value="2">
            <label for="2">ข.ไปรดน้ำต้นไม้แล้วให้พ่อทำการบ้านให้เพราะจะได้ไม่เสียดุล </label><br>
            <input type="radio" id="answer_fee15" name="answer_fee15" value="4">
            <label for="3">ค.ขอทำการบ้านก่อนเพราะการเรียนสำคัญแล้วค่อยไปรดน้ำต้นไม้ </label><br>
            <input type="radio" id="answer_fee15" name="answer_fee15" value="3">
            <label for="4">ง.ไปรดน้ำต้นไม้ก่อนเพราะเดี๋ยวจะหาว่าไม่เชื่อฟังพ่อแม่ </label>
          </div>
        </div>

        <!-- question16 -->
        <div class="card">
          <div class="card-header">
          ข้อ 16&nbsp;ขณะนี้มีโรคระบาดโควิท 19 เกิดขึ้นรัฐบาลประกาศให้มีการรักษาระยะห่างทางสังคมและสวมหน้ากากอนามัยป้องกันโรค นักเรียนได้ทำตามนโยบายของรัฐบาลอย่างไร          </div>
          <div class="card-body">
            <input type="radio" id="answer_fee16" name="answer_fee16" value="1" required="required" checked>
            <label for="1">ก.ไม่ใส่หน้ากากและนั่งทานอาหารใกล้กับเพื่อนตามปกติเพราะเชื่อว่าไม่มีโรคในประเทศไทยแล้ว </label><br>
            <input type="radio" id="answer_fee16" name="answer_fee16" value="3">
            <label for="2">ข.ใส่หน้ากากเฉพาะตอนเข้าห้างสรรพสินค้าเพราะเขาบังคับ</label><br>
            <input type="radio" id="answer_fee16" name="answer_fee16" value="4">
            <label for="3">ค.ใส่หน้ากาก ล้างมือบ่อยๆและเว้นระยะห่างตามรัฐบาลแนะนำอย่างเคร่งครัดทุกครั้งที่ออกนอกบ้าน </label><br>
            <input type="radio" id="answer_fee16" name="answer_fee16" value="2">
            <label for="4">ง.ใส่หน้ากากไว้ใต้คาง เวลาจะเข้าห้างค่อยดึงขึ้นมาปิดเพราะใส่แล้วหายใจไม่สะดวก </label>
          </div>
        </div>

        <!-- question17 -->
        <div class="card">
          <div class="card-header">
          ข้อ 17&nbsp;นัทมีเพื่อนในห้องมาจีบ แต่นัทไม่ได้ชอบเพื่อนคนนั้น ถ้านักเรียนเป็นนัทบอกเพื่อนที่มาจีบว่าอย่างไร          </div>
          <div class="card-body">
            <input type="radio" id="answer_fee17" name="answer_fee17" value="1" required="required" checked>
            <label for="1">ก.บอกว่าไม่ชอบและอย่ามายุ่งกับตนอีก </label><br>
            <input type="radio" id="answer_fee17" name="answer_fee17" value="4">
            <label for="2">ข.บอกว่าตอนนี้ยังเป็นนักเรียนอยู่เป็นเพื่อนกันไปก่อน </label><br>
            <input type="radio" id="answer_fee17" name="answer_fee17" value="3">
            <label for="3">ค.บอกว่าไม่อยากมีแฟนเดี๋ยวโดนเพื่อนล้อ </label><br>
            <input type="radio" id="answer_fee17" name="answer_fee17" value="2">
            <label for="4">ง.บอกว่าไม่ชอบรอเธอรวยก่อนค่อยมาจีบใหม่ </label>
          </div>
        </div>

        <!-- question18 -->
        <div class="card">
          <div class="card-header">
          ข้อ 18&nbsp;อนุพงษ์เป็นสมาชิกชมรมอาสาพัฒนาชนบท ได้ออกไปตั้งค่ายพัฒนาชนบทแห่งหนึ่ง โดยร่วมทำงานกับเพื่อนๆหลายคน ซึ่งต่างก็ยังไม่เคยทำงานร่วมกันมาก่อน ในสถานการณ์เช่นนี้ ถ้านักเรียนเป็นอนุพงษ์จะทำอย่างไร          </div>
          <div class="card-body">
            <input type="radio" id="answer_fee18" name="answer_fee18" value="4" required="required" checked>
            <label for="1">ก.ควรประชุมปรึกษาหารือกันก่อนเพื่อวางแผนและแบ่งความรับผิดชอบในการทำงาน </label><br>
            <input type="radio" id="answer_fee18" name="answer_fee18" value="1">
            <label for="2">ข.ตอนทำงานไม่ค่อยอยากทำ รอร่วมสนุกในงานเลี้ยงกลางคืนอย่างเดียว </label><br>
            <input type="radio" id="answer_fee18" name="answer_fee18" value="3">
            <label for="3">ค.รอดูสถานการณ์ไปก่อน จนกว่าเพื่อนๆจะบอกให้ช่วยทำอะไร </label><br>
            <input type="radio" id="answer_fee18" name="answer_fee18" value="2">
            <label for="4">ง.จับกลุ่มเฉพาะเพื่อนที่สนิทและทำเฉพาะงานที่ตัวเองพอใจ </label>
          </div>
        </div>

        <!-- question19 -->
        <div class="card">
          <div class="card-header">
          ข้อ 19&nbsp;ในวิชาแนะแนวครูให้นักเรียนเขียนเรียงความเรื่องอาชีพในฝันของฉัน นักเรียนมีวิธีการเขียนเรียงความอย่างไร          </div>
          <div class="card-body">
            <input type="radio" id="answer_fee19" name="answer_fee19" value="1" required="required" checked>
            <label for="1">ก.เขียนส่งๆไปโดยไม่วางแผนขอแค่ให้มีส่ง  </label><br>
            <input type="radio" id="answer_fee19" name="answer_fee19" value="2">
            <label for="2">ข.ดูของเพื่อนเป็นตัวอย่างแล้วเขียนตามเพื่อน </label><br>
            <input type="radio" id="answer_fee19" name="answer_fee19" value="4">
            <label for="3">ค.นำเสนอเนื้อหาเป็นลำดับขั้นตอนโดยออกแบบการนําเสนอให้น่าสนใจ </label><br>
            <input type="radio" id="answer_fee19" name="answer_fee19" value="3">
            <label for="4">ง.นำเสนอเนื้อหาเป็นลำดับขั้นตอน ตามหัวข้อที่ครูให้มา </label>
          </div>
        </div>

        <!-- question20 -->
        <div class="card">
          <div class="card-header">
          ข้อ 20&nbsp;ในการเลือกหัวหน้าห้องตูมตามได้รับการเสนอชื่อและได้รับเลือกให้เป็นหัวหน้าห้องถ้านักเรียนเป็นตูมตามจะทำอย่างไร          </div>
          <div class="card-body">
            <input type="radio" id="answer_fee20" name="answer_fee20" value="2" required="required" checked>
            <label for="1">ก.ไม่รับตำแหน่งเพราะคิดว่าตนเองไม่มีความสามารถ </label><br>
            <input type="radio" id="answer_fee20" name="answer_fee20" value="1">
            <label for="2">ข.ไม่รับตำแหน่งเพราะกลัวเพื่อนในห้องใช้งาน </label><br>
            <input type="radio" id="answer_fee20" name="answer_fee20" value="4">
            <label for="3">ค.รับตำแหน่งเพราะเชื่อว่าตนเองมีความสามารถเป็นหัวหน้าห้องที่ดีได้ </label><br>
            <input type="radio" id="answer_fee20" name="answer_fee20" value="3">
            <label for="4">ง.รับตำแหน่งแต่ไม่มั่นใจว่าตัวเองจะเป็นหัวหน้าห้องที่ดีได้หรือไม่ </label>
          </div>
        </div>

        <!-- question21 -->
        <div class="card">
          <div class="card-header">
          ข้อ 21&nbsp;เมื่อความคิดเห็นไม่ตรงกับผู้อื่นนักเรียนจะปฏิบัติอย่างไร          </div>
          <div class="card-body">
            <input type="radio" id="answer_fee21" name="answer_fee21" value="1" required="required" checked>
            <label for="1">ก.ไม่เห็นด้วยในเรื่องใดจะชี้แจงให้คนอื่นเห็นด้วยกับเหตุผลของตนเอง </label><br>
            <input type="radio" id="answer_fee21" name="answer_fee21" value="2">
            <label for="2">ข.ยินดีรับฟังเหตุผลของคนอื่นแม้จะไม่เห็นด้วยก็ตาม </label><br>
            <input type="radio" id="answer_fee21" name="answer_fee21" value="3">
            <label for="3">ค.ยินดีรับฟังเหตุผลของคนอื่นแม้จะไม่เห็นด้วยและจะพยายามอธิบายเหตุผลของตนเองให้คนอื่นฟังเมื่อมีโอกาส </label><br>
            <input type="radio" id="answer_fee21" name="answer_fee21" value="4">
            <label for="4">ง.ยินดีรับฟังเหตุผลของคนอื่นแม้จะไม่เห็นด้วยจะพยายามอธิบายเหตุผลของตัวเองให้คนอื่นฟังเมื่อมีโอกาสและยอมรับในเหตุผลของคนส่วนใหญ่ </label>
          </div>
        </div>

        <!-- question22 -->
        <div class="card">
          <div class="card-header">
          ข้อ 22&nbsp;พ่อแม่อยากให้นักเรียนเลือกอาชีพเป็นข้าราชการเพราะเป็นอาชีพที่มั่นคงเมื่อเกษียณอายุแล้วจะได้มีเงินเลี้ยงชีพตลอดชีวิตแต่นักเรียนไม่ชอบนักเรียนชอบการค้าขายเมื่อนักเรียนได้เลือกการค้าขายแต่ปรากฏว่าทำไป 2 ธุรกิจแล้วขาดทุนนักเรียนรู้สึกอย่างไร          </div>
          <div class="card-body">
            <input type="radio" id="answer_fee22" name="answer_fee22" value="1" required="required" checked>
            <label for="1">ก.น่าจะเลือกเรียนตามที่พ่อแม่บอกก็ดี </label><br>
            <input type="radio" id="answer_fee22" name="answer_fee22" value="3">
            <label for="2">ข.ไม่เป็นไรค่อยหาอาชีพใหม่ต่อไป </label><br>
            <input type="radio" id="answer_fee22" name="answer_fee22" value="2">
            <label for="3">ค.ท้อแท้เสียใจแต่ค้าขายต่อไปเผื่อมีโอกาสทางธุรกิจอื่น </label><br>
            <input type="radio" id="answer_fee22" name="answer_fee22" value="4">
            <label for="4">ง.ไม่เสียใจเพราะเป็นสิ่งที่เราชอบอย่างน้อยก็ได้ลองทำ </label>
          </div>
        </div>

        <!-- question23 -->
        <div class="card">
          <div class="card-header">
          ข้อ 23&nbsp;มาริสาเป็นนักเรียนชั้นมัธยมศึกษาปีที่ 6 ปีนี้ต้องเตรียมตัวสอบให้พร้อมที่สุดเพื่อจะได้เรียนในคณะที่ตนสนใจถ้านักเรียนเป็นมาริสาจะทำอย่างไร          </div>
          <div class="card-body">
            <input type="radio" id="answer_fee23" name="answer_fee23" value="4" required="required" checked>
            <label for="1">ก.ตั้งใจอ่านหนังสืออย่างเต็มความสามารถ </label><br>
            <input type="radio" id="answer_fee23" name="answer_fee23" value="3">
            <label for="2">ข.ปรึกษาหารือกับพ่อแม่ผู้ปกครองและขอเงินสนับสนุนเพื่อไปเรียนพิเศษในรายวิชาที่ใช้สอบ </label><br>
            <input type="radio" id="answer_fee23" name="answer_fee23" value="2">
            <label for="3">ค.ไม่ต้องปรึกษาหารือใครแต่ทำในสิ่งที่ตนเองต้องการ </label><br>
            <input type="radio" id="answer_fee23" name="answer_fee23" value="1">
            <label for="4">ง.ไม่ต้องไปโรงเรียนแต่ขอลาหยุดเพื่อเตรียมตัวสอบ </label>
          </div>
        </div>

        <!-- question24 -->
        <div class="card">
          <div class="card-header">
          ข้อ 24&nbsp;ครูสั่งให้การะเกดนำวัสดุอุปกรณ์มาใช้ในการทดลองวิทยาศาสตร์ในชั่วโมงหน้าแต่เมื่อการะเกดสำรวจแล้วยังขาดวัสดุอุปกรณ์บางอย่างถ้านักเรียนเป็นการะเกดจะทำอย่างไร          </div>
          <div class="card-body">
            <input type="radio" id="answer_fee24" name="answer_fee24" value="4" required="required" checked>
            <label for="1">ก.จัดเตรียมวัสดุอุปกรณ์ที่ต้องใช้ให้เรียบร้อย </label><br>
            <input type="radio" id="answer_fee24" name="answer_fee24" value="3">
            <label for="2">ข.จัดเตรียมเท่าที่หาได้ถ้าหาไม่ครบค่อยให้พ่อแม่และพี่สาวหาให้ </label><br>
            <input type="radio" id="answer_fee24" name="answer_fee24" value="2">
            <label for="3">ค.ไม่จัดวัสดุอุปกรณ์อะไรเลยไปขอยืมเพื่อนในชั่วโมงเรียน </label><br>
            <input type="radio" id="answer_fee24" name="answer_fee24" value="1">
            <label for="4">ง.ไม่จัดวัสดุอุปกรณ์อะไรเลยเพราะคิดว่าเป็นหน้าที่ของครู </label>
          </div>
        </div>

        <!-- question25 -->
        <div class="card">
          <div class="card-header">
          ข้อ 25&nbsp;ดวงสมรวาดฝันไว้ว่าโตขึ้นจะเป็นสถาปนิกเหมือนอรอนงค์ลูกสาวของป้าไพ  พ่อแม่ของดวงสมรสนับสนุนอย่างเต็มที่เกี่ยวกับการเรียน ดวงสมรจึงตั้งใจเรียนและอ่านหนังสือเมื่อมีเวลาว่าง  ป้าไพแนะนำให้ยืมหนังสือเตรียมสอบและให้อรอนงค์ติวให้ถ้านักเรียนเป็นดวงสมรจะคิดอย่างไร          </div>
          <div class="card-body">
            <input type="radio" id="answer_fee25" name="answer_fee25" value="1" required="required" checked>
            <label for="1">ก.ไม่สนใจเพราะเก่งอยู่แล้ว </label><br>
            <input type="radio" id="answer_fee25" name="answer_fee25" value="2">
            <label for="2">ข.ไม่สนใจเพราะไม่เชื่อในอรอนงค์ </label><br>
            <input type="radio" id="answer_fee25" name="answer_fee25" value="3">
            <label for="3">ค.สนใจเพราะเชื่อว่าจะมีแนวข้อสอบ </label><br>
            <input type="radio" id="answer_fee25" name="answer_fee25" value="4">
            <label for="4">ง.สนใจเพราะเชื่อว่าอรอนงค์จะทำให้ความฝันของตนเป็นจริง </label>
          </div>
        </div>

        <!-- question26 -->
        <div class="card">
          <div class="card-header">
          ข้อ 26&nbsp;ณัฐวุฒิเก่งมากในวิชาภาษาอังกฤษและคณิตศาสตร์ ครูและเพื่อนๆในชั้นเรียนต่างก็ชื่นชมนอกจากเรียนเก่งแล้วณัฐวุฒิยังเป็นนักเรียนที่มีความเสียสละโดยหลังเลิกเรียนทุกวันพุธจะช่วยสอนพิเศษให้เพื่อนๆที่ไม่เข้าใจในบทเรียนถ้านักเรียนเป็นเพื่อนของณัฐวุฒินักเรียนจะคิดอย่า          </div>
          <div class="card-body">
            <input type="radio" id="answer_fee26" name="answer_fee26" value="3" required="required" checked>
            <label for="1">ก.น่าสนใจแต่ไม่ไปเรียนกับณัฐวุฒิเพราะตนเองเก่งแล้ว </label><br>
            <input type="radio" id="answer_fee26" name="answer_fee26" value="4">
            <label for="2">ข.สนใจและไปสมัครเรียนกับณัฐวุฒิหลังเลิกเรียน </label><br>
            <input type="radio" id="answer_fee26" name="answer_fee26" value="1">
            <label for="3">ค.ไม่สนใจและไม่ไปเรียนกับณัฐวุฒิ </label><br>
            <input type="radio" id="answer_fee26" name="answer_fee26" value="2">
            <label for="4">ง.เฉยๆ เพราะแค่เรียนในห้องก็เบื่อแล้ว </label>
          </div>
        </div>

        <!-- question27 -->
        <div class="card">
          <div class="card-header">
          ข้อ 27&nbsp;ที่หมู่บ้านของโชคชัยมีการจัดกิจกรรมทำความสะอาดบริเวณถนนรอบหมู่บ้านทุกวันพระ โดยมีการประกาศเชิญชวนเสียงตามสายของหอกระจายข่าวประจำหมู่บ้านก่อนล่วงหน้า 1 วันทุกครั้งถ้านักเรียนเป็นโชคชัยนักเรียนจะทำอย่างไร          </div>
          <div class="card-body">
            <input type="radio" id="answer_fee27" name="answer_fee27" value="1" required="required" checked>
            <label for="1">ก.เฉยๆไม่สนใจ </label><br>
            <input type="radio" id="answer_fee27" name="answer_fee27" value="2">
            <label for="2">ข.สนใจเพราะเป็นสิ่งดีงามแต่ไม่อยากทำ </label><br>
            <input type="radio" id="answer_fee27" name="answer_fee27" value="3">
            <label for="3">ค.สนใจเพราะเป็นสิ่งดีงามและจัดเตรียมอุปกรณ์ให้พร้อม </label><br>
            <input type="radio" id="answer_fee27" name="answer_fee27" value="4">
            <label for="4">ง.สนใจร่วมวางแผนแบ่งหน้าที่กันทำงานช่วยเหลืองานจนสำเร็จ </label>
          </div>
        </div>

        <!-- question28 -->
        <div class="card">
          <div class="card-header">
          ข้อ 28&nbsp;ในชั่วโมงว่างของประสิทธิ์ได้สืบค้นข้อมูลเกี่ยวกับการทำโครงงานคุณธรรมเฉลิมพระเกียรติจากอินเทอร์เน็ตแต่ปรากฏว่าหมดเวลาก่อนจึงคิดว่าหลังเลิกเรียนจะนำความรู้เรื่องการทำโครงการคุณธรรมไปแนะนำและชวนเพื่อนทำโครงงานกันถ้านักเรียนเป็นเพื่อนของประสิทธิ์นักเรียนคิดอย          </div>
          <div class="card-body">
            <input type="radio" id="answer_fee28" name="answer_fee28" value="2" required="required" checked>
            <label for="1">ก.สนใจแต่ร่วมทำโครงงานไม่ได้เพราะต้องช่วยพ่อแม่ทำงาน  </label><br>
            <input type="radio" id="answer_fee28" name="answer_fee28" value="1">
            <label for="2">ข.เฉยๆไม่สนใจ </label><br>
            <input type="radio" id="answer_fee28" name="answer_fee28" value="3">
            <label for="3">ค.สนใจทักชวนเพื่อนๆคุยเรื่องนี้ทุกวัน </label><br>
            <input type="radio" id="answer_fee28" name="answer_fee28" value="4">
            <label for="4">ง.สนใจทักชวนเพื่อนๆและขอคำปรึกษาจากครูเพื่อวางแผนการทำงาน</label>
          </div>
        </div>

        <!-- question29 -->
        <div class="card">
          <div class="card-header">
          ข้อ 29&nbsp;ในวันที่นักเรียนมีเวลาว่างไม่ได้ไปโรงเรียนและไม่ได้ช่วยผู้ปกครองทำงานนักเรียนทำอะไร          </div>
          <div class="card-body">
            <input type="radio" id="answer_fee29" name="answer_fee29" value="2" required="required" checked>
            <label for="1">ก.นอน</label><br>
            <input type="radio" id="answer_fee29" name="answer_fee29" value="3">
            <label for="2">ข.ชวนเพื่อนเที่ยวและไปหาของอร่อยทาน </label><br>
            <input type="radio" id="answer_fee29" name="answer_fee29" value="4">
            <label for="3">ค.หากิจกรรมเสริมพัฒนาการทำเช่น เล่นกีฬา เล่นดนตรี </label><br>
            <input type="radio" id="answer_fee29" name="answer_fee29" value="1">
            <label for="4">ง.จับกลุ่มกินเหล้า ร้องเพลง </label>
          </div>
        </div>

        <!-- question30 -->
        <div class="card">
          <div class="card-header">
          ข้อ 30&nbsp;เรามักได้ยินประโยคที่ว่า “คนเราควรใช้เวลาว่างให้เกิดประโยชน์ในการพัฒนาตนเอง” จากประโยคนี้ถ้านักเรียนจะทำอะไร          </div>
          <div class="card-body">
            <input type="radio" id="answer_fee30" name="answer_fee30" value="1" required="required" checked>
            <label for="1">ก.ฉันรู้ว่าการอ่านหนังสือมีประโยชน์  </label><br>
            <input type="radio" id="answer_fee30" name="answer_fee30" value="2">
            <label for="2">ข.ฉันชอบอ่านหนังสือและรักการอ่าน </label><br>
            <input type="radio" id="answer_fee30" name="answer_fee30" value="3">
            <label for="3">ค.ฉันใช้เวลาว่างร่วมกิจกรรมกับครอบครัวมากกว่าดูทีวี/เล่นโซเซียลมีเดีย </label><br>
            <input type="radio" id="answer_fee30" name="answer_fee30" value="4">
            <label for="4">ง.ฉันอ่านหนังสือทุกวันเมื่อมีเวลา หลังจากช่วยเหลืองานบ้านและทำกิจกรรมร่วมในครอบครัว </label>
          </div>
        </div>

        <!-- question31 -->
        <div class="card">
          <div class="card-header">
          ข้อ 31&nbsp;ดาวเรืองเรียนวิชาคณิตศาสตร์ไม่เก่ง ดาวเรืองค้นจึงคว้าหาความรู้เพิ่มเติมโดยการอ่านหนังสือและตั้งใจเรียนให้มากขึ้นแต่ผลการเรียนก็ไม่ดีขึ้นถ้านักเรียนเป็นดาวเรืองจะทำอย่างไร          </div>
          <div class="card-body">
            <input type="radio" id="answer_fee31" name="answer_fee31" value="1" required="required" checked>
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
        <div class="card">
          <div class="card-header">
          ข้อ 32&nbsp;“คนเรา...ถ้าค้นพบจุดเด่นของตนที่พัฒนาได้...ก็จะมีผลงานที่ดีที่สุด” จากข้อความนี้นักเรียนคิดหรืออยากทำสิ่งใด          </div>
          <div class="card-body">
            <input type="radio" id="answer_fee32" name="answer_fee32" value="2" required="required" checked>
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
        <div class="card">
          <div class="card-header">
          ข้อ 33&nbsp;คุณครูมอบหมายให้แนนซี่ทำกิจกรรมกลุ่มแกะสลักผักและผลไม้แกะสลักแตงโมให้เสร็จและเก็บอุปกรณ์ให้เรียบร้อย ถ้านักเรียนเป็นสมาชิกกลุ่มของแนนซี่ นักเรียนจะทำอย่างไร          </div>
          <div class="card-body">
            <input type="radio" id="answer_fee33" name="answer_fee33" value="2" required="required" checked>
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
        <div class="card">
          <div class="card-header">
          ข้อ 34&nbsp;คุณครูมอบหมายงานให้นักเรียนทำชิ้นหนึ่งที่ค่อนข้างยากและต้องทักษะหลายอย่างในการทำงานจึงจะสำเร็จลุล่วงและส่งทันตามเวลาที่กำหนดในการทำงานลักษณะนี้ นักเรียนจะทำอย่างไร          </div>
          <div class="card-body">
            <input type="radio" id="answer_fee34" name="answer_fee34" value="3" required="required" checked>
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
        <div class="card">
          <div class="card-header">
          ข้อ 35&nbsp;เมื่อครูที่สอนนักเรียนบอกว่านักเรียนเป็นคนใจร้อน ไม่ค่อยมีความรอบคอบในการทำงานหรือทำข้อสอบ นักเรียนรู้สึกอย่างไร          </div>
          <div class="card-body">
            <input type="radio" id="answer_fee35" name="answer_fee35" value="1" required="required" checked>
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
        <div class="card">
          <div class="card-header">
          ข้อ 36&nbsp;เมื่อคนที่บ้านนักเรียน บอกว่านักเรียนเป็นคนขี้เกียจสันหลังยาว นักเรียนรู้สึกอย่างไร          </div>
          <div class="card-body">
            <input type="radio" id="answer_fee36" name="answer_fee36" value="1" required="required" checked>
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
        <div class="card">
          <div class="card-header">
          ข้อ 37&nbsp;อีก 1 เดือนข้างหน้าจะถึงกำหนดเวลาสอบปลายภาคเรียน นักเรียนจะเตรียมตัวในการสอบอย่างไร          </div>
          <div class="card-body">
            <input type="radio" id="answer_fee37" name="answer_fee37" value="1" required="required" checked>
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
        <div class="card">
          <div class="card-header">
          ข้อ 38&nbsp;วิชาประวัติศาสตร์ ครูอุมาพรได้สั่งให้นักเรียนเขียนประวัติของตัวเองแล้วส่งในชั่วโมง พลอยได้ทำงานเสร็จแล้วมาส่งคุณครู แต่คุณครูบอกว่างานไม่สมบูรณ์ ให้นำมาแก้ไขใหม่ ถ้านักเรียนเป็นพลอยจะทำอย่างไร          </div>
          <div class="card-body">
            <input type="radio" id="answer_fee38" name="answer_fee38" value="4" required="required" checked>
            <label for="1">ก.นำมาแก้ไขตามที่ครูแนะนำด้วยความเต็มใจ </label><br>
            <input type="radio" id="answer_fee38" name="answer_fee38" value="3">
            <label for="2">ข.นำมาแก้ไขตามที่ครูแนะนำจนครบ </label><br>
            <input type="radio" id="answer_fee38" name="answer_fee38" value="2">
            <label for="3">ค.นำมาแก้ไขเป็นบางส่วน </label><br>
            <input type="radio" id="answer_fee38" name="answer_fee38" value="1">
            <label for="4">ง.ไม่แก้ไขตามที่ครูบอกเพราะคิดว่าทำดีแล้ว </label>
          </div>
        </div>

        <!-- question39 -->
        <div class="card">
          <div class="card-header">
          ข้อ 39&nbsp;น้ำตาลมีน้ำหนักตัวเกินเกณฑ์มากจึงต้องการลดน้ำหนักเพื่อจะเข้ารับการคัดเลือกเป็นเชียร์ลีดเดอร์ในเดือนหน้าถ้านักเรียนเป็นน้ำตาลจะทำอย่างไร          </div>
          <div class="card-body">
            <input type="radio" id="answer_fee39" name="answer_fee39" value="1" required="required" checked>
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
        <div class="card">
          <div class="card-header">
          ข้อ 40&nbsp;อัลเบริต์ ไอน์สไตล์ กล่าวว่า “ถ้าผมมีเวลา 1 ชั่วโมงในการแก้ปัญหา ผมจะใช้เวลา 55 นาทีขบคิดเกี่ยวกับปัญหานั้นและใช้เวลา 5 นาทีหาวิธีแก้ปัญหา” จากประโยคที่กล่าวมาเวลาเกิดปัญหาขึ้นนักเรียนสามารถบอกปัญหาที่เกิดขึ้นกับตนเองได้เพียงใด          </div>
          <div class="card-body">
            <input type="radio" id="answer_fee40" name="answer_fee40" value="3" required="required" checked>
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
        <div class="card">
          <div class="card-header">
          ข้อ 41&nbsp;ถ้านักเรียนลืมหนังสือเรียนวิชาภาษาไทยมาโรงเรียน นักเรียนควรแก้ปัญหาอย่างไรจึงจะเหมาะสมที่สุด          </div>
          <div class="card-body">
            <input type="radio" id="answer_fee41" name="answer_fee41" value="1" required="required" checked>
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
        <div class="card">
          <div class="card-header">
          ข้อ 42&nbsp;จากการตกลงกันในที่ประชุมสภานักเรียน เรื่องการจัดพิธีไหว้ครูประจำปีการศึกษานี้อย่างประหยัด นักเรียนได้รับมอบหมายให้เป็นหัวหน้ากลุ่มจัดทำพานดอกไม้-ธูปเทียน ที่จะใช้ในพิธีนักเรียนจะเตรียมงานอย่างไร          </div>
          <div class="card-body">
            <input type="radio" id="answer_fee42" name="answer_fee42" value="2" required="required" checked>
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
        <div class="card">
          <div class="card-header">
          ข้อ 43&nbsp;เมื่อนัดเพื่อนทำงานกลุ่มหรือไปทำกิจกรรมอื่นใดด้วยกันแล้วเพื่อนมาไม่เคยตรงเวลานักเรียนทำอย่างไร          </div>
          <div class="card-body">
            <input type="radio" id="answer_fee43" name="answer_fee43" value="1" required="required" checked>
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
        <div class="card">
          <div class="card-header">
          ข้อ 44&nbsp;ถ้านักเรียนเคยทำให้พ่อแม่ ผู้ปกครองผิดหวัง จากพฤติกรรมใดๆ ของนักเรียน เช่น พูดโกหก , โดดเรียนไปเล่นเกม ,ติดการพนัน,สอบตก ฯลฯ ถ้าย้อนเวลากลับไปได้นักเรียนจะ...          </div>
          <div class="card-body">
            <input type="radio" id="answer_fee44" name="answer_fee44" value="1" required="required" checked>
            <label for="1">ก.ไม่แน่ใจว่าจะทำเหมือนเดิมหรือไม่ </label><br>
            <input type="radio" id="answer_fee44" name="answer_fee44" value="2">
            <label for="2">ข.ต้องดูสถานการณ์ ณ ขณะนั้น </label><br>
            <input type="radio" id="answer_fee44" name="answer_fee44" value="3">
            <label for="3">ค.ไม่ทำเหมือนเดิมแน่นอน </label><br>
            <input type="radio" id="answer_fee44" name="answer_fee44" value="4">
            <label for="4">ง.รู้ว่าสิ่งที่ทำเป็นสิ่งไม่ดีจะไม่ทำตั้งแต่เริ่มแรก </label>
          </div>
        </div>


        <div class="card-footer">
              <button type="submit" name="submit" class="btn btn-primary">ส่งคำตอบ</button> 
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

