<?php
    require_once "include/db.php";
    require_once "include/session.php";
    $userID = $_POST["userID"];
    $password = $_POST["password"]; //입력받은 암호
    
    $sql =  "select * from members where userid = ?";  //1234
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt,"s",$userID);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt); 
    $user = mysqli_fetch_assoc($result); //연관배열을 던져준다....
    
    //
    if($user) {
        if(password_verify($password,$user["password"])) {
            $sql = "delete from members where userid = ?";
            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt,"s",$userID);
            $result = mysqli_stmt_execute($stmt);
            if($result) {
                session_unset();
                session_destroy();
                echo "<script>alert('회원탈퇴되었습니다.');location.href='index.php';</script>";  
            } else {
                echo "<script>alert('알 수 없는 오류가 발생하였습니다..'); history.back();</script>";          
            }
        } else {
            echo "<script> location.href='login.php';</script>";      
        }
        
    } else {
        echo "<script> location.href='login.php';</script>";  
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
    //sql injection공격 받을 수 있음 preparestatemen
    //echo "<script> location.href='index.php';</script>";
?>