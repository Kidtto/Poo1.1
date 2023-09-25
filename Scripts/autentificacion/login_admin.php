<?php

require_once '../Clases/Autenticacion.php';
require_once '../Clases/Administrador.php'; 

$conexion = new conexion();
$conexion->conect();

$correo = $_POST['email'];
$contraseña = $_POST['password'];


$autenticacion = new Autenticacion($conexion);


$autenticacion->iniciarSesion($correo, $contraseña);


if (esAdministrador($correo, $conexion)) {
    echo "<script>window.location.href = 'pagina_principal_administrador.php';</script>";
} else {
    echo "<script>window.location.href = 'pagina_principal_cliente.php';</script>";
}
$conexion -> close()
?>