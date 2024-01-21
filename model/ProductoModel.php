<?php
// Incluye el archivo de conexión a la base de datos
require_once '../conexion.php';

// Definición de la clase ProductoModel
class ProductoModel
{
    // Método para insertar un nuevo producto en la base de datos
    public function insertarProducto($serial, $placa, $nombre, $descripcion, $Precio_Unitario, $marca, $categoria, $stock, $Fecha_Ingreso, $estado, $peso, $dimensiones, $color)
    {
        // Accede a la variable global de conexión a la base de datos
        global $conexion;

        // Escapa los datos para evitar inyecciones SQL
        $serial = mysqli_real_escape_string($conexion, $serial);
        $placa = mysqli_real_escape_string($conexion, $placa);
        $nombre = mysqli_real_escape_string($conexion, $nombre);
        $descripcion = mysqli_real_escape_string($conexion, $descripcion);
        $Precio_Unitario = mysqli_real_escape_string($conexion, $Precio_Unitario);
        $marca = mysqli_real_escape_string($conexion, $marca);
        $categoria = mysqli_real_escape_string($conexion, $categoria); // Se agrega escape para la categoría
        $stock = mysqli_real_escape_string($conexion, $stock);
        $Fecha_Ingreso = mysqli_real_escape_string($conexion, $Fecha_Ingreso); // Se agrega escape para la Fecha_Ingreso
        $estado = mysqli_real_escape_string($conexion, $estado);
        $peso = mysqli_real_escape_string($conexion, $peso);
        $dimensiones = mysqli_real_escape_string($conexion, $dimensiones);
        $color = mysqli_real_escape_string($conexion, $color);

        // Prepara la consulta SQL con parámetros
        $sql = $conexion->prepare("INSERT INTO Producto(Serial, Placa, Nombre, Descripcion, Precio_Unitario, Marca, categoria, Stock, Fecha_Ingreso, Estado, Peso, Dimensiones, Color) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)");

        // Vincula los parámetros a la consulta SQL
        $sql->bind_param("ssssdssisisss", $serial, $placa, $nombre, $descripcion, $Precio_Unitario, $marca, $categoria, $stock, $Fecha_Ingreso, $estado, $peso, $dimensiones, $color);

        // Ejecuta la consulta SQL y muestra un mensaje según el resultado
        if ($sql->execute()) {
            echo "Producto creado exitosamente";
            header("refresh:3; url=../index.php");
        } else {
            echo "Error al crear el producto: " . $sql->error;
        }
    }

    public function obtenerProducto(){

        global $conexion;
        
        $sql = "SELECT * FROM Producto";
        $resultado = $conexion->query($sql);

        if ($resultado->num_rows > 0) {
            return $resultado->fetch_all(MYSQLI_ASSOC);
        }else {
            return array();
        }
    }
}
?>