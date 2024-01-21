<?php
require_once '../conexion.php';

// clase del crud
class StockModel
{

    //Funcion para insertar los datos a la base de datos metodo CREATE

    public function insertarStock($Nombre_Producto, $Cantidad)
    {
        global $conexion;

        $Nombre_Producto = mysqli_real_escape_string($conexion, $Nombre_Producto);
        $Cantidad = mysqli_real_escape_string($conexion, $Cantidad);

        $sql = $conexion->prepare("INSERT INTO Stock (Nombre_Producto, Cantidad) VALUES (?,?)");
        $sql->bind_param("si", $Nombre_Producto, $Cantidad);

        if ($sql->execute()) {
            echo "Stock creado exitosamente";
            header("refresh:3; url=../index.php");
        } else {
            echo "Error al crear el stock: " . $sql->error;
        }
    }
    // Funcion para ver los datos que se ingresaron a la base de datos metodo 
    // READ Stock

    public function obtenerStock(){
        global $conexion;

        $sql = "SELECT * FROM Stock";
        $resultado = $conexion->query($sql);

        if ($resultado->num_rows > 0) {
            return $resultado->fetch_all(MYSQLI_ASSOC);
        }else {
            return array();
        }

    }
    
}
?>





