<?php
/**
 * Created by PhpStorm.
 * User: shatong
 * Date: 2017/01/12
 * Time: 10:23
 */

require_once '../util/functions.php';
header("Content-type: text/html; charset=utf-8");



if (empty($_GET['username'])) {
    echo "<script> 
                alert('用户名不能为空哦！');
          </script>";
    header("Location:../index.html");
}
if (empty($_GET['password'])) {
    echo "<script> 
                alert('密码不能为空！');
          </script>";
    header("Location:../index.html");

}

$name = $_GET['username'];
$password = $_GET['password'];

connectDB();

$result = mysql_query("SELECT * FROM user WHERE user_name = '$name' && user_pwd = '$password'");
$arr = mysql_fetch_assoc($result);
$result_count = mysql_num_rows($result);

if ($result_count != 0) {
    session_start();
    $_SESSION['id'] = $arr['user_id'];
    $_SESSION['name'] = $arr['user_name'];
    header("Location:../php/price.php");
} else {
    echo "<script> 
                alert('用户名或密码错误！');
          </script>";
    header("Location:../index.html");
}
//注销登录
if ($_GET['action'] == "logout") {
    unset($_SESSION['id']);
    unset($_SESSION['name']);
    header("Location:../index.html");
}

