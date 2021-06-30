<?php
    /**
     * เปิดใช้งาน Session
     */
    session_start(); 

        $idcard = $_POST ["idcard"];
        $chstatus = $_POST ["chstatus"];
        // echo $idcard;
        // echo $chstatus;
        // exit();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>confirmdiploma By Neverdie ๘ Studio</title>
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

        $sql = "UPDATE `bundit` SET status= ".$chstatus." where id_card = ".$idcard."";
        $result = $conn->query($sql);

        $sql = "SELECT * FROM `bundit`where id_card = ".$idcard."";
        $result = $conn->query($sql);

     
        // if(@addslashes($_GET['mat_id'])){ 
        //   echo $_GET['mat_id']; 
        // }
    ?>

<!-- Page Content -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title d-inline-block">ระบบยืนยันการเข้าพระราชทานปริญญาบัตร</h3>          
        </div>

      <!-- /.card-header -->
        <div class="card-body">
          <table id="dataTable" class="table table-bordered table-striped">
            <thead>
            <tr>
              <!-- <th scope="col">ลำดับ</th> -->
              <th scope="col">รหัสบัตรประชาชน</th>
              <th scope="col">รหัสนักศึกษา</th> 
              <th scope="col">ชื่อ-สกุล</th>
              <th scope="col">สาขาวิชา</th>
              <th scope="col">ปริญญา</th>
              <th scope="col">สถานะการเข้าร่วม</th>
            </tr>
            </thead>

            <tbody>
            <!-- <?php 
            $num = 0;
            while ($row = $result->fetch_assoc()) {
              $num++;
              ?> -->

              <tr>
                <!-- <td><?php echo $num; ?></td> -->
                <td><?php echo $row['id_card']; ?></td>
                <td><?php echo $row['id_student']; ?></td> 
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['branch']; ?></td>
                <td><?php echo $row['degree']; ?></td>
                <td>
                <?php 
                  if($row['status']=="1" )
                    echo "1. รายงานตัว-ชำระเงิน-ยืนยันเข้ารับปริญญา";
                  elseif($row['status']=="2" )
                  echo "2. รายงานตัว-ชำระเงิน-แต่ไม่สามารถเข้ารับปริญญา";
                  elseif($row['status']=="3" )
                  echo "3. รายงานตัวแจ้งความประสงค์เข้ารับปริญญา(เพิ่มเติม)";
                  elseif($row['status']=="4" )
                  echo "4. ไม่ประสงค์เข้ารับปริญญา";
                ?>
               
                </td> 

                <!-- <td><?php echo $row['status']; ?></td>  -->
                
              </tr>
            <?php } ?>
            </tbody>
          </table>
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
