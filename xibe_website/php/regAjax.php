<?php
require 'common.php';

//     _print($_REQUEST);
mysql_query("set Names 'UTF8'");
if (!empty($_REQUEST['name'])&&!empty($_REQUEST['pwd'])){
    //判断数据库中用户名是否为空
    $Res=mysql_query("select * from user_login where user_name='".$_REQUEST['name']."'");
    $userInfo=@mysql_fetch_assoc($Res);
    if (empty($userInfo)){
        //用户信息为空，插入数据到表中
        $pwd=md5($_REQUEST['pwd']);
        $sql="insert into user_login(user_name,password,add_time) values('".$_REQUEST['name']."','".$pwd."','".time()."')";
        $Res=mysql_query($sql);
        if (!empty($Res)){
            echo '1';
        }else {
            echo '创建失败';
        }
    }else {
        //用户已存在则弹出提示框
        echo '该用户已经存在';
    }
}

?>