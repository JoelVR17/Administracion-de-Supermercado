<?php 
    function conexion () {
        // Aqui se usa MySQL en vez de phpMyAdmin entonces debe ponerse la contraseña de MySQL Workbench
        return $conexion = mysqli_connect("localhost","root","mantoara2310","proyecto_web");
    }


?>