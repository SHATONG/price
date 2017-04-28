<?php
/**
 * Created by PhpStorm.
 * User: shatong
 * Date: 2017/01/12
 * Time: 9:07
 */

if(empty($_GET['id'])){
    die('id is empty');
}

require_once '../util/functions.php';

connectDB();

$id = intval($_GET['id']);

mysql_query("DELETE FROM monitor WHERE id = $id");

if (mysql_errno()){
    die("删除失败！！");
}else{
    echo "<script> alert('删除成功！');</script>";
    header("Location:../php/price.php");
}