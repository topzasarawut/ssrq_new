<?php

require_once('../php/connect.php'); // ดึงไฟล์เชื่อมต่อ Database เข้ามาใช้งาน
        $sql = "INSERT INTO `respon` (`FullName`, `answer_fee1`, `answer_fee2`, `answer_fee3`, `answer_fee4`, `answer_fee5`
                                    , `answer_fee6`, `answer_fee7`, `answer_fee8`, `answer_fee9`, `answer_fee10`
                                    , `answer_fee11`, `answer_fee12`, `answer_fee13`, `answer_fee14`, `answer_fee15`
                                    , `answer_fee16`, `answer_fee17`, `answer_fee18`, `answer_fee19`, `answer_fee20`
                                    , `answer_fee21`, `answer_fee22`, `answer_fee23`, `answer_fee24`, `answer_fee25`
                                    , `answer_fee26`, `answer_fee27`, `answer_fee28`, `answer_fee29`, `answer_fee30`
                                    , `answer_fee31`, `answer_fee32`, `answer_fee33`, `answer_fee34`, `answer_fee35`
                                    , `answer_fee36`, `answer_fee37`, `answer_fee38`, `answer_fee39`, `answer_fee40`
                                    , `answer_fee41`, `answer_fee42`, `answer_fee43`, `answer_fee44`) 
                    VALUES ('" . $_POST['FullName'] . "', 
                            '" . $_POST['answer_fee1'] . "', 
                            '" . $_POST['answer_fee2'] . "',
                            '" . $_POST['answer_fee3'] . "',
                            '" . $_POST['answer_fee4'] . "',
                            '" . $_POST['answer_fee5'] . "',
                            '" . $_POST['answer_fee6'] . "',
                            '" . $_POST['answer_fee7'] . "',
                            '" . $_POST['answer_fee8'] . "',
                            '" . $_POST['answer_fee9'] . "',
                            '" . $_POST['answer_fee10'] . "',
                            '" . $_POST['answer_fee11'] . "',
                            '" . $_POST['answer_fee12'] . "',
                            '" . $_POST['answer_fee13'] . "',
                            '" . $_POST['answer_fee14'] . "',
                            '" . $_POST['answer_fee15'] . "',
                            '" . $_POST['answer_fee16'] . "',
                            '" . $_POST['answer_fee17'] . "',
                            '" . $_POST['answer_fee18'] . "',
                            '" . $_POST['answer_fee19'] . "',
                            '" . $_POST['answer_fee20'] . "',
                            '" . $_POST['answer_fee21'] . "',
                            '" . $_POST['answer_fee22'] . "',
                            '" . $_POST['answer_fee23'] . "',
                            '" . $_POST['answer_fee24'] . "',
                            '" . $_POST['answer_fee25'] . "',
                            '" . $_POST['answer_fee26'] . "',
                            '" . $_POST['answer_fee27'] . "',
                            '" . $_POST['answer_fee28'] . "',
                            '" . $_POST['answer_fee29'] . "',
                            '" . $_POST['answer_fee30'] . "',
                            '" . $_POST['answer_fee31'] . "',
                            '" . $_POST['answer_fee32'] . "',
                            '" . $_POST['answer_fee33'] . "',
                            '" . $_POST['answer_fee34'] . "',
                            '" . $_POST['answer_fee35'] . "',
                            '" . $_POST['answer_fee36'] . "',
                            '" . $_POST['answer_fee37'] . "',
                            '" . $_POST['answer_fee38'] . "',
                            '" . $_POST['answer_fee39'] . "',
                            '" . $_POST['answer_fee40'] . "',
                            '" . $_POST['answer_fee41'] . "',
                            '" . $_POST['answer_fee42'] . "',
                            '" . $_POST['answer_fee43'] . "',
                            '" . $_POST['answer_fee44'] . "');";
        $result = $conn->query($sql);
        if ($result) {
            echo '<script> alert("Finished Creating!")</script>';
            header('Refresh:0; url=index.php');
        } else {
            echo '<script> alert("Creating Error!")</script>';
            header('Refresh:0; url=index.php');
        }

?>
 