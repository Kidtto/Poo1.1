<?php
// Incluir la clase Autenticacion
require_once 'Autenticacion.php';


$conexion = mysqli_connect("localhost", "usuario", "contraseña", "basededatos");


$correo = $_POST['email'];
$contraseña = $_POST['password'];

// Crear una instancia de la clase Autenticacion
$autenticacion = new Autenticacion($conexion);

// Llamar al método iniciarSesion()
$autenticacion->iniciarSesion($correo, $contraseña);
cho "<script>window.location.href = 'Inicio_users.html';</script>";
?>