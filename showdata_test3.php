<?php
    /**
     * เปิดใช้งาน Session
     */
    session_start(); 

        // echo $_POST["FullName"]."<br>";
        // echo $_POST["sum1"]."<br>";
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
        // exit;
     

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
    <!-- <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="learnphp/theme/css/bootstrap-theme.css">
    <link href="https://fonts.googleapis.com/css?family=Prompt&display=swap" rel="stylesheet">
    <style>body,section{font-family: 'Prompt', sans-serif;}</style>
    <style>
      #b1 {
        background: rgb(201, 121, 158);
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
          <h6>แบบทดสอบการรู้จักตนเองเชิงสถานการณ์ หน้า 3/5 ข้อ23 - ข้อ30</h6>
        </div>

      <form role="form" action="showdata_test4.php" method="post"> 
      <div class="col-md-9 mx-auto mt-4 ">
        <!-- question1 -->
        <div id="b1" class="card">
        <!-- <div class="form-group">
              <label for="FullName">ชื่อผู้ทดสอบการรู้จักตนเองเชิงสถานการณ์</label>
              <input type="text" disabled class="form-control" name="FullName" id="FullName" placeholder="FullName" value="<?php echo $name ; ?>">
            </div> -->
             <!-- FullName -->
              <div class="card"id="b1">
                  <div id="b1" class="card-header">
                  <div class="card-body" id="b1">
                    <input type="radio" id="FullName" name="FullName" value="<?php echo $_POST["FullName"]; ?>" required="required" checked>
                    <label for="1"><?php echo $_POST["FullName"]; ?></label><br>
                  <!-- </div>
                </div> -->

                <!-- sum1 -->
              <!-- <div id="b1" class="card">
                  <div class="card-header">
                  <div class="card-body"> -->
                    <input type="radio" id="sum1" name="sum1" value="<?php echo $_POST["sum1"]; ?>" required="required" checked>
                    <label for="1">ตัวชี้วัดที่1</label><br>
                  <!-- </div>
                </div> -->

                <!-- sum2 -->
              <!-- <div class="card bg-main">
                  <div class="card-header">
                  <div class="card-body"> -->
                    <input type="radio" id="sum2" name="sum2" value="<?php echo $sum2; ?>" required="required" checked>
                    <label for="1">ตัวชี้วัดที่2</label><br>
                  </div>
                </div>

          
            <div id="b1" class="form-group">
              <h5>ตัวชี้วัดที่ 3 ด้านต้นทุนชีวิต</h5>
              <!-- <label for="FullName">ชื่อผู้ทดสอบการรู้จักตนเองเชิงสถานการณ์</label>
              <input type="text" class="form-control" name="FullName" id="FullName" placeholder="FullName" value="<?php echo $_POST["FullName"]; ?>"> -->
            </div>


          <!-- question23 -->
          <div id="b1" class="card">
          <div class="card-secondary">
          ข้อ 23&nbsp;มาริสาเป็นนักเรียนชั้นมัธยมศึกษาปีที่ 6 ปีนี้ต้องเตรียมตัวสอบให้พร้อมที่สุดเพื่อจะได้เรียนในคณะที่ตนสนใจถ้านักเรียนเป็นมาริสาจะทำอย่างไร          </div>
          <div class="card-body">
            <input type="radio" id="answer_fee23" name="answer_fee23" value="4" required="required">
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
        <div id="b1" class="card">
          <div class="card-header">
          ข้อ 24&nbsp;ครูสั่งให้การะเกดนำวัสดุอุปกรณ์มาใช้ในการทดลองวิทยาศาสตร์ในชั่วโมงหน้าแต่เมื่อการะเกดสำรวจแล้วยังขาดวัสดุอุปกรณ์บางอย่างถ้านักเรียนเป็นการะเกดจะทำอย่างไร          </div>
          <div class="card-body">
            <input type="radio" id="answer_fee24" name="answer_fee24" value="4" required="required">
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
        <div id="b1" class="card">
          <div class="card-header">
          ข้อ 25&nbsp;ดวงสมรวาดฝันไว้ว่าโตขึ้นจะเป็นสถาปนิกเหมือนอรอนงค์ลูกสาวของป้าไพ  พ่อแม่ของดวงสมรสนับสนุนอย่างเต็มที่เกี่ยวกับการเรียน ดวงสมรจึงตั้งใจเรียนและอ่านหนังสือเมื่อมีเวลาว่าง  ป้าไพแนะนำให้ยืมหนังสือเตรียมสอบและให้อรอนงค์ติวให้ถ้านักเรียนเป็นดวงสมรจะคิดอย่างไร          </div>
          <div class="card-body">
            <input type="radio" id="answer_fee25" name="answer_fee25" value="1" required="required">
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
        <div id="b1" class="card">
          <div class="card-header">
          ข้อ 26&nbsp;ณัฐวุฒิเก่งมากในวิชาภาษาอังกฤษและคณิตศาสตร์ ครูและเพื่อนๆในชั้นเรียนต่างก็ชื่นชมนอกจากเรียนเก่งแล้วณัฐวุฒิยังเป็นนักเรียนที่มีความเสียสละโดยหลังเลิกเรียนทุกวันพุธจะช่วยสอนพิเศษให้เพื่อนๆที่ไม่เข้าใจในบทเรียนถ้านักเรียนเป็นเพื่อนของณัฐวุฒินักเรียนจะคิดอย่า          </div>
          <div class="card-body">
            <input type="radio" id="answer_fee26" name="answer_fee26" value="3" required="required">
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
        <div id="b1" class="card">
          <div class="card-header">
          ข้อ 27&nbsp;ที่หมู่บ้านของโชคชัยมีการจัดกิจกรรมทำความสะอาดบริเวณถนนรอบหมู่บ้านทุกวันพระ โดยมีการประกาศเชิญชวนเสียงตามสายของหอกระจายข่าวประจำหมู่บ้านก่อนล่วงหน้า 1 วันทุกครั้งถ้านักเรียนเป็นโชคชัยนักเรียนจะทำอย่างไร          </div>
          <div class="card-body">
            <input type="radio" id="answer_fee27" name="answer_fee27" value="1" required="required">
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
        <div id="b1" class="card">
          <div class="card-header">
          ข้อ 28&nbsp;ในชั่วโมงว่างของประสิทธิ์ได้สืบค้นข้อมูลเกี่ยวกับการทำโครงงานคุณธรรมเฉลิมพระเกียรติจากอินเทอร์เน็ตแต่ปรากฏว่าหมดเวลาก่อนจึงคิดว่าหลังเลิกเรียนจะนำความรู้เรื่องการทำโครงการคุณธรรมไปแนะนำและชวนเพื่อนทำโครงงานกันถ้านักเรียนเป็นเพื่อนของประสิทธิ์นักเรียนคิดอย          </div>
          <div class="card-body">
            <input type="radio" id="answer_fee28" name="answer_fee28" value="2" required="required">
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
        <div id="b1" class="card">
          <div class="card-header">
          ข้อ 29&nbsp;ในวันที่นักเรียนมีเวลาว่างไม่ได้ไปโรงเรียนและไม่ได้ช่วยผู้ปกครองทำงานนักเรียนทำอะไร          </div>
          <div class="card-body">
            <input type="radio" id="answer_fee29" name="answer_fee29" value="2" required="required">
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
        <div id="b1" class="card">
          <div class="card-header">
          ข้อ 30&nbsp;เรามักได้ยินประโยคที่ว่า “คนเราควรใช้เวลาว่างให้เกิดประโยชน์ในการพัฒนาตนเอง” จากประโยคนี้ถ้านักเรียนจะทำอะไร          </div>
          <div class="card-body">
            <input type="radio" id="answer_fee30" name="answer_fee30" value="1" required="required">
            <label for="1">ก.ฉันรู้ว่าการอ่านหนังสือมีประโยชน์  </label><br>
            <input type="radio" id="answer_fee30" name="answer_fee30" value="2">
            <label for="2">ข.ฉันชอบอ่านหนังสือและรักการอ่าน </label><br>
            <input type="radio" id="answer_fee30" name="answer_fee30" value="3">
            <label for="3">ค.ฉันใช้เวลาว่างร่วมกิจกรรมกับครอบครัวมากกว่าดูทีวี/เล่นโซเซียลมีเดีย </label><br>
            <input type="radio" id="answer_fee30" name="answer_fee30" value="4">
            <label for="4">ง.ฉันอ่านหนังสือทุกวันเมื่อมีเวลา หลังจากช่วยเหลืองานบ้านและทำกิจกรรมร่วมในครอบครัว </label>
          </div>
        </div>

        <div class="progress">
          <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 60%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">60%</div>
        </div>


        <div class="card-footer">
            <button type="submit" name="submit" class="btn btn-success">หน้าถัดไป 3/5</button> 
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

