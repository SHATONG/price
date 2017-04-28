<?php
/**
 * Created by PhpStorm.
 * User: shatong
 * Date: 2017/01/12
 * Time: 14:28
 */
$name = $_GET['name'];
$password = $_GET['password'];
$email = $_GET['email'];

if (empty($name)) {
    die('用户名不能为空');
}
if (empty($password)) {
    die('密码不能为空');
}
if (empty($email)) {
    die('邮箱不能为空');
}

require_once '../util/functions.php';

connectDB();

mysql_query("INSERT INTO user (user_name,user_pwd,user_email) VALUES ('$name','$password','$email')");
if (mysql_errno()) {
    echo mysql_error();
} else {
    session_start();
    $_SESSION['username'] = $name;
    header("Location:../result/adminLoginSuccess.php");
}