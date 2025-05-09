<?php
    require_once "../include/db.php";
    $userID = $_POST["userID"];
    $password = $_POST["password"]; //입력받은 암호
    
    $sql =  "select * from members where userid = ?";  //1234
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt,"s",$userID);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt); 
    $user = mysqli_fetch_assoc($result); //연관배열을 던져준다....
    
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
    //
    if($user) {
        if(password_verify($password,$user["password"])) {
            session_start();
            $_SESSION["userID"] = $user["userID"];
            $_SESSION["userName"] = $user["userName"];
            $_SESSION["profile"] = $user["renameProfile"];
            echo "<script>location.href='../index/index.php';</script>";  
        } else {
            echo "<script> location.href='../member/login.php';</script>";      
        }
        
    } else {
        echo "<script> location.href='../memeber/login.php';</script>";  
    }
    //sql injection공격 받을 수 있음 preparestatemen
    //echo "<script> location.href='index.php';</script>";
?>