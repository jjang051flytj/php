<?php
    $servername = "localhost";
    $username = "jjang051flytj";
    $password = "tj5525!!";
    $db = "jjang051flytj";
    $conn = mysqli_connect($servername, $username, $password, $db);
    if(!$conn){
        die("연결오류 : ". mysqli_connect_error());
    }   
?>