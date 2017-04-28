<?php
/**
 * Created by PhpStorm.
 * User: shatong
 * Date: 2017/01/12
 * Time: 10:23
 */

require_once '../util/functions.php';

if (empty($_GET['name'])){
    die('用户名不能为空！');
}
if (empty($_GET['password'])){
    die('密码不能为空！');
}

$name = $_GET['name'];
$password = $_GET['password'];

connectDB();

$result = mysql_query("SELECT * FROM admin WHERE admin = '$name' && password = '$password'");

$result_count = mysql_num_rows($result);

if ($result_count!=0){
    session_start();
    $_SESSION['adminname'] = $name;
    header("Location:../result/adminLoginSuccess.php");
}else{
    die('用户名或密码错误！');
}
