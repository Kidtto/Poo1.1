<?php
require_once 'administrador.php'
$conexion = mysqli_connect("localhost", "usuario", "contraseña", "basededatos");


$nombreEspecialidad = $_POST['nombre'];


$nombreEspecialidad = mysqli_real_escape_string($conexion, $nombreEspecialidad);


$query = "INSERT INTO especialidades (nombre) VALUES ('$nombreEspecialidad')";

$resultado = mysqli_query($conexion, $query);

if ($resultado) {
    echo "Especialidad creada exitosamente.";
} else {
    echo "Error al crear la especialidad: " . mysqli_error($conexion);
}
?>
