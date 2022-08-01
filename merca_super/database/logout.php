<?php
    session_start();
    unset($_SESSION['rol']);
    header("location: ../login.php");
?>