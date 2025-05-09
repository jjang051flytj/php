<?php
    session_start();
    //php는 전부 함수....
    $userName="";
    if(isset($_SESSION["userName"])){
        $userName = $_SESSION["userName"];
    } 
    $userID="";
    if(isset($_SESSION["userID"])){
        $userID = $_SESSION["userID"];
    } 
    $profile="user.png";
    if(isset($_SESSION["profile"])){
        $profile = 
        $_SESSION["profile"];
    } 
?>