<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>管理员后台管理</title>

    <style>
        .sbm_btn {
            display: block;
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
    </style>
</head>
<body background="../images/bg-admin.jpg">


<table align="center">

    <tr>
        <td height="200" style="color: white"><h1>欢迎您！<?php session_start();
                echo $_SESSION['adminname'] ?></h1></td>
    </tr>

    <tr align="center">
        <td >
            <table style='border-radius: 10px; width: 500px; ' bgcolor="#7fffd4">
                <tr>
                    <td colspan="4" align="center"><h2>管理员菜单</h2></td>
                </tr>
                <tr>
                    <td align="center" height="60">
                        <a href="../php/adduser.php"
                           class="sbm_btn">添加用户</a></td>
                </tr>
                <tr>
                    <td align="center" height="60">
                        <a href="../php/allusers.php"
                           class="sbm_btn"">所有用户信息</a></td>
                </tr>
                <tr>
                    <td align="center" height="60">
                        <a href="../php/adminlogin.php"
                           class="sbm_btn"">退出系统</a></td>
                </tr>
            </table>

        </td>
    </tr>
</table>
</body>
</html>