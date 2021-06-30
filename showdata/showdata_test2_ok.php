<?php
    /**
     * เปิดใช้งาน Session
     */
    session_start(); 

        // echo $_POST["FullName"]."<br>";
        // echo $_POST["answer_fee1"]."<br>";
        // echo $_POST["answer_fee2"]."<br>";
        // echo $_POST["answer_fee3"]."<br>";
        // echo $_POST["answer_fee4"]."<br>";
        // echo $_POST["answer_fee5"]."<br>";
        // echo $_POST["answer_fee6"]."<br>";
        // echo $_POST["answer_fee7"]."<br>";
        // echo $_POST["answer_fee8"]."<br>";
        // echo $_POST["answer_fee9"]."<br>";
        // echo $_POST["answer_fee10"]."<br>";
        // echo $_POST["answer_fee11"]."<br>";
        // echo $_POST["answer_fee12"]."<br>";
        // echo $_POST["answer_fee13"]."<br>";
        // echo $_POST["answer_fee14"]."<br>";
        // echo $_POST["answer_fee15"]."<br>";
        // echo $_POST["answer_fee16"]."<br>";
        // echo $_POST["answer_fee17"]."<br>";
        // echo $_POST["answer_fee18"]."<br>";
        // echo $_POST["answer_fee19"]."<br>";
        // echo $_POST["answer_fee20"]."<br>";
        // echo $_POST["answer_fee21"]."<br>";
        // echo $_POST["answer_fee22"]."<br>";
        //  exit;

        $sum1 = $_POST["answer_fee1"] + $_POST["answer_fee2"] + $_POST["answer_fee3"]
               + $_POST["answer_fee4"] + $_POST["answer_fee5"] 
               + $_POST["answer_fee6"] + $_POST["answer_fee7"] + $_POST["answer_fee8"] 
               + $_POST["answer_fee9"] + $_POST["answer_fee10"];
        // echo $sum1;

        $sum2 = $_POST["answer_fee11"] + $_POST["answer_fee12"] + $_POST["answer_fee13"]
               + $_POST["answer_fee14"] + $_POST["answer_fee15"] 
               + $_POST["answer_fee16"] + $_POST["answer_fee17"] + $_POST["answer_fee18"] 
               + $_POST["answer_fee19"] + $_POST["answer_fee20"] + $_POST["answer_fee21"] + $_POST["answer_fee22"];
        // echo $sum2;

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
          <h4 class="card-title d-inline-block">ยินดีต้อนรับ <?php echo $_POST["FullName"];?> </h4>
          <!-- <h5>คำชี้แจง</h5> -->
          <h6>แบบทดสอบการรู้จักตนเองเชิงสถานการณ์ หน้า 2/2 ข้อ23 - ข้อ44</h6>
        </div>

      <!-- <form role="form" action="showdata_test3.php" method="post">  -->
      <form role="form" action="create.php" method="post"> 
      <div class="col-md-9 mx-auto mt-4">
        <!-- question1 -->
        <div class="card">
        <!-- <div class="form-group">
              <label for="FullName">ชื่อผู้ทดสอบการรู้จักตนเองเชิงสถานการณ์</label>
              <input type="text" disabled class="form-control" name="FullName" id="FullName" placeholder="FullName" value="<?php echo $name ; ?>">
            </div> -->
            <div class="form-group">
              <h5>ตัวชี้วัดที่ 2 ด้านความเชื่อมั่นในตนเอง</h5>
              <!-- <label for="FullName">ชื่อผู้ทดสอบการรู้จักตนเองเชิงสถานการณ์</label> -->
              <!-- <input type="text" disabled class="form-control" name="FullName" id="FullName" placeholder="FullName" value="<?php echo $_POST["FullName"]; ?>">
              <input type="text" disabled class="form-control" name="sum1" id="sum1" placeholder="sum1" value="<?php echo $sum1; ?>">
              <input type="text" disabled class="form-control" name="sum2" id="sum2" placeholder="sum2" value="<?php echo $sum2; ?>"> -->
            </div>

        <!-- FullName -->
       <div class="card">
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
            <input type="radio" disable id="sum1" name="sum1" value="<?php echo $sum1; ?>" required="required" checked>
            <label for="1">ตัวชี้วัดที่1</label><br>
          <!-- </div>
        </div> -->

        <!-- sum2 -->
       <!-- <div class="card">
          <div class="card-header">
          <div class="card-body"> -->
            <input type="radio" disable id="sum2" name="sum2" value="<?php echo $sum2; ?>" required="required" checked>
            <label for="1">ตัวชี้วัดที่2</label><br>
          </div>
        </div>

        <br><br>
        <div class="card"><h5>ตัวชี้วัดที่ 3 ด้านต้นทุนชีวิต</h5></div>
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
          ข้อ 29&nbsp;ในวันที่นักเรียนมีเวลาว่างไม่ได้ไปโรงเรียนและไม่ได้ช่วยผู้ปกครองทำงานนักเรียนทำอะไร</div>
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

        <br><br>
        <div class="card"><h5>ตัวชี้วัดที่ 4 ด้านการตั้งเป้าหมาย</h5></div>
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

        <br><br>
        <div class="card"><h5>ตัวชี้วัดที่ 5 ด้านการแก้ปัญหา</h5></div>
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
          ข้อ 44&nbsp;ถ้านักเรียนเคยทำให้พ่อแม่ ผู้ปกครองผิดหวัง จากพฤติกรรมใดๆ ของนักเรียน เช่น พูดโกหก , โดดเรียนไปเล่นเกม ,ติดการพนัน,สอบตก ฯลฯ ถ้าย้อนเวลากลับไปได้นักเรียนจะ...</div>
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
            <button type="submit" name="submit" class="btn btn-primary">ข้อถัดไป</button> 
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

