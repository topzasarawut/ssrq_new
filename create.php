<?php
        require_once('php/connect.php'); // ดึงไฟล์เชื่อมต่อ Database เข้ามาใช้งาน
        /**
         * ตรวจสอบเงื่อนไขที่ว่า ตัวแปร $_POST['submit'] ได้ถูกกำหนดขึ้นมาหรือไม่
         */

        // echo $_POST['answer_fee39'];
        // echo $_POST['answer_fee40'];
        // echo $_POST['answer_fee41'];
        // echo $_POST['answer_fee42'];
        // echo $_POST['answer_fee43'];
        // echo $_POST['answer_fee44'];
        // echo exit;

        // if(isset($_POST['submit'])){
                /**
                 * สร้างตัวแปร $sql เพื่อเก็บคำสั่ง Sql
                 * จากนั้นให้ใช้คำสั่ง $conn->query($sql) เพื่อที่จะประมาณผลการทำงานของคำสั่ง sql
                 */
                $total1 = $_POST['sum1'];
                $total2 = $_POST['sum2'];
                $total3 = $_POST['sum3'];
                $total4 = $_POST['sum4'];
                $total5 = $_POST['answer_fee39']+
                $_POST['answer_fee40']+
                $_POST['answer_fee41']+
                $_POST['answer_fee42']+
                $_POST['answer_fee43']+
                $_POST['answer_fee44'];

                $total = $total1+$total2+$total3+$total4+$total5;

        //         echo $_POST['answer_fee23']."<br>";
        //         echo $_POST['answer_fee24']."<br>";
        //          echo $_POST["answer_fee25"]."<br>";
        // echo $_POST["answer_fee26"]."<br>";
        // echo $_POST["answer_fee27"]."<br>";
        // echo $_POST["answer_fee28"]."<br>";
        // echo $_POST["answer_fee29"]."<br>";
        // echo $_POST["answer_fee30"]."<br>";
        // echo $_POST["answer_fee31"]."<br>";
        // echo $_POST["answer_fee32"]."<br>";
        // echo $_POST["answer_fee33"]."<br>";
        // echo $_POST["answer_fee34"]."<br>";
        // echo $_POST["answer_fee35"]."<br>";
        // echo $_POST["answer_fee36"]."<br>";
        // echo $_POST["answer_fee37"]."<br>";
        // echo $_POST["answer_fee38"]."<br>";
        // echo $_POST["answer_fee39"]."<br>";
        // echo $_POST["answer_fee40"]."<br>";
        // echo $_POST["answer_fee41"]."<br>";
        // echo $_POST["answer_fee42"]."<br>";
        // echo $_POST["answer_fee43"]."<br>";
        // echo $_POST["answer_fee44"]."<br>";

                // echo $_POST['FullName'];
                // echo $total;
                // echo $total1;
                // echo $total2;
                // echo $total3;
                // echo $total4;
                // echo $total5;
                // echo exit;


                $sql = "INSERT INTO `respon` (`FullName`, `answer_fee39`, `answer_fee40`
                                    , `answer_fee41`, `answer_fee42`, `answer_fee43`, `answer_fee44`
                                    , `total`, `total1`, `total2`, `total3`, `total4`, `total5`) 
                        VALUES ('" . $_POST['FullName'] . "',
                            '" . $_POST['answer_fee39'] . "',
                            '" . $_POST['answer_fee40'] . "',
                            '" . $_POST['answer_fee41'] . "',
                            '" . $_POST['answer_fee42'] . "',
                            '" . $_POST['answer_fee43'] . "',
                            '" . $_POST['answer_fee44'] . "',
                            '" . $total . "',
                            '" . $total1 . "',
                            '" . $total2 . "',
                            '" . $total3 . "',
                            '" . $total4 . "',
                            '" . $total5 . "');";

                        // echo $sql;
                        // echo exit;
                $result = $conn->query($sql);

                
                /**
                 * ตรวจสอบเงื่อนไขที่ว่าการประมวณผลคำสั่งนี่สำเร็จหรือไม่
                 */                
                if($result){
                    echo '<script> alert("ตอบแบบสอบถามสำเร็จ")</script>';
                    header('Refresh:0; url=submit.php?total='.$total.'&total1='.$total1.'&total2='.$total2.'&total3='.$total3.'&total4='.$total4.'&total5='.$total5.'');
                }else{
                    echo 'no';
                }
            // }
    ?>
