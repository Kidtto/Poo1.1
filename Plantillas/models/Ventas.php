<?php
class Ventas{
    public $Fecha;
    public $Cliente;
    public $Producto;
    public $Monto;

    public function __construct($fecha,$Cliente,$Producto,$Pago) {
        $this->Fecha =$fecha;
        $this->Cliente=$Cliente;
        $this->Producto=$Producto;
        $this->Pago=$Pago;
        }
    public function Crear_venta($venta,$conexion){

        $query= "INSERT INTO ventas (fecha,cliente,producto,monto) VALUE ($fecha,$Cliente,$Producto,$Monto)"
    }
        $stmt= $conexion->prepare($query);


        $stmt->bind_param("sssd", $venta->Fecha, $venta->cliente,$venta->producto,$venta->monto);
           
    if($stmt->execute()){
        return true;
    }else{
        return false;
}
public function Eliminar_Venta(){
    $query = "DELETE FROM ventas WHERE id =?"

    $stmt= $conexion -> prepare($query);
    $stmt->bind_param("i", $id);

    if($stmt->execute()){
        return true;
    }else{
        return false;

}
}


}
?>