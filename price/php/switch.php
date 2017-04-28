<?php
/**
 * Created by PhpStorm.
 * User: shatong
 * Date: 2017/01/12
 * Time: 10:23
 */

require_once '../util/functions.php';
header("Content-type: text/html; charset=utf-8");

if (empty($_GET['id'])) {
    die('商品id有错！');
}
$status = $_GET['status'];
$id = $_GET['id'];
connectDB();
$result = mysql_query("SELECT * FROM monitor WHERE id =$id  ");
$arr = mysql_fetch_assoc($result);
$result_count = mysql_num_rows($result);

if ($result_count != 0) {
        mysql_query("update monitor set status = $status WHERE id =$id  ");
    header("Location:price.php");
} else {
   die('开启监控商品失败,商品ID为'.$id);
}



