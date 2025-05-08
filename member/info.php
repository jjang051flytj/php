<?php
    require_once "include/header.php";
    require_once "include/db.php"; //정보를 들고와야 하니까....

    $sql =  "select * from members where userid = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt,"s",$userID);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt); 
    $user = mysqli_fetch_assoc($result); //연관배열을 던져준다....
    
    mysqli_stmt_close($stmt);
    mysqli_close($conn);

?>
    <!--여기에 내용 들어갑니다 -->
    <h2 class="my-5">INFO</h2>
    <table class="table">
        <colgroup>
            <col style="width:20%" >
            <col  >
        </colgroup>
        <tbody>
            <tr>
                <th>User Name</th>
                <td><?=$user["userName"]?></td>
            </tr>
            <tr>
                <th>Email</th>
                <!-- php에서 연관배열로 값 들고올때는 대소문자 구분 -->
                <td><?=$user["userEmail"]?></td>
            </tr>
            <tr>
                <th>Levell</th>
                <td><?=$user["level"]?></td>
            </tr>
            <tr>
                <th>Point</th>
                <td><?=$user["point"]?></td>
            </tr>
        </tbody>
    </table>
    <div class="my-5">
        <a href="delete.php" class="btn btn-primary">회원탈퇴</a>
        <!-- 비밀번호 물어보는거 만들어서 맞으면 탈퇴 -->
    </div>
<?php
    require_once "include/footer.php";
?>
    