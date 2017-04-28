<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <style>
        .sbm_btn {
            display: inline-table;
            text-align: center;
            background-color: #1abc9c;
            color: #fff;
            line-height: 35px;
            width: 22%;
            height: 36px;
            border-radius: 8px;
            border: 0;
            padding-left: 8px;
        }

        a {
            text-decoration: none;
        }

        td {
            height: 50px;;
        }

        input {
            border-radius: 8px;
            height: 25px;
        }
    </style>
    <title>编辑用户</title>
</head>
<body background="../images/bg-admin.jpg">
<?php
/**
 * Created by PhpStorm.
 * User: shatong
 * Date: 2017/01/13
 * Time: 16:43
 */

require_once '../util/functions.php';

if (!empty($_GET['id'])) {
    connectDB();
    $id = $_GET['id'];
    $result = mysql_query("SELECT * FROM user WHERE user_id = $id");
    $arr = mysql_fetch_assoc($result);
    $name = $arr['username'];
    $password = $arr['password'];
    $email = $arr['email'];
    $personal = $arr['personalInfo'];
} else {
    die('id not define');
}
?>
<form action="adminedituser_server.php" method="GET" name="formEdit" >
    <table align="center">
        <tr>
            <td height="200px"></td>
        </tr>
        <tr>
            <td height="200" style="color: white"><h1>欢迎您！<?php session_start();
                    echo $_SESSION['adminname'] ?></h1></td>
        </tr>
        <tr>
            <td>
                <table style='border-radius: 3px; width: 500px;color: white;'
                       border="0">

                    <tr>
                        <td colspan="2" align="center"><h2>修改用户</h2></td>
                    </tr>
                    <tr>
                        <td align="right" width="220px">ID:</td>
                        <td><input type="text" name="id" value="<?php echo $id ?>" readonly>
                            <a style="color: red">*</a></td>
                    </tr>
                    <tr>
                        <td align="right">帐号:</td>
                        <td><input type="text" name="username" value="<?php echo $name ?>"></td>
                    </tr>
                    <tr>
                        <td align="right"> 密码:</td>
                        <td><input type="text" name="password" value="<?php echo $password ?>"></td>
                    </tr>
                    <tr>
                        <td align="right"> 邮箱:</td>
                        <td><input type="text" name="email" value="<?php echo $email ?>"></td>
                    </tr>
                    <tr>
                        <td align="right"> 个人介绍:</td>
                        <td><input type="text" name="personal" value="<?php echo $personal ?>"></td>
                    </tr>
                    <tr>
                        <td  colspan="2" align="center">
                            <a href="javascript:document.formEdit.submit();" class="sbm_btn" id="sbm">确定</a>
                            <a href="javascript:history.go(-1)" class="sbm_btn">返回</a>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</form>
</body>
</html>
