<?php
require 'common.php';

if (!empty($_REQUEST['id'])){
    $delRes =mysql_query("delete from user_infomation where id = '".$_REQUEST['id']."'");
}
if(!empty($delRes)){
    if($delRes==1){
    echo "
      <script language='javascript'>
        alert('删除成功');
           window.location.href='../user_manage.php';
    </script>
        ";
    }
}

?>