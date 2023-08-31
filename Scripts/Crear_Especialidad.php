<?php
require_once '../Clases/Conexion.php';
require_once '../Clases/Administrador.php';

$conexion = new conexion();
$conexion->conect();
$nombreEspecialidad = $_POST['nombre'];
$nombreEspecialidad = mysqli_real_escape_string($conexion ->getConexion(), $nombreEspecialidad);
$query = "INSERT INTO especialidades (nombre) VALUES ('$nombreEspecialidad')";
$resultado = $conexion ->query($query);
if ($resultado) {
    echo "Especialidad creada exitosamente.";
} else {
    echo "Error al crear la especialidad: " . mysqli_error($conexion->getConexion());
}
$conexion ->close();
?>
