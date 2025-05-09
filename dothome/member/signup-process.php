<?php
    require_once "../include/db.php";
    $userID = $_POST["userID"];
    $password = $_POST["password"];
    $userName = $_POST["userName"];
    $userEmail = $_POST["userEmail"];
    $file = $_FILES["profile"];
    $realProfile =  $file["name"];

    $regDate = date("Y-m-d H:i:s"); 

    
    $tempFile =  $file["tmp_name"];
    
    $extention  = strtolower(pathinfo($file["name"], PATHINFO_EXTENSION));
    $realFileName = pathinfo($file["name"], PATHINFO_FILENAME);
    $allowedExtention = ["jpg","png","jpeg","gif"];
    if (in_array($extention, $allowedExtention)) {
        $renameFileName = uniqid($realFileName."_", false).".".$extention;
        $destination =  "../upload/".$renameFileName;
        move_uploaded_file($tempFile,$destination);
    }

    
    $hashedPassword =  password_hash($password,PASSWORD_DEFAULT); 
    //$sql =  "insert into members values (null,'$userID','$password','$userName','$userEmail','$regDate',9,0)";
    //mysqli_query($conn, $sql);
    $sql =  "insert into members values (null,?,?,?,?,?,?,'$regDate',9,0)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt,"ssssss",$userID,$userName,$hashedPassword,$userEmail,$realProfile,$renameFileName);
    mysqli_stmt_execute($stmt);
    mysqli_close($conn);
    //sql injection공격 받을 수 있음 preparestatemen
    echo "<script> location.href='../member/login.php';</script>";
?>