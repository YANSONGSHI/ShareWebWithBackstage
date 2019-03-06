<?php
require 'common.php';
session_start();
mysql_query("set Names 'UTF8'");
$sql="insert into infomation(info_title,info_class,content,add_time,admin_name,info_img,info_introduce) 
    values('".$_REQUEST['atitle']."','".$_REQUEST['aclass']."','".$_REQUEST['ctext']."','".time()
    ."','".$_SESSION['adname']."','".$_REQUEST['acimg']."','".$_REQUEST['afront']."')";
       
$Res=mysql_query($sql) or die(mysql_error());
if (!empty($Res)){
    echo '1';
}else {
    echo '添加文章失败';
}
?>