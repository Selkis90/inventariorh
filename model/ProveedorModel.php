<?php
// Se incluye el archivo 'conexion.php', que probablemente contiene la lógica de conexión a la base de datos
require_once '../conexion.php';

// Definición de la clase 'ProveedorModel'
class ProveedorModel {
    // Método para insertar un nuevo proveedor en la base de datos
    public function insertarProveedor($nombre, $contacto, $telefono, $direccion, $correo, $observaciones) {
        // Se accede a la variable global $conexion, que contiene la conexión a la base de datos
        global $conexion;

        // Se utilizan funciones de escape para prevenir inyección de SQL
        $nombre = mysqli_real_escape_string($conexion, $nombre);
        $contacto = mysqli_real_escape_string($conexion, $contacto);
        $telefono = mysqli_real_escape_string($conexion, $telefono);
        $direccion = mysqli_real_escape_string($conexion, $direccion);
        $correo = mysqli_real_escape_string($conexion, $correo);
        $observaciones = mysqli_real_escape_string($conexion, $observaciones);

        // Se prepara una consulta SQL con placeholders para evitar la inyección de SQL
        $sql = $conexion->prepare("INSERT INTO Proveedor (Nombre, Contacto, Telefono, Direccion, Correo_Electronico, Observaciones) VALUES (?, ?, ?, ?, ?, ?)");

        // Se vinculan los parámetros a la consulta preparada
        $sql->bind_param("ssssss", $nombre, $contacto, $telefono, $direccion, $correo, $observaciones);

        // Se ejecuta la consulta preparada
        if ($sql->execute()) {
            // Si la inserción es exitosa, se muestra un mensaje y se redirige a la página principal después de 3 segundos
            echo "Proveedor creado exitosamente";
            header("refresh:3; url=../index.php");
        } else {
            // Si hay un error en la ejecución de la consulta, se muestra un mensaje de error
            echo "Error al crear proveedor: " . $sql->error;
        }
    }
    // Funcion para ver los datos que se ingresaron a la base de datos 
    // metodo READ Proveedores

    public function obtenerProveedor(){
        global $conexion;

        $sql = "SELECT * FROM Proveedor";
        $resultado = $conexion->query($sql);

        if ($resultado->num_rows > 0) {
            return $resultado->fetch_all(MYSQLI_ASSOC);
        }else {
            return array();
        }
    }
    
}
?>