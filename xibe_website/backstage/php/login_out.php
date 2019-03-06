<?php
require 'common.php';
session_start();
if (isset($_SESSION['adname'])){
    unset($_SESSION['adname']);
    session_destroy();
    echo "
        <script language = 'javascript'>
            window.location.href = '../login.html';
            </script>
        ";
}



?>