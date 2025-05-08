<?php
    require_once "include/header.php";
?>
    <!--여기에 내용 들어갑니다 -->
    <h2 class="my-5">LOG IN</h2>
    <form action="delete-process.php" method="post">
        <input type="hidden" name="userID" value="<?=$userID?>">
        <div class="row mb-3">
            <label for="password" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input type="password" 
                class="form-control" id="password" 
                name="password">
            </div>
        </div>
        <div class="my-5 text-center">
            <button class="btn btn-primary">CONFIRM</button>
        </div>
    </form>
<?php
    require_once "include/footer.php";
?>
    