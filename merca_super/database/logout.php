<?php
    session_start();
    unset($_SESSION['rol']);
    header("location: ../bienvenida.php");
?>