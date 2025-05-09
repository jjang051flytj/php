<?php
    require_once "../include/session.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.12.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/45.0.0/ckeditor5.css" crossorigin>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/45.0.0/ckeditor5.umd.js" crossorigin></script>




    <link rel="stylesheet" href="../css/layout.css">
</head>
<body>
    <div class="container"> 
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom"> 
            <div class="col-md-3 mb-2 mb-md-0"> 
                <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none"> 
                    <img src="../images/alien.png" alt="" class="logo">
                </a> 
            </div> 
            
            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0"> 
                <li><a href="../board/list.php" class="nav-link px-2">board</a></li> 
            </ul> 
            <?php if(!$userName){ ?>
                <div class="col-md-3 text-end"> 
                    <a href="../member/login.php" class="btn btn-outline-primary me-2">Login</a> 
                    <a href="../member/signup.php" class="btn btn-primary">Sign-up</a> 
                </div> 
            <?php } else { ?>
                <div class="col-md-3 text-end"> 
                    <a href="../member/info.php" class="btn me-2">
                        <img src="../upload/<?=$profile?>" alt="" class="profile">
                    </a> 
                    <a href="../member/logout.php" class="btn btn-primary">Log Out</a> 
                </div> 
            <?php }  ?>
            <!-- 의논해서 info.php 만들어보세요... -->
        </header> 
    </div>

    <div class="container my-5">