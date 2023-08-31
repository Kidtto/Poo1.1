<?php

require_once '../Clases/Persona.php';


$nombre = $_POST['username'];
$correo = $_POST['email'];
$contraseña = $_POST['password'];


$persona = new Persona($nombre, $correo, $contraseña);


$persona->registroPersona();

echo "Registro exitoso. ¡Gracias por registrarte!";
?>
