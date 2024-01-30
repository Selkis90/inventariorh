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
    // Funcion para Actualizar (METODO UPDATE)

    public function ActualizarProductoModel(
        $ID_Producto,
        $Nuevo_Serial,
        $Nueva_Placa,
        $Nuevo_Nombre,
        $Nueva_Descripcion,
        $Nuevo_Precio_Unitario,
        $Nueva_Marca,
        $Nueva_Categoria,
        $Nuevo_Stock,
        $Nueva_Fecha_Ingreso,
        $Nuevo_Estado,
        $Nuevo_Peso,
        $Nueva_Dimensiones,
        $Nuevo_Color
    ) {
        global $conexion;
        // limpiar datos 
        $ID_Producto = mysqli_real_escape_string($conexion, $ID_Producto);
        $Nuevo_Serial = mysqli_real_escape_string($conexion, $Nuevo_Serial);
        $Nueva_Placa = mysqli_real_escape_string($conexion, $Nueva_Placa);
        $Nuevo_Nombre = mysqli_real_escape_string($conexion, $Nuevo_Nombre);
        $Nueva_Descripcion = mysqli_real_escape_string($conexion, $Nueva_Descripcion);
        $Nuevo_Precio_Unitario = mysqli_real_escape_string($conexion, $Nuevo_Precio_Unitario);
        $Nueva_Marca = mysqli_real_escape_string($conexion, $Nueva_Marca);
        $Nueva_Categoria = mysqli_real_escape_string($conexion, $Nueva_Categoria);
        $Nuevo_Stock = mysqli_real_escape_string($conexion, $Nuevo_Stock);
        $Nueva_Fecha_Ingreso = mysqli_real_escape_string($conexion, $Nueva_Fecha_Ingreso);
        $Nuevo_Estado = mysqli_real_escape_string($conexion, $Nuevo_Estado);
        $Nuevo_Peso = mysqli_real_escape_string($conexion, $Nuevo_Peso);
        $Nueva_Dimensiones = mysqli_real_escape_string($conexion, $Nueva_Dimensiones);
        $Nuevo_Color = mysqli_real_escape_string($conexion, $Nuevo_Color);

        $sql = $conexion->prepare("UPDATE Producto SET Serial=?,
        Placa = ?,
        Nombre = ?,
        Descripcion = ?,
        Precio_Unitario = ?,
        Marca = ?,
        Categoria = ?,
        Stock = ?,
        Fecha_Ingreso = ?,
        Estado = ?,
        Peso = ?,
        Dimensiones = ?,
        Color = ?
        WHERE ID_Producto = ?");

        $sql->bind_param(
            "sssssssssssssi",
            $Nuevo_Serial,
            $Nueva_Placa,
            $Nuevo_Nombre,
            $Nueva_Descripcion,
            $Nuevo_Precio_Unitario,
            $Nueva_Marca,
            $Nueva_Categoria,
            $Nuevo_Stock,
            $Nueva_Fecha_Ingreso,
            $Nuevo_Estado,
            $Nuevo_Peso,
            $Nueva_Dimensiones,
            $Nuevo_Color,
            $ID_Producto
        );

        if ($sql->execute()) {
            echo "Producto actualizado exitosamente";
            /* header("refresh:3; url=../index.php"); */
                exit;
        } else {
            echo "Error al actualizar el producto: " . $sql->error;
        }
    }
}