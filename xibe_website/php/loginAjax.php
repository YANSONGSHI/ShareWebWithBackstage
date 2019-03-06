<?php
require 'common.php';

mysql_query("set Names 'UTF8'");
session_start();
// header("Content-type: text/html; charset=utf-8");

if(!empty($_REQUEST['name']) && !empty($_REQUEST['pwd']))
{
    $info = mysql_query("select * from user_login where user_name = '".$_REQUEST['name']."' and password = '".md5($_REQUEST['pwd'])."'");
    $userInfo =@mysql_fetch_assoc($info);
    if(empty($userInfo)){
        echo '该用户不存在';
    }else{
        $_SESSION['usname'] = $userInfo['user_name'];
//         if(!empty($userInfo['user_name']))
//         {
//             $_SESSION['uidImg']=$userInfo['user_name'];
//         }
        echo '1';
    }
}

?>