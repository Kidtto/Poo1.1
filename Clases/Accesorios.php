<?php
class Accesorios {
    private $conexion;
    private $propietario;
    private $precio;
    private $informacion;

    public function getPropietario() {
        return $this->propietario;
    }

    public function setPropietario($propietario) {
        $this->propietario = $propietario;
    }

    public function getPrecio() {
        return $this->precio;
    }

    public function setPrecio($precio) {
        $this->precio = $precio;
    }

    public function getInformacion() {
        return $this->informacion;
    }

    public function setInformacion($informacion) {
        $this->informacion = $informacion;
    }

   
    public function __construct($propietario, $precio, $informacion) {
        $this->propietario = $propietario;
        $this->precio = $precio;
        $this->informacion = $informacion;
    }

    public function AgregarAccesorio($propietario, $precio, $informacion) {
        $conexion = new conexion();
        $propietario = mysqli_real_escape_string($this->conexion, $propietario);
        $precio = floatval($precio);
        $informacion = mysqli_real_escape_string($this->conexion, $informacion);

        $query = "INSERT INTO accesorios (propietario, precio, informacion) VALUES ('$propietario', $precio, '$informacion')";
        $resultado = mysqli_query($this->conexion, $query);

        if ($resultado > 0) {
            echo "Accesorio creado exitosamente.";
        } else {
            echo "Error al crear el accesorio: " . mysqli_error($this->conexion);
        }
    }

    public function verAccesorios() {
        $conexion = new conexion();
        $query = "SELECT * FROM accesorios";
        $resultado = mysqli_query($this->conexion, $query);

        if ($resultado > 0 ) {
            echo '<table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Propietario</th>
                        <th>Precio</th>
                        <th>Información</th>
                      </tr>
                    </thead>
                    <tbody>';
            while ($fila = mysqli_fetch_assoc($resultado)) {
                echo '<tr>
                        <td>' . $fila['id'] . '</td>
                        <td>' . $fila['propietario'] . '</td>
                        <td>' . $fila['precio'] . '</td>
                        <td>' . $fila['informacion'] . '</td>
                      </tr>';
            }
            echo '</tbody>
                  </table>';
        } else {
            echo "Error al obtener los accesorios: " . mysqli_error($this->conexion);
        }
    }

    public function editarAccesorio($id, $propietario, $precio, $informacion) {
        $conexion = new conexion();
        $id = mysqli_real_escape_string($this->conexion, $id);
        $propietario = mysqli_real_escape_string($this->conexion, $propietario);
        $precio = floatval($precio);
        $informacion = mysqli_real_escape_string($this->conexion, $informacion);
       

        $query = "UPDATE accesorios SET propietario='$propietario', precio=$precio, informacion='$informacion' WHERE id=$id";
        $resultado = mysqli_query($this->conexion, $query);

        if ($resultado) {
            echo "Accesorio actualizado exitosamente.";
        } else {
            echo "Error al actualizar el accesorio: " . mysqli_error($this->conexion);
        }
    }

    
    public function eliminarAccesorio($id) {
        $conexion = new conexion();
        $id = mysqli_real_escape_string($this->conexion, $id);
        $query = "DELETE FROM accesorios WHERE id = $id";
        $resultado = mysqli_query($this->conexion, $query);

        if ($resultado) {
            echo "Accesorio eliminado exitosamente.";
        } else {
            echo "Error al eliminar el accesorio: " . mysqli_error($this->conexion);
        }
    }
}




