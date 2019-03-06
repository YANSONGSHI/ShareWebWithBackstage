<?php
@mysql_connect('localhost', 'root', 'root');//数据库地址，用户名和密码为root

if (!mysql_select_db('shared')){
    echo "未连接成功";//执行连接数据库操作，如果连接不成功则显示该信息
}
mysql_query("set names 'utf8'");//设置字符编码
header("Content-type: text/html; charset=utf8"); 
function _print($list){
    echo '<pre>';
    var_dump($list);
    echo '</pre>';
    
}



?>