<?php
require_once 'Autenticacion.php';

$correo = $_POST['email'];
$contraseña = $_POST['password'];


$autenticacion = new Autenticacion($conexion);


$user = $autenticacion->iniciarSesion($correo, $contraseña);

if (!$user == null) {
    session_start();
    $_SESSION['id'] = $user['id'];
    $_SESSION['id_rols'] = $user['id_rols'];
    if ($user['id_rols'] == 2) {
        echo "<script>window.location.href = '../administrador/index.php';</script>";

    }else{
        echo "<script>window.location.href = '../../Vistas/Users/Inicio_users.php';</script>";
    }
}else {
    die("Credenciales incorrectas. Intente nuevamente.");
}
?>