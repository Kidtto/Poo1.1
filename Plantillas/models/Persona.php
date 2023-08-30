<?php
class Persona {
    protected $Document;
    protected $Name;
    protected $doc_tipe;

    public function __construct($Document, $Name, $doc_tipe) {
        $this->Document = $Document;
        $this->Name = $Name;
        $this->doc_tipe = $doc_tipe;
    }

    public function getDocument() {
        return $this->Document;
    }

    public function getName() {
        return $this->Name;
    }

    public function getdoctype() {
        return $this->doc_tipe;
    }

    public function setDocument($Docu) {
        $this->Document = $Docu;
    }

    public function setName($NA) {
        $this->Name = $NA;
    }

    public function setdocty($typ) {
        $this->doc_tipe = $typ;
    }

    public function Registro($Nombre, $Correo, $Contraseña) {
        $conexion = new mysqli('localhost', 'Nombre_db', 'Correo', 'contraseña_db');

        if ($conexion->connect_error) {
            die("Error en la conexión: " . $conexion->connect_error);
        }

        $hashedpw = password_hash($Contraseña, PASSWORD_DEFAULT);
        $consulta = "INSERT INTO usuarios(Nombre, Correo, Contraseña) VALUES ('$Nombre', '$Correo', '$hashedpw')";

        if ($conexion->query($consulta) === TRUE) {
            echo "Has sido registrado con éxito";
        } else {
            echo "Ha ocurrido un error al momento de realizar el registro: " . $conexion->error;
        }
        
        $conexion->close();
    }

    public function Ingreso($Correo, $contraseña) {
        
        global $Usuarios;

        foreach ($Usuarios as $userData) {
            if ($userData['Correo'] === $Correo && password_verify($contraseña, $userData['Contraseña'])) {
                return $userData['rol'];
            }
        }
        
        return false;
    }

    public function Ver_sedes() {
        $Ver_Sedes = array('Inicio', 'Catalogo', 'Citas', 'Sedes');

        if (in_array('Sedes', $Ver_Sedes)) {
            header("Location: inicio.html");
            exit();
        } else {
            echo "Vista no encontrada";
        }
    }

    public function Ver_citas() {
        $Ver_citas = array('Inicio', 'Catalogo', 'Citas', 'Sedes');

        if (in_array('Citas', $Ver_citas)) {
            header("Location: inicio.html");
            exit();
        } else {
            echo "Vista no encontrada";
        }
    }

    public function Agendar_cita($Nombre, $Correo, $Fecha, $Hora, $Servicio) {
        $conexion = new mysqli('localhost', 'usuario_db', 'contrasena_db', 'nombre_db');

        if ($conexion->connect_error) {
            die("Error en la conexión: " . $conexion->connect_error);
        }

        $consulta = "INSERT INTO citas(Nombre, Correo, Fecha, Hora, Servicio) VALUES ('$Nombre', '$Correo', '$Fecha', '$Hora', '$Servicio')";
        
        if ($conexion->query($consulta) === TRUE) {
            echo "Cita Agendada";
        } else {
            echo "No se pudo agendar cita: " . $conexion->error;
        }
        
        $conexion->close();
    }
}
?>
