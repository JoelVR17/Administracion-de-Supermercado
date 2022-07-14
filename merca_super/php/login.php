<?php 

    session_start();
    require_once "conexion.php";
    $conexion = conexion();

    $username = $_POST['username'];
    $passwd = sha1($_POST['passwd']);

    $sql = "SELECT * FROM usuarios WHERE usuario = '$username' AND passwd = '$passwd'";

    $result = mysqli_query($conexion, $sql);

    if (mysqli_num_rows($result) > 0) {
        $_SESSION['user']= $username;
        echo 1;
    }

    else {
        echo 0;
    }

?>