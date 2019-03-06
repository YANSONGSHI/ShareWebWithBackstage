<?php
require 'common.php';
session_start();
if (isset($_SESSION['usname'])){
    unset($_SESSION['usname']);
    session_destroy();
    echo "
        <script language = 'javascript'>
            window.location.href = '../login.html';
            </script>
        ";
}



?>