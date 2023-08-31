<?php

require_once '../Clases/Autenticacion.php';




$correo = $_POST['email'];
$contraseña = $_POST['password'];


$autenticacion = new Autenticacion($conexion);


$autenticacion->iniciarSesion($correo, $contraseña);
cho "<script>window.location.href = 'Inicio_users.html';</script>";
?>