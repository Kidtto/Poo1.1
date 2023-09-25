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
    echo "<script>window.location.href = '../administrador/index.php';</script>";
}else {
    die("Credenciales incorrectas. Intente nuevamente.");
}
?>