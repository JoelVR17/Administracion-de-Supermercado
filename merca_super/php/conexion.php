<?php 
    function conexion () {
        // Aqui se usa MySQL en vez de phpMyAdmin entonces debe ponerse la contraseña de MySQL Workbench
        return $conexion = mysqli_connect("localhost","root","JoelVR17/*/","super_merca");
    }

?>