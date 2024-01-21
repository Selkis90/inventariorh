<?php
    require_once '../conexion.php';

    class ComprasModel{

        public function insertarModel($Numero_Orden_Compra,
        $Fecha_Compra,
        $Total_Compra,
        $Numero_Factura,
        $Metodo_Pago,
        $Estado,
        $Observaciones,
        $Detalles){

        global $conexion;

        $Numero_Orden_Compra = mysqli_real_escape_string ($conexion, $Numero_Orden_Compra);
        $Fecha_Compra = mysqli_real_escape_string ($conexion, $Fecha_Compra);
        $Total_Compra = mysqli_real_escape_string ($conexion, $Total_Compra);
        $Numero_Factura = mysqli_real_escape_string ($conexion, $Numero_Factura);
        $Metodo_Pago = mysqli_real_escape_string ($conexion, $Metodo_Pago);
        $Estado = mysqli_real_escape_string ($conexion, $Estado);
        $Observaciones = mysqli_real_escape_string ($conexion, $Observaciones);
        $Detalles = mysqli_real_escape_string ($conexion, $Detalles);

        $sql = $conexion->prepare("INSERT INTO Compras (Numero_Orden_Compra,
        Fecha_Compra,
        Total_Compra ,
        Numero_Factura,
        Metodo_Pago,
        Estado,
        Observaciones,
        Detalles) VALUES (?,?,?,?,?,?,?,?)");

        $sql->bind_param("ssssssss", $Numero_Orden_Compra,
        $Fecha_Compra,
        $Total_Compra ,
        $Numero_Factura,
        $Metodo_Pago,
        $Estado,
        $Observaciones,
        $Detalles);

            if ($sql->execute()) {
                echo "Se creo correctamente la compra";
                header("refresh:3; url=../index.php");
            }else {
                echo "Error al crear la compra: " . $sql->error;
            }
        }
    }
    
?>
