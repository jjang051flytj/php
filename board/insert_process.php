<?php
    $name = $_POST["name"];
    $subject = $_POST["subject"];
    $password = $_POST["password"];
    $content = $_POST["content"];
    $regdate = date("Y-m-d H:i");


    /*
    echo "$name"."<br>";
    echo "$password"."<br>";
    echo "$subject"."<br>";
    echo "$content"."<br>";
    */

    

    
    $servername = "localhost";
    $username = "jjang051";
    $password = "1234";
    $db = "sample02";
    $conn = mysqli_connect($servername,$username,$password,$db);
    mysqli_begin_transaction($conn);
    if(!$conn) {
        die("연결오류 : ".mysqli_connect_error());
    }
    $sql = "insert into board values (null,'$name','$subject','$password','$content','$regdate')";
    
    $result = mysqli_query($conn,$sql);
    mysqli_commit($conn);
    if($result) {
        echo "insert 성공";
    } else {
        echo "insert 실패";
    }
    mysqli_close($conn);
    //echo "연결 성공";
?>