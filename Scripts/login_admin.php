<?php

require_once 'Autenticacion.php';
require_once 'Administrador.php'; 
$conexion = mysqli_connect("localhost", "usuario", "contraseña", "basededatos");


$correo = $_POST['email'];
$contraseña = $_POST['password'];


$autenticacion = new Autenticacion($conexion);

// Llamar al método iniciarSesion()
$autenticacion->iniciarSesion($correo, $contraseña);


if (esAdministrador($correo, $conexion)) {
    echo "<script>window.location.href = 'pagina_principal_administrador.php';</script>";
} else {
    echo "<script>window.location.href = 'pagina_principal_cliente.php';</script>";
}
?>