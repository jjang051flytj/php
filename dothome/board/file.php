<?php
    require_once "../include/header.php";
?>
    <h2 class="my-5">글쓰기</h2>
    <form action="file-process.php" method="post" enctype="multipart/form-data">
        <div class="row mb-3">
            <label for="uploadFile" class="col-sm-2 col-form-label">File</label>
            <div class="col-sm-10">
                <input type="file" class="form-control" id="uploadFile" name="uploadFile"></input>
            </div>
        </div>
        
        <div class="my-5 text-center">
            <button class="btn btn-primary">CONFIRM</button>
            <a href="list.php" class="btn btn-primary">LIST</a>
        </div>
    </form>
<?php
    require_once "../include/footer.php";
?>
