<?php
    session_start();
    unset($_SESSION['ds'][$_GET['id']]);
    header("location: basket.php");
?>