<?php
include_once "../../Clases/conexion.php";

class Autenticacion {

    public function iniciarSesion($correo, $contraseña) {
        $conexion = new conexion();
        $conexion->conect();
        $sql = "SELECT * FROM users WHERE email = '$correo' AND password = '$contraseña'";
        $resultado = $conexion->query($sql);
        if ($resultado != null) {
            $conexion->close();
            while ($fila = $resultado->fetch_assoc()) {
                $user[] = $fila;
            }
            return $user[0];
        }else{
            echo("Error  ");
        }
    }
    public function estaAutenticado() {
        return isset($_SESSION['correo']);
    }
    public function cerrarSesion() {
        session_destroy();
        echo "Sesión cerrada.";
    }
    
}
?>
