<?php
// Incluyendo el archivo 'conexion.php', que probablemente contiene la lógica de conexión a la base de datos
require_once '../conexion.php';

// Definición de la clase 'ProveedorModel'
class ProveedorModel {
// Método para insertar un nuevo proveedor en la base de datos (método CREATE Proveedor)
    public function insertarProveedor($nombre, $contacto, $telefono, $direccion, $correo, $observaciones) {
        // Se accede a la variable global $conexion, que contiene la conexión a la base de datos
        global $conexion;

        // Se utilizan funciones de escape para prevenir la inyección de SQL
        $nombre = mysqli_real_escape_string($conexion, $nombre);
        $contacto = mysqli_real_escape_string($conexion, $contacto);
        $telefono = mysqli_real_escape_string($conexion, $telefono);
        $direccion = mysqli_real_escape_string($conexion, $direccion);
        $correo = mysqli_real_escape_string($conexion, $correo);
        $observaciones = mysqli_real_escape_string($conexion, $observaciones);

        // Se prepara una consulta SQL con marcadores de posición para evitar la inyección de SQL
        $sql = $conexion->prepare("INSERT INTO Proveedor (Nombre, Contacto, Telefono, Direccion, Correo_Electronico, Observaciones) VALUES (?, ?, ?, ?, ?, ?)");

        // Se vinculan los parámetros a la consulta preparada
        $sql->bind_param("ssssss", $nombre, $contacto, $telefono, $direccion, $correo, $observaciones);

        // Se ejecuta la consulta preparada
        if ($sql->execute()) {
            // Si la inserción es exitosa, se muestra un mensaje y se redirige a la página principal después de 3 segundos
            echo "Proveedor creado exitosamente";
            header("refresh:3; url=../index.php");
            exit;
        } else {
            // Si hay un error en la ejecución de la consulta, se muestra un mensaje de error
            echo "Error al crear proveedor: " . $sql->error;
        }
    }

// Función para obtener los datos almacenados en la base de datos (método READ Proveedores)
    public function obtenerProveedor(){
        global $conexion;

        // Consulta SQL para seleccionar todos los registros de la tabla Proveedor
        $sql = "SELECT * FROM Proveedor";

        // Ejecutar la consulta
        $resultado = $conexion->query($sql);

        // Verificar si se obtuvieron resultados
        if ($resultado->num_rows > 0) {
            // Devolver los resultados como un array asociativo
            return $resultado->fetch_all(MYSQLI_ASSOC);
        }else {
            // Devolver un array vacío si no hay resultados
            return array();
        }
    }
}
?>
