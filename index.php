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
    <style>body{font-family: 'Prompt', sans-serif;}</style>
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
            <!-- <div class="carousel-item active">
                <img class="d-block w-100" src="https://images.unsplash.com/photo-1560785496-3c9d27877182?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1350&h=500&q=80" alt="First slide">
            </div> -->
            <!-- <div class="carousel-item">
                <img class="d-block w-100" src="https://images.unsplash.com/photo-1567057419565-4349c49d8a04?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1350&h=500&q=80" alt="Second slide">
            </div> -->
            <!-- <div class="carousel-item">
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
            <h4 class="display-5">แบบทดสอบการรู้จักตนเองเชิงสถานการณ์</h4>
            <!-- <p class="lead"><a class="nav-link" href="#">รายละเอียดเพิ่มเติม อ. ณภัทร ใจเอ็นดู<span class="sr-only">(current)</span></a></p> -->
            <!-- row 1-->
            <div class="row">                
                <div class="col-sm-6">
                    <div class="card">
                    <div class="card-body">
                                <!-- กรอกข้อมูล -->
                            <!-- <form action="showdata.php" enctype="multipart/form-data" method="post"> -->
                            <form action="showdata_test.php" enctype="multipart/form-data" method="post">
                            <div>
                                <div class="form-group col-md-12">
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-3 col-form-label">กรอกชื่อ-สกุล</label>
                                        <div class="col-sm-9">
                                           <input type="text" class="form-control" id="name" name="name" required>
                                        </div>
                                    </div>
                                </div>
                                
                                <div id="txtHint"></div>

                                <div class="form-group col-md-12">
                                <!-- <div style="text-align: left;"> -->
                                   <button type="submit" class="btn btn-warning btn-sm">เริ่มทำแบบทดสอบ</button>
                                </div>
                            </div>
                            </form>
                    </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">ตัวชี้วัด 5 ด้าน</h4>
                        <h6 align = 'left'>ตัวชี้วัดที่ 1 ด้านการรับรู้ความสามารถของตนเอง</h6>
                        <h6 align = 'left'>ตัวชี้วัดที่ 2 ด้านความเชื่อมั่นในตนเอง</h6>
                        <h6 align = 'left'>ตัวชี้วัดที่ 3 ด้านต้นทุนชีวิต</h6>
                        <h6 align = 'left'>ตัวชี้วัดที่ 4 ด้านการตั้งเป้าหมาย</h6>
                        <h6 align = 'left'>ตัวชี้วัดที่ 5 ด้านการแก้ปัญหา </h6>
                            <p>
                                
                            </p> 
                    </div>
                    </div>
                </div>
            </div>
            <br>

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
