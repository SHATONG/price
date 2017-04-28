<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">

    <style>
        .error {
            color: #FF0000;
        }

        .sbm_btn {
            display: inline-table;
            text-align: center;
            background-color: #1abc9c;
            color: #fff;
            line-height: 35px;
            width: 15%;
            height: 36px;
            border-radius: 8px;
            border: 0;
            padding-left: 8px;
        }
        a{
            text-decoration: none;
        }
    </style>
    <title>添加用户</title>
</head>
<body background="../images/bg-admin.jpg">

<?php
require_once 'register_validate.php';

?>
<table align="center">
    <form method="get" action="adduser_server.php" name="formAdduser">
        <tr>
            <td height="200"></td>
        </tr>
        <tr>
            <td>
                <table align="center" border="0" bgcolor="#boeoe6" style="border-radius: 20px; width: 500px">
                    <tr style="text-align: center">
                        <td colspan="2"><h2>添加用户</h2></td>
                    </tr>
                    <tr>
                        <td align="right" width="150" height="40">帐号:</td>
                        <td><input type="text" name="name" style="border-radius: 8px;height: 25px;">
                            <span class="error">* <?php echo $nameErr; ?></span></td>
                    </tr>
                    <tr>
                        <td align="right" height="40">密码:</td>
                        <td><input type="password" name="password" style="border-radius: 8px;height: 25px;">
                            <span class="error">* <?php echo $passwordErr; ?></span></td>
                    </tr>
                    <tr>
                        <td align="right" height="40">邮箱:</td>
                        <td><input type="text" name="email" style="border-radius: 8px;height: 25px;">
                            <span class="error">* <?php echo $emailErr; ?></span></td>
                    </tr>
                    <tr>
                        <td align="right">个人介绍:</td>
                        <td><textarea name="comment" rows="4" cols="30" style="border-radius: 5px;"></textarea></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center" height="7    0">
                            <a href="javascript:document.formAdduser.submit();"
                               class="sbm_btn">添加</a>
                            <a href="javascript:document.formAdduser.reset();"
                               class="sbm_btn">重置</a>
                            <a href='javascript:history.go(-1);' class="sbm_btn">返回</a>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </form>
</table>
</body>
</html>