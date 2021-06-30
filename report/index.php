<?php 
        include_once('../php/connect.php');
        // ผู้ที่ตอบแบบทดสอบ
        $sql = "SELECT COUNT(*) AS aa  FROM respon"; 
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $allmember= $row["aa"];

        // echo $allmember;
        // echo $scale1;
        // echo $scale2;
        // echo $scale3;
        // echo $scale4;
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
    <style>body{font-family: 'Prompt', sans-serif;}</style>
     <!-- DataTables -->
  <link rel="stylesheet" href="../node_modules/datatables/dataTables.bootstrap4.min.css">
</head>
<body>
    <!-- Section Navbar --> 
    <?php include_once('../includes/navbar_report.php') ?>

     <!-- conten -->
     <!-- ChartJS -->                    
    <section class="jumbotron">
        <div class="container text-center"> 

        <!-- row 0-->
        <div class="row">        
                <div class="col-sm-12">
                    <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">สรุปรวมผู้ที่ตอบแบบทดสอบ</h5>
                        <P ALIGN="LEFT"><h6>จำนวน&nbsp;<?php echo $allmember; ?>&nbsp;คน</h6></P>
                        <!-- <h6 class="card-title">โดยมีพิสัยของคะแนนรวมอยู่ระหว่าง  44 - 176  คะแนน  สำหรับการแปลผลคะแนนรวมใช้วิธีอิงเกณฑ์ ดังนี้</h6>
                        <P ALIGN="LEFT">1. มากกว่า  160	คะแนน  หมายถึง  มีการรู้จักตนเองในระดับดีมาก จำนวน &nbsp;รอผล &nbsp;คน</P>
                        <P ALIGN="LEFT">2. คะแนน 145 – 159	คะแนน  หมายถึง  มีการรู้จักตนเองในระดับดี จำนวน&nbsp;รอผล &nbsp; คน</P>
                        <P ALIGN="LEFT">3. คะแนน 132 – 144	คะแนน  หมายถึง  มีการรู้จักตนเองในระดับปานกลาง จำนวน&nbsp;รอผล &nbsp; คน</P>
                        <P ALIGN="LEFT">4. คะแนน 116 – 131	คะแนน  หมายถึง  มีการรู้จักตนเองในระดับน้อย จำนวน&nbsp;รอผล &nbsp; คน</P>
                        <P ALIGN="LEFT">5. น้อยกว่า 116 คะแนน  หมายถึง  มีการรู้จักตนเองในระดับน้อยมาก  จำนวน&nbsp;รอผล &nbsp; คน</P> -->
                    </div>
                    </div>
                </div>   
                <div class="col-sm-6">
                    <div class="card">
                    <!-- <img class="d-block w-100" src="../pic/ssrq.png" alt="First slide"> -->
                    <!-- <a href="../index.php">หน้าตอบแบบสอบถาม</a><br>
                    <a href="index.php">หน้ารายงานผล</a>  -->
                    </div>
                </div>            
    <!-- </section> -->
    
    <!-- conten -->                    
    <!-- <section class="jumbotron">
        <div class="container text-center">  -->

            <!-- row 1-->
            <div class="col-sm-12">
            <div class="card">
            <div class="card-body">
                <table id="dataTable" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <!-- <th scope="col">ID</th> -->
                        <th scope="col">ผู้ตอบแบบสอบถาม</th>
                        <th scope="col">ตัวชี้วัดที่ 1</th>
                        <th scope="col">ตัวชี้วัดที่ 2</th>
                        <th scope="col">ตัวชี้วัดที่ 3</th>
                        <th scope="col">ตัวชี้วัดที่ 4</th>
                        <th scope="col">ตัวชี้วัดที่ 5</th>
                        <th scope="col">รวมทุกตัวชี้วัด</th>

                        <th scope="col">การแปลผล</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 

                            $sql = "SELECT * FROM `respon`";
                            $result = $conn->query($sql);

                            $num = 0;
                            while( $row = $result->fetch_assoc() ) { 
                            $num++
                        ?>
                        <tr>
                        <td>
                            <?php echo $num; ?></td>
                            <!-- <td><?php echo $row['ResID']; ?></td> -->
                            <td><?php echo $row['FullName']; ?></td>
                            <td><?php echo $row['total1']; ?></td>
                            <td><?php echo $row['total2']; ?></td> 
                            <td><?php echo $row['total3']; ?></td> 
                            <td><?php echo $row['total4']; ?></td> 
                            <td><?php echo $row['total5']; ?></td> 
                            <td><?php echo $row['total']; ?></td> 
                            <td>
                                <a href="submit.php?ResID=<?php echo $row['ResID']; ?>" class="btn btn-sm btn-warning text-white">
                                <i class="fas fa-edit"></i> ดูการแปลผล 
                                </a> 
                            <!-- <a href="submit.php?id">ดูการแปลผล</a> -->
                            <!-- <button type="submit" name="submit" class="btn btn-primary">ดูการแปลผล</button>  -->
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>                        
                </div>
                </div>
            </div>
            </div>  
             
    </section>
    
    <?php 
        include('../includes/footer.php');
    ?>
    <!-- ติดตั้งการใช้งาน Javascript ต่างๆ -->
    <script src="../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <script>
        $(document).ready(function() {
            showGraph();
        });

        function showGraph(){
            {
                $.post("data_all.php", function(data) {
                    console.log(data);
                    let name = [];
                    let score = [];

                    for (let i in data) {
                        name.push(data[i].status);
                        score.push(data[i].topza);
                    }

                    let chartdata = {
                        labels: ['ระดับ 1', 
                                'ระดับ 2', 
                                'ระดับ 3',
                                'ระดับ 4',
                                'ระดับ 5'],
                        datasets: [{
                                label: 'Student Score',
                                backgroundColor: [
                        '#ff6384',
                        '#36a2eb',
                        '#cc65fe',
                        '#ffce56'
                    ],
                    borderColor: [
                        '#ff6384',
                        '#36a2eb',
                        '#cc65fe',
                        '#ffce56'
                    ],
                                
                                data: score
                        }]
                    };

                    let graphTarget = $('#graphCanvas');
                    let barGraph = new Chart(graphTarget, {
                        type: 'bar',
                        data: chartdata
                    }) 
                })
            }
        }
    </script>

    <script>
  $(function () {
    $('#dataTable').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true
    });
  });

  function deleteItem (id) { 
    if( confirm('Are you sure, you want to delete this item?') == true){
      window.location=`delete.php?id=${id}`;
      //window.location='delete.php?id='+id;
    }
  };

</script>

</body>
</html> 



