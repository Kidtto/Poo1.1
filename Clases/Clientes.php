<?php
require_once 'Personas.php';
class Cliente  extends Personas {
    private $correo;
    private $contraseña;
    private $rol = 1;

    public function __construct($nombre, $documento, $tipoDocumento, $correo, $contraseña) {
        parent::__construct($nombre, $documento, $tipoDocumento);
        $this->correo = $correo;
        $this->contraseña = $contraseña;
    }

    public function comprarYate() {
        
       
    }

    public function ver_Yates() {
        $conexion = new Conexion();
    
        $query = "SELECT propietario, precio, informacion, numero_serie, marca, modelo FROM yates";
        $resultado = $conexion->query($query);
    
        if ($resultado) {
            echo '<h2>Lista de Yates</h2>';
            echo '<table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>Propietario</th>
                        <th>Precio</th>
                        <th>Información</th>
                        <th>Número de Serie</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                      </tr>
                    </thead>
                    <tbody>';
            while ($fila = $resultado) {
                echo '<tr>
                        <td>' . $fila['propietario'] . '</td>
                        <td>' . $fila['precio'] . '</td>
                        <td>' . $fila['informacion'] . '</td>
                        <td>' . $fila['numero_serie'] . '</td>
                        <td>' . $fila['marca'] . '</td>
                        <td>' . $fila['modelo'] . '</td>
                      </tr>';
            }
            echo '</tbody>
                  </table>';
        } else {
            echo "Error al obtener la lista de yates: " ;
        }
    
        $conexion->close();
    }
    
    public function ver_Accesorios() {
        $conexion = new Conexion();
        
        $query = "SELECT propietario, precio, informacion FROM accesorios";
        $resultado = $conexion->query($query);
        
        if ($resultado) {
            echo '<table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Propietario</th>
                        <th>Precio</th>
                        <th>Información</th>
                    </tr>
                </thead>
                <tbody>';
    
            while ($fila = $resultado->fetch(PDO::FETCH_ASSOC)) {
                echo '<tr>
                    <td>' . $fila['propietario'] . '</td>
                    <td>' . $fila['precio'] . '</td>
                    <td>' . $fila['informacion'] . '</td>
                </tr>';
            }
    
            echo '</tbody>
                </table>';
        } else {
            echo "Error al obtener la lista de accesorios.";
        }
    }
    
    public function vehiculosAsignados() {
        // Lógica para ver los vehículos asignados al cliente
        echo "Lista de vehículos asignados.";
    }
}
?>