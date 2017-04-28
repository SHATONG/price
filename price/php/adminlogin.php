<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <style >
        .error {
            color: #FF0000;
        }
        .sbm_btn {
            display: inline-table;
            text-align: center;
            background-color: #1abc9c;
            color: #fff;
            line-height: 35px;
            width: 18%;
            height: 36px;
            border-radius: 8px;
            border: 0;
            padding-left: 8px;
        }
        a{
            text-decoration: none;
        }
    </style>
    <title>管理员登录</title>
</head>
<body background="../images/bg-admin.jpg">

<?php
    require_once 'register_validate.php';

?>
<table  align="center">
    <form method="get" action="admin_server.php" name="adminLogin">
        <tr>
            <td height="200"></td>
        </tr>
        <tr>
            <td>
                <table align="center" border="0" bgcolor="#boeoe6" style="border-radius: 20px; width: 500px">
                    <tr style="text-align: center">
                        <td colspan="2"><h2>管理员登录</h2></td>
                    </tr>
                    <tr>
                        <td align="right" width="180" height="50">帐号:</td>
                        <td><input type="text" name="name" style="border-radius: 8px;height: 25px;">
                            <span class="error">* <?php echo $nameErr; ?></span></td>
                    </tr>
                    <tr>
                        <td align="right" height="50">密码:</td>
                        <td><input type="password" name="password"  style="border-radius: 8px;height: 25px;">
                            <span class="error">* <?php echo $passwordErr; ?></span></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center" height="70">
                            <a href="javascript:document.adminLogin.submit();"
                               class="sbm_btn">登录</a>
                            <a href="javascript:document.adminLogin.reset();"
                               class="sbm_btn">重置</a>
                            <a href="../index.html"
                               class="sbm_btn">首页</a></td>
                    </tr>
                </table>
            </td>
        </tr>
    </form>
</table>
</body>
</html>