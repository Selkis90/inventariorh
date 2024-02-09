<?php
require_once '../conexion.php';

class ProveedorModel
{
    // ------------------------------------------Función para insertar datos en la base de datos (método CREATE)
    public function insertarProveedor($nombre, $contacto, $telefono, $direccion, $correo, $observaciones)
    {
        global $conexion;

        $nombre = mysqli_real_escape_string($conexion, $nombre);
        $contacto = mysqli_real_escape_string($conexion, $contacto);
        $telefono = mysqli_real_escape_string($conexion, $telefono);
        $direccion = mysqli_real_escape_string($conexion, $direccion);
        $correo = mysqli_real_escape_string($conexion, $correo);
        $observaciones = mysqli_real_escape_string($conexion, $observaciones);

        $sql = $conexion->prepare("INSERT INTO Proveedor (Nombre, Contacto, Telefono, Direccion, Correo_Electronico, Observaciones) VALUES (?, ?, ?, ?, ?, ?)");

        $sql->bind_param("ssssss", $nombre, $contacto, $telefono, $direccion, $correo, $observaciones);

        if ($sql->execute()) {
            echo "Proveedor creado exitosamente";
            header("refresh:3; url=../index.php");
            exit;
        } else {
            echo "Error al crear proveedor: " . $sql->error;
        }
    }

    // --------------------------Función para obtener los datos almacenados en la base de datos (método READ Proveedor)

    public function obtenerProveedor()
    {
        global $conexion;

        $sql = "SELECT * FROM Proveedor";
        $resultado = $conexion->query($sql);

        if ($resultado->num_rows > 0) {
            return $resultado->fetch_all(MYSQLI_ASSOC);
        } else {
            return array();
        }
    }
    // ------------------------------------------Función para ACTUALIZAR datos en la base de datos (método UPDATE)
    public function actualizarProveedor($ID_Proveedor, $nuevoNombre, $nuevoContacto, $nuevoTelefono, $nuevoDireccion, $nuevoCorreo, $nuevoObservaciones)
    {
        global $conexion;

        $nuevoNombre = mysqli_real_escape_string($conexion, $nuevoNombre);
        $nuevoContacto = mysqli_real_escape_string($conexion, $nuevoContacto);
        $nuevoTelefono = mysqli_real_escape_string($conexion, $nuevoTelefono);
        $nuevoDireccion = mysqli_real_escape_string($conexion, $nuevoDireccion);
        $nuevoCorreo = mysqli_real_escape_string($conexion, $nuevoCorreo);
        $nuevoObservaciones = mysqli_real_escape_string($conexion, $nuevoObservaciones);

        $sql = $conexion->prepare("UPDATE Proveedor SET Nombre = ?, Contacto = ?, Telefono = ?, Direccion = ?, Correo_Electronico = ?, Observaciones = ? WHERE ID_Proveedor = ?");

        $sql->bind_param("ssssssi", $nuevoNombre, $nuevoContacto, $nuevoTelefono, $nuevoDireccion, $nuevoCorreo, $nuevoObservaciones, $ID_Proveedor);

        if ($sql->execute()) {
            echo "Proveedor actualizado exitosamente.";
            header("refresh:3; url=../index.php");
            exit;
        } else {
            echo "Error al actualizar proveedor: " . $sql->error;
        }
    }

    // funcion para eliminar con el metodo (DELETE)
    public function eliminarProveedorModel($ID_Proveedor){
        global $conexion;

        $ID_Proveedor = mysqli_real_escape_string($conexion, $ID_Proveedor);

        $sql = $conexion->prepare("DELETE FROM Proveedor WHERE ID_Proveedor = ?");
        $sql->bind_param("i",$ID_Proveedor);

        if ($sql->execute()) {
            return true;
        }else {
            return false;
        }
    }
}