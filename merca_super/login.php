<?php
    include_once 'database.php';

    session_start();

    if(isset($_GET['cerrar_sesion'])){
        session_unset();
        session_destroy();
    }

    if(isset($_SESSION['rol'])){
        switch($_SESSION['rol']){
            case 1:
                header('location: admin.php');
            break;

            case 2:
                header('location: usuario.php');
            break;

            default:
        }
    }

    /* Esto sirve para validar/autenticar a los usuarios */

    if(isset($_POST['username']) && isset($_POST['passwd'])){
        $username = $_POST['username'];
        $passwd = $_POST['passwd'];

        $db = new Database();
        $query = $db->connect()->prepare('SELECT * FROM usuarios WHERE username = :username AND passwd = :passwd');
        $query->execute(['username' => $username, 'passwd' => $passwd]);

        $row = $query->fetch(PDO::FETCH_NUM);
        if($row == true){
            // validar rol
            $rol = $row[3];
            $_SESSION['rol'] = $rol;

            switch($_SESSION['rol']){
                case 1:
                    header('location: admin.php');
                break;
    
                case 2:
                    header('location: usuario.php');
                break;
    
                default:
            }
        }else{
            // no existe el usuario
            echo "El usuario o contraseña son incorrectos";
        }

    }
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <form action="#" method="POST">
        Username: <br/><input type="text" name="username"><br/><br>
        Password: <br/><input type="text" name="passwd"><br/><br>
        <input type="submit" value="Iniciar sesión">
    </form>
</body>
</html>