<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>用户信息</title>

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


<table width="100%" border="0">

    <tr>
        <td height="200" style="color: white"><h1>欢迎您！<?php session_start();
                echo $_SESSION['name'] ?></h1></td>
    </tr>

    <tr >
        <td >
            <table width="400px" border="0">
                <tr>
                    <td colspan="1"><h2>用户菜单</h2></td>
                </tr>
                <tr>
                    <td  height="60">
                        <a href="../php/userinfo.php"
                           class="sbm_btn"">个人信息</a></td>
                </tr>
                <tr>
                    <td  height="60">
                        <a href="../php/price.php"
                           class="sbm_btn">价格监控</a></td>
                </tr>
                <tr>
                    <td  height="60">
                        <a href="../index.html"
                           class="sbm_btn"">退出系统</a></td>
                </tr>
            </table>

        </td>
    </tr>
</table>
</body>
</html>