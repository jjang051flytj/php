<?php
    $file = $_FILES["upload"]; //ck-editor에서 넘어오는 file의 name upload로 고정되어 있다.
    if(isset($file)) {
        $fileName = $file["name"];
        $fileTempName = $file["tmp_name"];
        $fileSize = $file["size"];
        $fileError = $file["error"];
        $extention  = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
        $allowedExtention = ["jpg","png","jpeg","gif"];
        if (in_array($extention, $allowedExtention)) {
            $realFileName = pathinfo($file["name"], PATHINFO_FILENAME);
            $renameFileName = uniqid($realFileName."_", false).".".$extention;
            //echo $renameFileName;
            $destination =  "../upload/".$renameFileName;
            if(move_uploaded_file($fileTempName,$destination)){
                $url = $destination;
                echo json_encode(["url" => $url]);
            } else {
                echo json_encode(["error"=>"파일업로드 실패"]);
            }
        }
    }
?>