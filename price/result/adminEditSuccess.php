<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>修改成功</title>

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

    <tr >
        <td height="200" style="color: white"><h1>恭喜您！<?php session_start();
                echo $_SESSION['adminname'] ?> ，修改成功！</h1></td>
    </tr>

    <tr align="center">
        <td >
            <table style='border-radius: 10px; width: 500px; ' bgcolor="#7fffd4">

                <tr>
                    <td align="center" height="60">
                        返回个人中心？</a></td>
                </tr>
                <tr>
                    <td align="center" height="60">
                        <a href="../result/adminLoginSuccess.php"
                           class="sbm_btn"">GO</a></td>
                </tr>
            </table>

        </td>
    </tr>
</table>
</body>
</html>