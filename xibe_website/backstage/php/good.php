<?php

require 'common.php';
$sql="select * from article where id=".$_REQUEST['id'];
$result=mysql_query($sql);
$res=mysql_fetch_assoc($result);
if($res['top']==0)
{
    $updateRes = mysql_query(" update article set top =1  where id = '".$_REQUEST['id']."' ");
}
else {
    $updateRes = mysql_query(" update article set top =0  where id = '".$_REQUEST['id']."' ");
}
header("Location:../com_manage.php");
?>