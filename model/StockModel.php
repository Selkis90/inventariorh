<?php
require_once '../conexion.php';

class StockModel
{
    public function insertarStock($Nombre_Producto, $Cantidad)
    {
        global $conexion;

        $Nombre_Producto = mysqli_real_escape_string($conexion, $Nombre_Producto);
        $Cantidad = mysqli_real_escape_string($conexion, $Cantidad);

        $sql = $conexion->prepare("INSERT INTO Stock (Nombre_Producto, Cantidad) VALUES (?,?)");
        $sql->bind_param("si", $Nombre_Producto, $Cantidad);

        if ($sql->execute()) {
            echo "Stock creado exitosamente";
            header("refresh:3; url=index.php");
        } else {
            echo "Error al crear el stock: " . $sql->error;
        }
    }
}
?>