<?php
/**
 * Created by PhpStorm.
 * User: shatong
 * Date: 2017/01/12
 * Time: 9:07
 */
header("Content-type: text/html; charset=utf-8");
require_once '../../util/functions.php';
connectDB();
echo "<script> confirm(\"您确定要删除吗?\")</script>";
mysql_query("DELETE FROM monitor");

if (mysql_errno()) {
    echo "<script> alert(\"删除失败！\")</script>";
    $url = "allproducts.php";
    echo "<script language=\"javascript\">";
    echo "location.href=\"$url\"";
    echo "</script>";
} else {
    echo "<script> alert(\"删除成功！\")</script>";
    $url = "allproducts.php";
    echo "<script language=\"javascript\">";
    echo "location.href=\"$url\"";
    echo "</script>";
}