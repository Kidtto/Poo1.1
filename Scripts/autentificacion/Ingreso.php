<?php
include 'conexion.php'; 
if (isset($_POST['correo']) && isset($_POST['contraseña'])) {
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];

    
    $persona = new Persona($nombre, $documento, $tipoDocumento);

    
    $persona->ingreso($correo, $contraseña);
} else {
    echo "Error: Datos de inicio de sesión no proporcionados.";
}
?>
