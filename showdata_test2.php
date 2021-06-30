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
        //  exit;

        $sum1 = $_POST["answer_fee1"] + $_POST["answer_fee2"] + $_POST["answer_fee3"]
               + $_POST["answer_fee4"] + $_POST["answer_fee5"] 
               + $_POST["answer_fee6"] + $_POST["answer_fee7"] + $_POST["answer_fee8"] 
               + $_POST["answer_fee9"] + $_POST["answer_fee10"];
        // echo $sum1;
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
        background: rgb(230, 231, 138);
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
          <!-- <h5>คำชี้แจง</h5> -->
          <h6>แบบทดสอบการรู้จักตนเองเชิงสถานการณ์ หน้า 2/5 ข้อ11 - ข้อ22</h6>
        </div>

      <form role="form" action="showdata_test3.php" method="post"> 
      <!-- <form role="form" action="create.php" method="post">  -->
      <div class="col-md-9 mx-auto mt-4" id="b1">
        <!-- question1 -->
        <div class="card" id="b1">
        <!-- <div class="form-group">
              <label for="FullName">ชื่อผู้ทดสอบการรู้จักตนเองเชิงสถานการณ์</label>
              <input type="text" disabled class="form-control" name="FullName" id="FullName" placeholder="FullName" value="<?php echo $name ; ?>">
            </div> -->
            <div class="form-group" id="b1">
              <h5>ตัวชี้วัดที่ 2 ด้านความเชื่อมั่นในตนเอง</h5>
              <!-- <label for="FullName">ชื่อผู้ทดสอบการรู้จักตนเองเชิงสถานการณ์</label> -->
              <!-- <input type="text" disabled class="form-control" name="FullName" id="FullName" placeholder="FullName" value="<?php echo $_POST["FullName"]; ?>">
              <input type="text" disabled class="form-control" name="sum1" id="sum1" placeholder="sum1" value="<?php echo $sum1; ?>">
              <input type="text" disabled class="form-control" name="sum2" id="sum2" placeholder="sum2" value="<?php echo $sum2; ?>"> -->
            </div>

        <!-- FullName -->
       <div class="card" id="b1">
          <div class="card-header" id="b1">
          <div class="card-body" id="b1">
            <input type="radio" id="FullName" name="FullName" value="<?php echo $_POST["FullName"]; ?>" required="required" checked>
            <label for="1"><?php echo $_POST["FullName"]; ?></label><br>
          <!-- </div>
        </div> -->

        <!-- sum1 -->
       <!-- <div class="card">
          <div class="card-header">
          <div class="card-body"> -->
            <input type="radio" id="sum1" name="sum1" value="<?php echo $sum1; ?>" required="required" checked>
            <label for="1">ตัวชี้วัดที่1</label><br>
          <!-- </div>
        </div> -->


        <div class="card" id="b1"><h5>ตัวชี้วัดที่ 2 ด้านความเชื่อมั่นในตนเอง</h5></div>
          <!-- question11 -->
          <div class="card" id="b1">
          <div class="card-header">
          ข้อ 11&nbsp;ถ้าเพื่อนบ้านนักเรียนปลูกต้นไม้ไว้ข้างบ้านแล้วต้นไม้ใหญ่ยืนกิ่งไม้เข้ามาในบ้านนักเรียนทำให้บดบังทัศนียภาพและอาจหักโค่นลงมาใส่บ้านนักเรียนได้ในสถานการณ์เช่นนี้นักเรียนจะทำอย่างไร          </div>
          <div class="card-body">
            <input type="radio" id="answer_fee11" name="answer_fee11" value="1" required="required">
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
        <div class="card" id="b1">
          <div class="card-header">
          ข้อ 12&nbsp;อาจารย์ให้จับกลุ่มแสดงละครเวทีในงานวันสุนทรภู่ เพื่อนในกลุ่มให้ช่วยกันแสดงความคิดเห็นเพื่อนในกลุ่มคนหนึ่งเสนอว่าให้แสดงละครเรื่องโรมิโอกับจูเลียต นักเรียนไม่เห็นด้วยในสถานการณ์เช่นนี้นักเรียนจะทำอย่างไร          </div>
          <div class="card-body">
            <input type="radio" id="answer_fee12" name="answer_fee12" value="1" required="required">
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
        <div class="card" id="b1">
          <div class="card-header">
          ข้อ 13&nbsp;โรงเรียนปิดประกาศรับสมัครสอบชิงทุนการศึกษาไปเรียนคอร์สภาษาอังกฤษระยะสั้นที่ประเทศสิงคโปร์เป็นเวลา 1 เดือนปรากฏว่านักเรียนและเพื่อนสนิทสอบได้เป็นตัวแทนโรงเรียนไปเรียนต่างประเทศต่อมาเพื่อนสนิทของนักเรียนไปไม่ได้เพราะป่วยทำให้นักเรียนต้องไปต่างประเทศคนเดียว           </div>
          <div class="card-body">
            <input type="radio" id="answer_fee13" name="answer_fee13" value="1" required="required">
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
        <div class="card" id="b1">
          <div class="card-header">
          ข้อ 14&nbsp;วันพรุ่งนี้ครูให้นักเรียนสำรวจรายชื่อคนที่จะไปเข้าค่ายอาสาพัฒนาและให้ส่งรายชื่อให้ครูในตอนเช้าวันรุ่งขึ้นเพื่อนคนหนึ่งในห้องไม่มาโรงเรียนนักเรียนจะทำอย่างไร          </div>
          <div class="card-body">
            <input type="radio" id="answer_fee14" name="answer_fee14" value="4" required="required">
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
        <div class="card" id="b1">
          <div class="card-header">
          ข้อ 15&nbsp;นักเรียนกำลังทำการบ้านแล้วพ่อใช้ให้ไปรดน้ำต้นไม้นักเรียนจะทำอย่างไร เพราะอะไร          </div>
          <div class="card-body">
            <input type="radio" id="answer_fee15" name="answer_fee15" value="1" required="required">
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
        <div class="card" id="b1">
          <div class="card-header">
          ข้อ 16&nbsp;ขณะนี้มีโรคระบาดโควิท 19 เกิดขึ้นรัฐบาลประกาศให้มีการรักษาระยะห่างทางสังคมและสวมหน้ากากอนามัยป้องกันโรค นักเรียนได้ทำตามนโยบายของรัฐบาลอย่างไร          </div>
          <div class="card-body">
            <input type="radio" id="answer_fee16" name="answer_fee16" value="1" required="required">
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
        <div class="card" id="b1">
          <div class="card-header">
          ข้อ 17&nbsp;นัทมีเพื่อนในห้องมาจีบ แต่นัทไม่ได้ชอบเพื่อนคนนั้น ถ้านักเรียนเป็นนัทบอกเพื่อนที่มาจีบว่าอย่างไร          </div>
          <div class="card-body">
            <input type="radio" id="answer_fee17" name="answer_fee17" value="1" required="required">
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
        <div class="card" id="b1">
          <div class="card-header">
          ข้อ 18&nbsp;อนุพงษ์เป็นสมาชิกชมรมอาสาพัฒนาชนบท ได้ออกไปตั้งค่ายพัฒนาชนบทแห่งหนึ่ง โดยร่วมทำงานกับเพื่อนๆหลายคน ซึ่งต่างก็ยังไม่เคยทำงานร่วมกันมาก่อน ในสถานการณ์เช่นนี้ ถ้านักเรียนเป็นอนุพงษ์จะทำอย่างไร          </div>
          <div class="card-body">
            <input type="radio" id="answer_fee18" name="answer_fee18" value="4" required="required">
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
        <div class="card" id="b1">
          <div class="card-header">
          ข้อ 19&nbsp;ในวิชาแนะแนวครูให้นักเรียนเขียนเรียงความเรื่องอาชีพในฝันของฉัน นักเรียนมีวิธีการเขียนเรียงความอย่างไร          </div>
          <div class="card-body">
            <input type="radio" id="answer_fee19" name="answer_fee19" value="1" required="required">
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
        <div class="card" id="b1">
          <div class="card-header">
          ข้อ 20&nbsp;ในการเลือกหัวหน้าห้องตูมตามได้รับการเสนอชื่อและได้รับเลือกให้เป็นหัวหน้าห้องถ้านักเรียนเป็นตูมตามจะทำอย่างไร          </div>
          <div class="card-body">
            <input type="radio" id="answer_fee20" name="answer_fee20" value="2" required="required">
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
        <div class="card" id="b1">
          <div class="card-header">
          ข้อ 21&nbsp;เมื่อความคิดเห็นไม่ตรงกับผู้อื่นนักเรียนจะปฏิบัติอย่างไร          </div>
          <div class="card-body">
            <input type="radio" id="answer_fee21" name="answer_fee21" value="1" required="required">
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
        <div class="card" id="b1">
          <div class="card-header">
          ข้อ 22&nbsp;พ่อแม่อยากให้นักเรียนเลือกอาชีพเป็นข้าราชการเพราะเป็นอาชีพที่มั่นคงเมื่อเกษียณอายุแล้วจะได้มีเงินเลี้ยงชีพตลอดชีวิตแต่นักเรียนไม่ชอบนักเรียนชอบการค้าขายเมื่อนักเรียนได้เลือกการค้าขายแต่ปรากฏว่าทำไป 2 ธุรกิจแล้วขาดทุนนักเรียนรู้สึกอย่างไร          </div>
          <div class="card-body">
            <input type="radio" id="answer_fee22" name="answer_fee22" value="1" required="required">
            <label for="1">ก.น่าจะเลือกเรียนตามที่พ่อแม่บอกก็ดี </label><br>
            <input type="radio" id="answer_fee22" name="answer_fee22" value="3">
            <label for="2">ข.ไม่เป็นไรค่อยหาอาชีพใหม่ต่อไป </label><br>
            <input type="radio" id="answer_fee22" name="answer_fee22" value="2">
            <label for="3">ค.ท้อแท้เสียใจแต่ค้าขายต่อไปเผื่อมีโอกาสทางธุรกิจอื่น </label><br>
            <input type="radio" id="answer_fee22" name="answer_fee22" value="4">
            <label for="4">ง.ไม่เสียใจเพราะเป็นสิ่งที่เราชอบอย่างน้อยก็ได้ลองทำ </label>
          </div>
        </div>

        <div class="progress">
          <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 40%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">40%</div>
        </div>

        <div class="card-footer">
            <button type="submit" name="submit" class="btn btn-success">หน้าถัดไป 2/5</button> 
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

