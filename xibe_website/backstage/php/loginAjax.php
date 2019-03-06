<?php
require 'common.php';

mysql_query("set Names 'UTF8'");
session_start();
// header("Content-type: text/html; charset=utf-8");

if(!empty($_REQUEST['name']) && !empty($_REQUEST['pwd']))
{
    $info = mysql_query("select * from admin_login where admin_name = '".$_REQUEST['name']."' and admin_pwd = '".md5($_REQUEST['pwd'])."'");
    $userInfo =@mysql_fetch_assoc($info);
    if(empty($userInfo)){
        echo '不存在该管理员';
    }else{
        $_SESSION['adname'] = $userInfo['admin_name'];
        echo '1';
    }
}

?>