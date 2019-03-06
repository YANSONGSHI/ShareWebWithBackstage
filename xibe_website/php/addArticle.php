<?php
require 'common.php';
session_start();
mysql_query("set Names 'UTF8'");

$sql="insert into article(art_title,art_class,content_text,add_time,user_name,content_img) values('".$_REQUEST['atitle']."',
        '".$_REQUEST['aclass']."','".$_REQUEST['ctext']."','".date('Y-m-d H:i:s', time())."','".$_SESSION['usname']."','".$_REQUEST['acimg']."')";
       
$Res=mysql_query($sql);
if (!empty($Res)){
    echo '1';
}else {
    echo '添加文章失败';
}
?>