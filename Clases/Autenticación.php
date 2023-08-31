<?php
class Autenticacion {
    private $conexion;

    public function __construct($conexion) {
        $this->conexion = $conexion;
    }

    public function iniciarSesion($correo, $contraseña) {
       
        $query = "SELECT * FROM usuarios WHERE correo = '$correo' AND contraseña = '$contraseña'";
        $resultado = mysqli_query($this->conexion, $query);

        if ($resultado && mysqli_num_rows($resultado) > 0) {
       
            session_start();
            $_SESSION['correo'] = $correo;
            echo "Inicio de sesión exitoso. ¡Bienvenido!";
        } else {
            echo "Credenciales incorrectas. Intente nuevamente.";
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
