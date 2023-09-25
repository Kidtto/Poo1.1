<?php
include_once "../../Clases/conexion.php";

class Administrador {
    private $conexion;
    private $correo;
    private $contraseña;
    private $rol = 2;

    public function __construct($correo, $contraseña, $conexion) {
        $this->correo = $correo;
        $this->contraseña = $contraseña;
        $this->conexion = $conexion;
    }
    

    

    public function verUsuariosRegistrados() {
        $conexion = $this->conexion;
        $query = "SELECT * FROM usuarios";
        $resultado = mysqli_query($conexion, $query);
    
        if ($resultado && mysqli_num_rows($resultado) > 0) {
            echo "<h2>Usuarios Registrados</h2>";
            echo "<ul>";
            while ($fila = mysqli_fetch_assoc($resultado)) {
                echo "<li>Correo: " . $fila['correo'] . " - Nombre: " . $fila['nombre'] . "</li>";
            }
            echo "</ul>";
        } else {
            echo "No se encontraron usuarios registrados.";
        }
    }
    

    public function verTipoMantenimiento() {
        $conexion = $this->conexion;
        $query = "SELECT * FROM tipos_mantenimiento";
        $resultado = mysqli_query($conexion, $query);
    
        if ($resultado && mysqli_num_rows($resultado) > 0) {
            echo "<h2>Tipos de Mantenimiento</h2>";
            echo "<ul>";
            while ($fila = mysqli_fetch_assoc($resultado)) {
                echo "<li>ID: " . $fila['id'] . " - Nombre: " . $fila['nombre'] . "</li>";
            }
            echo "</ul>";
        } else {
            echo "No se encontraron tipos de mantenimiento.";
        }
    }
    
    public function verTipoCita() {
        $conexion = new  conexion();
        $query = "SELECT * FROM tipos_mantenimiento";
        $resultado = mysqli_query($this->conexion, $query);

        if ($resultado  > 0) {
            $tiposMantenimiento = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
            return $tiposMantenimiento;
        } else {
            return array(); 
        }
    }


    public function editarTipoCita($id, $nuevoNombre) {
        $conexion = new  conexion();
        $query = "UPDATE tipos_mantenimiento SET nombre = '$nuevoNombre' WHERE id = '$id'";
        $resultado = mysqli_query($this->conexion, $query);

        if ($resultado) {
            echo "Tipo de cita actualizado correctamente.";
        } else {
            echo "Error al actualizar el tipo de cita. Intente nuevamente.";
        }
    }

    public function eliminarTipoCita($id) {
        $query = "DELETE FROM tipos_mantenimiento WHERE id = '$id'";
        $resultado = mysqli_query($this->conexion, $query);

        if ($resultado) {
            echo "Tipo de cita eliminado correctamente.";
        } else {
            echo "Error al eliminar el tipo de cita. Intente nuevamente.";
        }
    }

    public function registrarMecánico($nombre, $documento, $especialidad) {
        $conexion = new  conexion();
        $nombre = mysqli_real_escape_string($this->conexion, $nombre);
        $documento = mysqli_real_escape_string($this->conexion, $documento);
        $especialidad = mysqli_real_escape_string($this->conexion, $especialidad);
    
        $query = "INSERT INTO mecanicos (nombre, documento, especialidad) VALUES ('$nombre', '$documento', '$especialidad')";
    
        $resultado = mysqli_query($this->conexion, $query);
    
        if ($resultado) {
            echo "Mecánico registrado exitosamente.";
        } else {
            echo "Error al registrar el mecánico: " . mysqli_error($this->conexion);
        }
    }

 
        public function verMecanico() {
            $conexion = new  conexion();
            $query = "SELECT id, nombre, documento, especialidad FROM mecanicos";
            $resultado = mysqli_query($this->conexion, $query);
    
            if ($resultado) {
                echo '<table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Documento</th>
                            <th>Especialidad</th>
                        </tr>
                    </thead>
                    <tbody>';
    
                while ($row = mysqli_fetch_assoc($resultado)) {
                    echo '<tr>
                        <td>' . $row['id'] . '</td>
                        <td>' . $row['nombre'] . '</td>
                        <td>' . $row['documento'] . '</td>
                        <td>' . $row['especialidad'] . '</td>
                    </tr>';
                }
    
                echo '</tbody>
                    </table>';
            } else {
                echo "Error al obtener la lista de mecánicos: " . mysqli_error($this->conexion);
            }
        }
    

    
public function editarMecánico($id, $nombre, $documento, $especialidad) {
    
   $conexion = new conexion();
    
            $query = "UPDATE mecanicos SET nombre='$nombre', documento='$documento', especialidad='$especialidad' WHERE id=$id";
    
          
            $resultado = $conexion-> query($query);
    
            if ($resultado >0) {
                echo "Información del mecánico actualizada exitosamente.";
            } else {
                echo "Error al actualizar la información del mecánico: " . mysqli_error($this->conexion);
            }
        }
       

        public function crearEspecialidad($nombreEspecialidad) {
            $conexion = new conexion();


            $nombreEspecialidad = mysqli_real_escape_string($this->conexion, $nombreEspecialidad);
            $query = "INSERT INTO especialidades (nombre) VALUES ('$nombreEspecialidad')";
            $resultado = mysqli_query($this->conexion, $query);
    
            if ($resultado) {
                echo "Especialidad creada exitosamente.";
            } else {
                echo "Error al crear la especialidad: " . mysqli_error($this->conexion);
            }
        }

