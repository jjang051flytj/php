<?php
    require_once "include/db.php";
    $userID = $_POST["userID"];
    $password = $_POST["password"];
    $userName = $_POST["userName"];
    $userEmail = $_POST["userEmail"];
    $regDate = date("Y-m-d H:i:s");
    //$sql =  "insert into members values (null,'$userID','$password','$userName','$userEmail','$regDate',9,0)";
    //mysqli_query($conn, $sql);
    $sql =  "insert into members values (null,?,?,?,?,'$regDate',9,0)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt,"ssss",$userID,$userName,$password,$userEmail);
    mysqli_stmt_execute($stmt);
    mysqli_close($conn);
    //sql injection공격 받을 수 있음 preparestatemen
    echo "<script> location.href='login.php';</script>";
?>