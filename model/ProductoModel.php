<?php
// Incluyendo el archivo de conexión a la base de datos
require_once '../conexion.php';

// Definición de la clase ProductoModel
class ProductoModel
{
    // Función para insertar un nuevo producto en la base de datos (método CREATE)
    public function insertarProducto($serial, $placa, $nombre, $descripcion, $Precio_Unitario, $marca, $categoria, $stock, $Fecha_Ingreso, $estado, $peso, $dimensiones, $color)
    {
        // Accediendo a la variable global de conexión a la base de datos
        global $conexion;

        // Escapando y sanitizando los datos de entrada
        $serial = mysqli_real_escape_string($conexion, $serial);
        $placa = mysqli_real_escape_string($conexion, $placa);
        $nombre = mysqli_real_escape_string($conexion, $nombre);
        $descripcion = mysqli_real_escape_string($conexion, $descripcion);
        $Precio_Unitario = mysqli_real_escape_string($conexion, $Precio_Unitario);
        $marca = mysqli_real_escape_string($conexion, $marca);
        $categoria = mysqli_real_escape_string($conexion, $categoria);
        $stock = mysqli_real_escape_string($conexion, $stock);
        $Fecha_Ingreso = mysqli_real_escape_string($conexion, $Fecha_Ingreso);
        $estado = mysqli_real_escape_string($conexion, $estado);
        $peso = mysqli_real_escape_string($conexion, $peso);
        $dimensiones = mysqli_real_escape_string($conexion, $dimensiones);
        $color = mysqli_real_escape_string($conexion, $color);

        // Preparando la instrucción SQL con marcadores de posición
        $sql = $conexion->prepare("INSERT INTO Producto(Serial, Placa, Nombre, Descripcion, Precio_Unitario, Marca, categoria, Stock, Fecha_Ingreso, Estado, Peso, Dimensiones, Color) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)");

        // Vinculando parámetros a la instrucción preparada
        $sql->bind_param("ssssdssisisss", $serial, $placa, $nombre, $descripcion, $Precio_Unitario, $marca, $categoria, $stock, $Fecha_Ingreso, $estado, $peso, $dimensiones, $color);

        // Ejecutando la instrucción preparada
        if ($sql->execute()) {
            echo "Producto creado exitosamente";
            // Redirigiendo a index.php después de 3 segundos
            header("refresh:3; url=../index.php");
            exit;
        } else {
            // Lanzando una excepción en caso de error
            throw new Exception("Error al crear el producto: " . $sql->error);
        }
    }

    // Función para obtener todos los productos almacenados en la base de datos (método READ)
    public function obtenerProducto()
    {
        // Accediendo a la variable global de conexión a la base de datos
        global $conexion;

        // Consulta SQL para seleccionar todos los registros de la tabla Producto
        $sql = "SELECT * FROM Producto";

        // Ejecutando la consulta
        $resultado = $conexion->query($sql);

        // Verificando si se obtuvieron resultados
        if ($resultado->num_rows > 0) {
            // Devolviendo los resultados como un array asociativo
            return $resultado->fetch_all(MYSQLI_ASSOC);
        } else {
            // Devolviendo un array vacío si no hay resultados
            return array();
        }
    }
}
?>