<?php


// var in container
$email = getPOST('email');
$password = getPOST('password');

// // handle login
if ($email != '' && $password != '') {
    $passwordHash = getPwdSecurity($password);
    $sqlCheckAccount = "SELECT * FROM users WHERE email = '$email' && password = '$password'";
    $checkAccount = executeResult($sqlCheckAccount);
    if ($checkAccount) {
        $user = $checkAccount[0]['id'];
        $token = getPwdSecurity($email . time() . rand(1, 99999));
        setcookie('e_token', $token, time() + 7 * 24 * 60 * 60, '/');
        $sqlCreateToken = "    UPDATE users SET token = '$token' WHERE id = " . $user;

        execute($sqlCreateToken);
        header('Location: ?page=');
        // echo $sqlCreateToken;
    } else {
        echo '<script>
                alert("Tài khoản hoặc mật khẩu không chính xác");
             </script>';
        // echo $sqlCheckAccount;
    }
}


?>
<div class="login-container">
    <!-- <link rel="stylesheet" href="../access/css/login.css"> -->
    <form method="post">
        <h4 class="text-center">ĐĂNG NHẬP</h4>
        <div class="form-group">
            <label for="">Tên đăng nhập:</label>
            <br>
            <input class="btn-block" type="text" name="email">
        </div>
        <div class="form-group">
            <label for="">Mật khẩu:</label>
            <br>
            <input class="btn-block" type="text" name="password">
        </div>
        <br>
        <div class="button"> <button class="btn btn-block">ĐĂNG NHẬP</button>
        </div>
        <br>
        <div class="form-group text-center ">
            <p>Bạn chưa có tài khoản? <a href="?page=register">Đăng ký ngay!</a></p>
        </div>
    </form>
</div>