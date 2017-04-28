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

mysql_query("DELETE FROM user WHERE user_id = $id");

if (mysql_errno()){
    die("delete failed");
}else{
    header("Location:../result/adminDeleteSuccess.php");
}