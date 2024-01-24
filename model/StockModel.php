<?php
// Incluyendo el archivo de conexión a la base de datos
require_once '../conexion.php';

// Definición de la clase StockModel
class StockModel
{
// ------------------------------------------Función para insertar datos en la base de datos (método CREATE)
    public function insertarStock($Nombre_Producto, $Cantidad)
    {
        // Acceder a la variable global de conexión a la base de datos
        global $conexion;

        // Escapar y sanitizar los datos de entrada
        $Nombre_Producto = mysqli_real_escape_string($conexion, $Nombre_Producto);
        $Cantidad = mysqli_real_escape_string($conexion, $Cantidad);

        // Preparar la instrucción SQL con marcadores de posición
        $sql = $conexion->prepare("INSERT INTO Stock (Nombre_Producto, Cantidad) VALUES (?,?)");
        $sql->bind_param("si", $Nombre_Producto, $Cantidad);

        // Ejecutar la instrucción preparada
        if ($sql->execute()) {
            echo "Stock creado exitosamente";
            // Redirigir a index.php después de 3 segundos
            header("refresh:3; url=../index.php");
            exit;
        } else {
            echo "Error al crear el stock: " . $sql->error;
        }
    }

// -------------------------------------------Función para obtener los datos almacenados en la base de datos (método READ Stock)
    public function obtenerStock()
    {
        global $conexion;

        // Consulta SQL para seleccionar todos los registros de la tabla Stock
        $sql = "SELECT * FROM Stock";

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

// ------------------------------------------Función para ACTUALIZAR datos en la base de datos (método UPDATE)
    public function actualizarStock($ID_Stock, $Nuevo_Nombre_Producto, $Nueva_Cantidad)
    {
        global $conexion;

        // Escapar y sanitizar los datos de entrada
        $Nuevo_Nombre_Producto = mysqli_real_escape_string($conexion, $Nuevo_Nombre_Producto);
        $Nueva_Cantidad = mysqli_real_escape_string($conexion, $Nueva_Cantidad);

        // Preparar la instrucción SQL con marcadores de posición
        $sql = $conexion->prepare("UPDATE Stock SET Nombre_Producto=?, Cantidad=? WHERE ID_Stock=?");
        $sql->bind_param("ssi", $Nuevo_Nombre_Producto, $Nueva_Cantidad, $ID_Stock);

        // Ejecutar la instrucción preparada
        if ($sql->execute()) {
            echo "Stock actualizado exitosamente";
            // Redirigir a index.php después de 3 segundos
            header("refresh:3; url=../index.php");
            exit;
        } else {
            echo "Error al actualizar el stock: " . $sql->error;
        }
    }
}
