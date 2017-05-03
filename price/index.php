<?php
require_once 'util/functions.php';
session_start();
$session    = session_id();
$time       = time();
$time_check = $time-300;     //We Have Set Time 5 Minutes
$tbl_name = 'online_users';
connectDB();
$sql   = "SELECT * FROM $tbl_name WHERE session='$session'"; 
$result=mysql_query($sql);
$count = mysql_num_rows($result);
//If count is 0 , then enter the values
if($count=="0"){
    $sql1    = "INSERT INTO $tbl_name(session, time)VALUES('$session', '$time')";
    $result1 = mysql_query($sql1);
}
// else update the values
else {
    $sql2    = "UPDATE $tbl_name SET time='$time' WHERE session = '$session'";
    $result2 = mysql_query($sql2);
}
$sql3 = "SELECT * FROM $tbl_name";
$result3 = mysql_query($sql3);
$count_user_online = mysql_num_rows($result3);
//echo "<h1>当前在线人数 : $count_user_online </h1>";
// after 5 minutes, session will be deleted
$sql4 = "DELETE FROM $tbl_name WHERE time<$time_check";
$result4 = mysql_query($sql4);
$product_num = mysql_num_rows(mysql_query("SELECT * FROM monitor where status = '1'"));
mysql_close();
?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <title>电商价格监控系统</title>
        <link rel="stylesheet" href="css/screen.css" type="text/css" media="screen" title="default"/>
    </head>
    <body id="login-bg">
    <div id="online_users">
        <h1 style="font-size: 15px;color: #fff;"><?php echo '当前在线人数：'.$count_user_online ;?></h1>
</div>
<div id="products">
    <h1 style="font-size: 15px;color: #fff;"><?php echo '当前监控商品：'.$product_num;?></h1>
</div>
<!-- Start: login-holder -->
<div id="login-holder">

    <!-- start logo -->
    <div id="logo-login">
        <h1 style="font-size: 25px;color: #fff;">电商价格监控系统</h1>
    </div>
    <!-- end logo -->

    <div class="clear"></div>

    <!--  start loginbox ................................................................................. -->
    <div id="loginbox">

        <!--  start login-inner -->
        <div id="login-inner">
            <form name="formLogin" action="php/login.php" method="get">
                <table border="0" cellpadding="0" cellspacing="0">
                    <tr>
                        <th>用户名</th>
                        <td colspan="2"><input type="text" class="login-inp" name="username"/></td>
                    </tr>
                    <tr>
                        <th>密 &nbsp;&nbsp;码</th>
                        <td colspan="2"><input type="password" class="login-inp" name="password"/></td>
                    </tr>
                    <tr>
                        <th></th>
                        <td valign="top" colspan="2"><input type="checkbox" class="checkbox-size"
                                                            id="login-check"/><label for="login-check">记住我</label></td>
                    </tr>
                    <tr>
                        <th></th>
                        <td><input type="button" class="submit-login" onclick="document.formLogin.submit();"/></td>
                        <td><a href="php/register.php"><input type="button" class="submit-reg"/></a></td>
                    </tr>
                </table>
            </form>
        </div>
        <!--  end login-inner -->
        <div class="clear"></div>
        <a href="" class="forgot-pwd">忘记密码?</a>
    </div>
    <!--  end loginbox -->
</div>
<!-- End: login-holder -->
</body>
</html>