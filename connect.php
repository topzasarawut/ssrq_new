<?php
$host = "localhost";
$user = "root";
$pass = "Sarawut02092530!";
$db = "abc6d";

    $con = mysqli_connect("$host","$user","$pass","$db");
    mysqli_set_charset($con,"utf8");

    // if($con){
    //     echo "Connected!";
    // }
    // else{
    //     echo "Error!";
    // }
?>