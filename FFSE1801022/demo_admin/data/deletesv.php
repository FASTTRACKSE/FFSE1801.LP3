<?php
    include "data.php";
    if(isset($_POST["code"])){
        $dt->command("DELETE FROM lms_students WHERE code ='".$_POST["code"]."';");
    }
?>