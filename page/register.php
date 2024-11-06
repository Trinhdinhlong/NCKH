<?php
// var global
$today = date('Y-m-d H:i:s');

// var in container
$email = getPOST('email');
$name = getPOST('name');
$password = getPOST('password');

if ($password != '' && $email != '' && $name != '') {
    $sqlCheckUsername = "SELECT * FROM users WHERE email = '$email'";
    $listSqlCheckUsername = executeResult($sqlCheckUsername);
    if ($listSqlCheckUsername) {
        echo "<script>
        alert('Tài khoản đã tồn tại trên hệ thống!')</script>
        ";
    } else {
        $passwordSecurity = getPwdSecurity($password);
        $sqlCreateUser = "INSERT INTO `users` ( `name`, `email`, `password`) VALUES ('$name', '$email', '$password')";
        execute($sqlCreateUser);
        echo "<script>
                alert('Đăng kí thành công! Bạn sẽ được chuyển sang trang đăng nhập')
                window.location.href = '?page=login'
           </script>";
        // echo $sqlCreateUser;
    }
}
?>


<div class="login-container">
    <link rel="stylesheet" href="../access/css/register.css">
    <form method="post">
        <h4 class="text-center">ĐĂNG KÍ TÀI KHOẢN</h4>
        <div class="form-group ">
            <label class="text-left" for="">Tên của bạn:</label>
            <input type="text" class=" btn-block" name="name">
        </div>
        <div class="form-group ">
            <label class="text-left" for="">Mật khẩu:</label>
            <input type="text" class=" btn-block" name="password">
        </div>
        <div class="form-group ">
            <label class="text-left" for="">Email:</label>
            <input type="text" class=" btn-block" name="email">
        </div>
        <div class="button">
            <br>
            <br>

            <button class="btn btn-block">
                ĐĂNG KÝ
            </button>
        </div>
        <br>
        <div class="form-group text-center ">
            <p>Bạn đã có tài khoản? <a href="?page=login">Đăng nhập ngay!</a></p>
        </div>
    </form>
</div>