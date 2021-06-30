<?php
// echo $_GET['total'];
// echo exit;

$total = $_GET['total'];
$total1 = $_GET['total1'];
$total2 = $_GET['total2'];
$total3 = $_GET['total3'];
$total4 = $_GET['total4'];
$total5 = $_GET['total5'];


$percent1 = $total1*100/44;
$percent2 = $total2*100/48;
$percent3 = $total3*100/32;
$percent4 = $total4*100/32;
$percent5 = $total5*100/24;
// echo $percent4;
// exit;

// $sum

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
    <style>body{font-family: 'Prompt', sans-serif;}</style>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
</head>
<body>
    <!-- Section Navbar -->
    <?php include_once('includes/navbar.php') ?>

    <!-- Section carousel -->
    <section id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="pic/ssrq.png" alt="First slide">
            </div>
            <!-- <div class="carousel-item">
                <img class="d-block w-100" src="https://images.unsplash.com/photo-1567057419565-4349c49d8a04?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1350&h=500&q=80" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://images.unsplash.com/photo-1542810634-71277d95dcbb?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1350&h=500&q=80" alt="Third slide">
            </div> -->
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </section>
    <!-- conten -->                    
    <section class="jumbotron">
        <div class="container text-center">
            <h4 class="display-5">ผลการรู้จักตนเองเชิงสถานการณ์</h4>
            <!-- <p class="lead"><a class="nav-link" href="#">รายละเอียดเพิ่มเติม อ. ณภัทร ใจเอ็นดู<span class="sr-only">(current)</span></a></p> -->
            <!-- row 1-->
            <div class="row">                
                <div class="col-sm-6">
                    <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"></h4>
                        <h4 align = 'center'>คุณเป็นคน  
                            <?php 
                                if($total>=160){
                                    echo "มีการรู้จักตนเองในระดับดีมาก";
                                }elseif($total>=145){
                                    echo "มีการรู้จักตนเองในระดับดี";
                                }elseif($total>=132){
                                    echo "มีการรู้จักตนเองในระดับปานกลาง";
                                }elseif($total>=116){
                                    echo "มีการรู้จักตนเองในระดับน้อย";
                                }else{
                                    echo "มีการรู้จักตนเองในระดับน้อยมาก";
                                }
                            
                            ?>
                        </h4>
                        <br>
                        <h5>ผลตัวชี้วัด 5 ด้านคะแนนรวมได้ <?php echo $total; ?> คะแนน</h5>
                        <!-- <h6 align = 'left'>ผลตัวชี้วัดที่ 1 ด้านการรับรู้ความสามารถของตนเอง <?php echo $total1; ?> คะแนน</h6>
                        <h6 align = 'left'>ผลตัวชี้วัดที่ 2 ด้านความเชื่อมั่นในตนเอง <?php echo $total2; ?> คะแนน</h6>
                        <h6 align = 'left'>ผลตัวชี้วัดที่ 3 ด้านต้นทุนชีวิต <?php echo $total3; ?> คะแนน</h6>
                        <h6 align = 'left'>ผลตัวชี้วัดที่ 4 ด้านการตั้งเป้าหมาย <?php echo $total4; ?> คะแนน</h6>
                        <h6 align = 'left'>ผลตัวชี้วัดที่ 5 ด้านการแก้ปัญหา <?php echo $total5; ?> คะแนน</h6> -->
                        <p>โดยมีพิสัยของคะแนนรวมอยู่ระหว่าง  44 - 176  คะแนน  สำหรับการแปลผลคะแนนรวมใช้วิธีอิงเกณฑ์ ดังนี้ </p>
                        <h6 align = 'left'>มากกว่า  160	คะแนน  หมายถึง  มีการรู้จักตนเองในระดับดีมาก</h6>
                        <h6 align = 'left'>145 – 159	คะแนน  หมายถึง  มีการรู้จักตนเองในระดับดี</h6>
                        <h6 align = 'left'>132 – 144	คะแนน  หมายถึง  มีการรู้จักตนเองในระดับปานกลาง</h6>
                        <h6 align = 'left'>116 – 131	คะแนน  หมายถึง  มีการรู้จักตนเองในระดับน้อย</h6>
                        <h6 align = 'left'>น้อยกว่า 116	คะแนน  หมายถึง  มีการรู้จักตนเองในระดับน้อยมาก </h6>
                            <!-- <p>
                            มากกว่า  160	คะแนน  หมายถึง  มีการรู้จักตนเองในระดับดีมาก
                                    145 – 159	คะแนน  หมายถึง  มีการรู้จักตนเองในระดับดี
                                    132 – 144	คะแนน  หมายถึง  มีการรู้จักตนเองในระดับปานกลาง
                                    116 – 131	คะแนน  หมายถึง  มีการรู้จักตนเองในระดับน้อย
                                    น้อยกว่า 116	คะแนน  หมายถึง  มีการรู้จักตนเองในระดับน้อยมาก 

                            </p>  -->
                    </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="card">
                    <div class="card-body">

                                <!-- myChart2 -->
                                <canvas id="myChart2" width="500" height="400"></canvas>

                            <div>
                                
                            </div>
                            </form>
                    </div>
                    </div>
                </div>
            </div>
            <br>

            <!-- <script src="node_modules/script.js"></script> -->
            <script>
                let labels2 = ['ด้านการรับรู้ความสามารถของตนเอง', 'ด้านความเชื่อมั่นในตนเอง', 'ด้านต้นทุนชีวิต', 'ด้านการตั้งเป้าหมาย', 'ด้านการแก้ปัญหา'];
                // let data2 = [199.6, 130.3, 126.3, 530];
                // let data2 = [<?php echo $total1; ?>, <?php echo $total2; ?>, <?php echo $total3; ?>, <?php echo $total4; ?>, <?php echo $total5; ?>];
                let data2 = [<?php echo $percent1; ?>, <?php echo $percent2; ?>, <?php echo $percent3; ?>, <?php echo $percent4; ?>, <?php echo $percent5; ?>];
                
                let colors2 = ['#49A9EA', '#36CAAB', '#34495E', '#B370CF'];

                let myChart2 = document.getElementById("myChart2").getContext('2d');

                let chart2 = new Chart(myChart2, {
                    type: 'bar',
                    data: {
                        labels: labels2,
                        datasets: [ {
                            data: data2,
                            backgroundColor: colors2
                        }]
                    },
                    options: {
                        title: {
                            text: "กราฟ ผลการรู้จักตนเองเชิงสถานการณ์ (เปอร์เซ็นต์)",
                            display: true
                        },
                        legend: {
                        display: false
                        }
                    }
                });
            </script>


            

            <script>
            function showHint(str) {
            if (str.length == 0) {
                document.getElementById("txtHint").innerHTML = "";
                return;
            } else {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("txtHint").innerHTML = this.responseText;
                }
                };
                xmlhttp.open("GET", "sub_district.php?d=" + str, true);
                xmlhttp.send();
            }
            }
            </script>

        <script>
            function villageShow(str) {
            if (str.length == 0) {
                document.getElementById("txt").innerHTML = "";
                return;
            } else {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("txt").innerHTML = this.responseText;
                }
                };
                xmlhttp.open("GET", "village.php?v=" + str, true);
                xmlhttp.send();
            }
            }
            </script>

           
    </section>
    <?php 
        include('includes/footer.php');
    ?>
    
    <!-- ติดตั้งการใช้งาน Javascript ต่างๆ -->
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>
