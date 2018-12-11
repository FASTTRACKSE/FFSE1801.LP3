<?php
    session_start();
    unset($_SESSION['danhsach'][$_GET['id']]);
    header("location: ds.php");
?>