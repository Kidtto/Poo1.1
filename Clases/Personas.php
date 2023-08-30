<?php
class Personas  {
    private $conexion;
    protected $nombre;
    protected $documento;
    protected $tipoDocumento;

    public function __construct($nombre, $documento, $tipoDocumento) {
        $this->nombre = $nombre;
        $this->documento = $documento;
        $this->tipoDocumento = $tipoDocumento;
   
    }

   
        public function  registroPersona() {
            $conexion = new conexion();
     
    
            $query = "INSERT INTO Personas (nombre, documento, tipo_documento) VALUES ('$this->nombre', '$this->documento', '$this->tipoDocumento')";

            $resultado = $conexion-> query($query);
    
            if ($resultado > 0) {
                echo "Persona registrada exitosamente.";
            } else {
                echo "Error al registrar la persona: " . mysqli_error($this->conexion);
            }
        }
    

        public function ingreso($correo, $contraseña) {
            $conexion = new conexion();
     
        
            $query = "SELECT * FROM usuarios WHERE correo = '$correo' AND contraseña = '$contraseña'";
            $resultado =  $conexion-> query($query);
        
            if ($resultado  > 0) {
                echo "Inicio de sesión exitoso.";
            } else {
                echo "Error al iniciar sesión. Verifique sus credenciales.";
            }
        }
        

        public function verSedes() {
            $conexion = new conexion();
            $query = "SELECT * FROM sedes";
            $resultado = $this->conexion->query($query);
    
            if ($resultado && $resultado->rowCount() > 0) {
                echo '<h2>Sedes</h2>';
                echo '<ul>';
                while ($fila = $resultado->fetch(PDO::FETCH_ASSOC)) {
                    echo '<li>Nombre: ' . $fila['nombre'] . ' - Dirección: ' . $fila['direccion'] . '</li>';
                }
                echo '</ul>';
            } else {
                echo 'No se encontraron sedes.';
            }
        }


    public function verCitas() {
        
    }

    public function agendarCita($tipoCita, $fecha, $personaServicio) {
        $conexion = new Conexion();

      

        $query = "INSERT INTO citas (tipo_cita, fecha, persona_servicio) VALUES ('$tipoCita', '$fecha', '$personaServicio')";
        $resultado =  $conexion-> query($query);

        if ($resultado) {
            echo "Cita agendada exitosamente.";
        } else {
            echo "Error al agendar la cita: " ;
        }
    }
}
