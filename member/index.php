<?php
    session_start();
    if(isset($_SESSION["userName"])){
        $userName = $_SESSION["userName"];
    } else{
        $userName = "";
    }
    require_once "include/header.php";


?>
    <!--여기에 내용 들어갑니다 -->
    <h2 class="my-5">Main</h2>
    <p><?=$userName?></p>
    
<?php
    require_once "include/footer.php";
?>
    `