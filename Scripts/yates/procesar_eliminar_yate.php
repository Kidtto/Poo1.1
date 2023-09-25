<?php

require_once 'Yate.php';


$conexion = mysqli_connect("localhost", "usuario", "contraseña", "basededatos");


$idYate = $_POST['id_yate'];


$yate = new Yate($conexion);

$yate->eliminarYate($idYate);
?>