        public function editarEspecialidad($idEspecialidad, $nuevoNombre) {
           
            $nuevoNombre = mysqli_real_escape_string($this->conexion, $nuevoNombre);

            
            $query = "UPDATE especialidades SET nombre='$nuevoNombre' WHERE id=$idEspecialidad";

            $resultado = mysqli_query($this->conexion, $query);
    
            if ($resultado) {
                echo "Nombre de la especialidad actualizado exitosamente.";
            } else {
                echo "Error al actualizar el nombre de la especialidad: " . mysqli_error($this->conexion);
            }
        }

        public function eliminarEspecialidad($idEspecialidad) {
            $conexion = new conexion();
        
            $query = "DELETE FROM especialidades WHERE id=$idEspecialidad";
 
            $resultado = mysqli_query($this->conexion, $query);
    
            if ($resultado) {
                echo "Especialidad eliminada exitosamente.";
            } else {
                echo "Error al eliminar la especialidad: " . mysqli_error($this->conexion);
            }
        }

        public function verEspecialidades() {
        $conexion = new conexion();
            $query = "SELECT * FROM especialidades";
            $resultado = mysqli_query($this->conexion, $query);
    
            if ($resultado) {
                echo '<table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Nombre de la Especialidad</th>
                          </tr>
                        </thead>
                        <tbody>';
                while ($fila = mysqli_fetch_assoc($resultado)) {
                    echo '<tr>
                            <td>' . $fila['id'] . '</td>
                            <td>' . $fila['nombre'] . '</td>
                          </tr>';
                }
                echo '</tbody>
                      </table>';
            } else {
                echo "Error al obtener las especialidades: " . mysqli_error($this->conexion);
            }
        }

    public static function esAdministrador($correo, $conexion) {
        $conexion = new conexion();
        $query = "SELECT COUNT(*) FROM administradores WHERE correo = '$correo'";
        $resultado =  $conexion -> query($query);

        if ($resultado  > 0) {
            return true;
        } else {
            return false;
        }
    }





    public static function all_accessories(){
        $sql = "SELECT accessories_sales.date, accessories_sales.method, accessories.price, accessories.name as accessory, users.name as user FROM accessories_sales INNER JOIN accessories ON accessories_sales.id_accesories = accessories.id INNER JOIN users ON accessories_sales.id_users = users.id;";
        $conexion = new conexion();
        $conexion->conect();
        $resultado = $conexion->query($sql);

        $brands = array();
        while ($fila = $resultado->fetch_assoc()) {
            $brands[] = $fila;
        }
        return $brands;
    }

    public static function all(){
        $sql = "SELECT COUNT(*) as yachts, (SELECT COUNT(*) from accessories_sales) as accessories from yacht_sales;";
        $conexion = new conexion();
        $conexion->conect();
        $resultado = $conexion->query($sql);

        $brands = array();
        while ($fila = $resultado->fetch_assoc()) {
            $brands[] = $fila;
        }
        return $brands;
    }

    public static function all_yachts(){
        $sql = "SELECT yacht_sales.date, payment_method.method, yachts.price, yachts.model as yacht, users.name as user FROM yacht_sales INNER JOIN yachts ON yacht_sales.id_yachts = yachts.id INNER JOIN payment_method ON yacht_sales.id_payment_method = payment_method.id INNER JOIN users ON yacht_sales.id_users = users.id;";
        $conexion = new conexion();
        $conexion->conect();
        $resultado = $conexion->query($sql);

        $brands = array();
        while ($fila = $resultado->fetch_assoc()) {
            $brands[] = $fila;
        }
        return $brands;
    }

    public static function find($id){
        $sql = "SELECT * FROM brands where id = $id";
        $conexion = new conexion();
        $conexion->conect();
        $resultado = $conexion->query($sql);
        while ($fila = $resultado->fetch_assoc()) {
            $brand[] = $fila;
        }
        return $brand[0];
    }

    public static function sum_yachts(){
        $conexion = new conexion();
        $conexion->conect();
        $sales = array();
        for ($i=1; $i < 13; $i++) {
            $num = "'%-0".$i."-%'";
            if ($i >= 10) {$num ="'%-".$i."-%'";}
            $sql = "SELECT SUM(yachts.price) as sales FROM `yacht_sales` INNER JOIN yachts ON yacht_sales.id_yachts = yachts.id WHERE date like $num;";
            $resultado = $conexion->query($sql);
            while ($fila = $resultado->fetch_assoc()) {
                if ($fila['sales'] ==null) {
                    $sale[0] = 0;
                }else{
                $sale[0] = $fila['sales'];
                }
            }
            array_push($sales,$sale[0]);
        }
        return $sales;
    }

    public static function sum_accessories(){
        $conexion = new conexion();
        $conexion->conect();
        $sales = array();
        for ($i=1; $i < 13; $i++) {
            $num = "'%-0".$i."-%'";
            if ($i >= 10) {$num ="'%-".$i."-%'";}
            $sql = "SELECT SUM(accessories.price) as sales FROM `accessories_sales` INNER JOIN accessories ON accessories_sales.id_accesories = accessories.id WHERE date like $num";
            $resultado = $conexion->query($sql);
            while ($fila = $resultado->fetch_assoc()) {
                if ($fila['sales'] ==null) {
                    $sale[0] = 0;
                }else{
                $sale[0] = $fila['sales'];
                }
            }
            array_push($sales,$sale[0]);
        }
        return $sales;
    }
}
?>