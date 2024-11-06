<?php
require_once('../database/dbFunc.php');
$s_token = "";

if (isset($_COOKIE['e_token'])) {
    $s_token = $_COOKIE['e_token'];
    $sql = "SELECT * FROM users where token = '$s_token'";
    $check_account = executeResult($sql);
    if ($check_account != null) {
        $sql = "update users set token = '' where token = '$s_token'";
        execute($sql);
        setcookie('e_token', '', time() - 10, '/');
        header("Location: ./../?page=login");
    } else {
        header("Location: ./../?page=");
    }
}