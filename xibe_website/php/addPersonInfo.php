<?php
require 'common.php';
session_start();
mysql_query("set Names 'UTF8'");

$sql="insert into user_infomation(per_introduce,add_time,user_name) values('".$_REQUEST['perinfo']."',
        '".time()."','".$_SESSION['usname']."')";
 
$Res=mysql_query($sql);
if (!empty($Res)){
    echo '1';
}else {
    echo '用户信息修改失败';
}