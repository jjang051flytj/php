<?php
    $file = $_FILES["uploadFile"];
    echo "". $file["name"] ."<br>";
    echo "". $file["tmp_name"] ."<br>";
    echo "". $file["size"] ."<br>";
    echo "". $file["type"] ."<br>";
    echo "". $file["error"] ."<br>";
    $tempFile =  $file["tmp_name"];
    
    $extention  = strtolower(pathinfo($file["name"], PATHINFO_EXTENSION));
    $realFileName = pathinfo($file["name"], PATHINFO_FILENAME);
    echo "확장자 : ". $extention ."<br>";
    echo "파일 이름 : ". $realFileName ."<br>";
    $allowedExtention = ["jpg","png","jpeg","gif"];
    if (in_array($extention, $allowedExtention)) {
        echo $extention." 있음 <br>";
        $renameFileName = uniqid($realFileName."_", false).".".$extention;
        echo $renameFileName;
        $destination =  "../upload/".$renameFileName;
        move_uploaded_file($tempFile,$destination);
    }
?>