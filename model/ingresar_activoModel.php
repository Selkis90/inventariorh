<?php
require_once '../conexion.php';

class Ingresar_activoModel
{
    // Método para insertar un activo en la base de datos
    public function insertarIngreso_activo($Tipo_Activo, $Descripcion, $Marca, $Modelo, 
        $Numero_Serie, $Placa, $Cantidad, $Fecha_Ingreso, $Costo_Unitario, $Estado,
        $Ubicacion_Almacen, $Garantia, $Vida_Util, $Fecha_Caducidad, $Proxima_Fecha_Calibracion, 
        $Observaciones)
    {
        global $conexion;

        // Escapar caracteres especiales para evitar inyección SQL
        $Tipo_Activo = mysqli_real_escape_string($conexion, $Tipo_Activo);
        $Descripcion = mysqli_real_escape_string($conexion, $Descripcion);
        $Marca = mysqli_real_escape_string($conexion, $Marca);
        $Modelo = mysqli_real_escape_string($conexion, $Modelo);
        $Numero_Serie = mysqli_real_escape_string($conexion, $Numero_Serie);
        $Placa = mysqli_real_escape_string($conexion, $Placa);
        $Cantidad = mysqli_real_escape_string($conexion, $Cantidad);
        $Costo_Unitario = mysqli_real_escape_string($conexion, $Costo_Unitario);
        $Estado = mysqli_real_escape_string($conexion, $Estado);
        $Ubicacion_Almacen = mysqli_real_escape_string($conexion, $Ubicacion_Almacen);
        $Vida_Util = mysqli_real_escape_string($conexion, $Vida_Util);
        $Observaciones = mysqli_real_escape_string($conexion, $Observaciones);

        // Preparar la consulta SQL para la inserción
        $sql = $conexion->prepare("INSERT INTO ingreso_activos(Tipo_Activo, Descripcion, 
        Marca, Modelo, Numero_Serie, Placa, Cantidad, Fecha_Ingreso, Costo_Unitario, 
        Estado, Ubicacion_Almacen, Garantia, Vida_Util, Fecha_Caducidad, 
        Proxima_Fecha_Calibracion, Observaciones) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    
        // Enlazar los parámetros a la consulta SQL
        $sql->bind_param("ssssssssssssssss", $Tipo_Activo, $Descripcion, $Marca, $Modelo, 
        $Numero_Serie, $Placa, $Cantidad, $Fecha_Ingreso, $Costo_Unitario, $Estado,
        $Ubicacion_Almacen, $Garantia, $Vida_Util, $Fecha_Caducidad, $Proxima_Fecha_Calibracion, 
        $Observaciones);

        // Ejecutar la consulta y manejar el resultado
        if ($sql->execute()) {
            echo "Ingresar activos creado con éxito";
            // Redirigir a la página principal después de la inserción
            header("refresh:3; url=../index.php");
            exit;
        } else {
            echo "Error al crear ingresar activos";
        }
    }

    // Método protegido para formatear una fecha al formato 'Y-m-d'
    protected function formatearFecha($fecha)
    {
        // Verificar si la fecha es válida en formato DD-MM-YYYY
        $date_obj = DateTime::createFromFormat('d-m-Y', $fecha);
        
        // Si la fecha es válida, formatearla a 'Y-m-d'
        if ($date_obj && $date_obj->format('d-m-Y') === $fecha) {
            return $date_obj->format('Y-m-d');
        } else {
            // Si la fecha no es válida, mostrar un mensaje de error o lanzar una excepción
            throw new Exception("Fecha no válida: " . $fecha);
        }
    }
}
?>