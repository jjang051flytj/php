<?php
    require_once "include/db.php";
    $userID = $_POST["userID"];
    $password = $_POST["password"];
    
    $sql =  "select * from members where userid = ? and password = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt,"ss",$userID,$password);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt); 
    $user = mysqli_fetch_assoc($result); //연관배열을 던져준다....
    
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
    //
    if($user) {
        session_start();
        $_SESSION["userID"] = $user["userid"];
        $_SESSION["userName"] = $user["username"];
        echo "<script>alert('{$user["username"]}님 반갑습니다.'); location.href='index.php';</script>";  
    } else {
        echo "<script> location.href='login.php';</script>";  
    }
    //sql injection공격 받을 수 있음 preparestatemen
    //echo "<script> location.href='index.php';</script>";
?>