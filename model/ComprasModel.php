<?php
// Se incluye el archivo de conexión a la base de datos
require_once '../conexion.php';

// Definición de la clase ComprasModel
class ComprasModel
{

    // Método para insertar un nuevo registro de compra en la base de datos (método CREATE Compra)
    public function insertarModel(
        $Numero_Orden_Compra,
        $Fecha_Compra,
        $Total_Compra,
        $Numero_Factura,
        $Metodo_Pago,
        $Estado,
        $Observaciones,
        $Detalles
    ) {

        // Acceso a la variable global de conexión a la base de datos
        global $conexion;

        // Escapar y sanitizar los datos de entrada para prevenir inyección SQL
        $Numero_Orden_Compra = mysqli_real_escape_string($conexion, $Numero_Orden_Compra);
        $Fecha_Compra = mysqli_real_escape_string($conexion, $Fecha_Compra);
        $Total_Compra = mysqli_real_escape_string($conexion, $Total_Compra);
        $Numero_Factura = mysqli_real_escape_string($conexion, $Numero_Factura);
        $Metodo_Pago = mysqli_real_escape_string($conexion, $Metodo_Pago);
        $Estado = mysqli_real_escape_string($conexion, $Estado);
        $Observaciones = mysqli_real_escape_string($conexion, $Observaciones);
        $Detalles = mysqli_real_escape_string($conexion, $Detalles);

        // Preparar la instrucción SQL con marcadores de posición
        $sql = $conexion->prepare("INSERT INTO Compras (Numero_Orden_Compra,
        Fecha_Compra,
        Total_Compra ,
        Numero_Factura,
        Metodo_Pago,
        Estado,
        Observaciones,
        Detalles) VALUES (?,?,?,?,?,?,?,?)");

        // Vincular parámetros a la instrucción preparada
        $sql->bind_param(
            "ssssssss",
            $Numero_Orden_Compra,
            $Fecha_Compra,
            $Total_Compra,
            $Numero_Factura,
            $Metodo_Pago,
            $Estado,
            $Observaciones,
            $Detalles
        );

        // Ejecutar la instrucción preparada y mostrar un mensaje según el resultado
        if ($sql->execute()) {
            echo "Compra creada exitosamente";
            // Redirigir a index.php después de 3 segundos
            header("refresh:3; url=../index.php");
            exit;
        } else {
            echo "Error al crear la compra: " . $sql->error;
        }
    }

    // Método para obtener los datos almacenados en la base de datos (método READ Compras)
    public function obtenerCompras()
    {
        global $conexion;

        // Consulta SQL para seleccionar todos los registros de la tabla Compras
        $sql = "SELECT * FROM Compras";

        // Ejecutar la consulta
        $resultado = $conexion->query($sql);

        // Verificar si se obtuvieron resultados
        if ($resultado->num_rows > 0) {
            // Devolver los resultados como un array asociativo
            return $resultado->fetch_all(MYSQLI_ASSOC);
        } else {
            // Devolver un array vacío si no hay resultados
            return array();
        }
    }

    // Funcion para ACTUALIZAR con el metodo (UPDATE)
    public function ActualizarComprasModel(
        $ID_Compra,
        $Nuevo_Numero_Orden_Compra,
        $Nuevo_Fecha_Compra,
        $Nuevo_Total_Compra,
        $Nuevo_Numero_Factura,
        $Nuevo_Metodo_Pago,
        $Nuevo_Estado,
        $Nuevo_Observaciones,
        $Nuevo_Detalles
    ) {
        global $conexion;

        $Nuevo_Numero_Orden_Compra = mysqli_real_escape_string($conexion, $Nuevo_Numero_Orden_Compra);
        $Nuevo_Fecha_Compra = mysqli_real_escape_string($conexion, $Nuevo_Fecha_Compra);
        $Nuevo_Total_Compra = mysqli_real_escape_string($conexion, $Nuevo_Total_Compra);
        $Nuevo_Numero_Factura = mysqli_real_escape_string($conexion, $Nuevo_Numero_Factura);
        $Nuevo_Metodo_Pago = mysqli_real_escape_string($conexion, $Nuevo_Metodo_Pago);
        $Nuevo_Estado = mysqli_real_escape_string($conexion, $Nuevo_Estado);
        $Nuevo_Observaciones = mysqli_real_escape_string($conexion, $Nuevo_Observaciones);
        $Nuevo_Detalles = mysqli_real_escape_string($conexion, $Nuevo_Detalles);

        $sql = $conexion->prepare("UPDATE Compras SET 
        Numero_Orden_Compra = ?,
        Fecha_Compra = ?,
        Total_Compra = ?,
        Numero_Factura = ?,
        Metodo_Pago = ?,
        Estado = ?,
        Observaciones = ?,
        Detalles = ?
        WHERE ID_Compra = ?");

        $sql->bind_param("ssssssssi", $Nuevo_Numero_Orden_Compra,
        $Nuevo_Fecha_Compra,
        $Nuevo_Total_Compra,
        $Nuevo_Numero_Factura,
        $Nuevo_Metodo_Pago,
        $Nuevo_Estado,
        $Nuevo_Observaciones,
        $Nuevo_Detalles,
        $ID_Compra);

        if ($sql->execute()) {
            return "La compra se Actualizo exitosamente";
            header("refresh:3; url=../index.php");
            exit;
        }else {
            return "error al Actualizar compra: "  .$sql->error;
        }
    }
}
