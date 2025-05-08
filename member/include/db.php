<?php
    $servername = "localhost";
    $username = "jjang051";
    $password = "1234";
    $db = "sample02";
    $conn = mysqli_connect($servername, $username, $password, $db);
    if(!$conn){
        die("연결오류 : ". mysqli_connect_error());
    }   
?>