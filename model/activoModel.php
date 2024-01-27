<?php
require_once '../conexion.php';

class activoModel
{
    // Método para insertar un activo en la base de datos
    public function insertarIngreso_activo(
        $Tipo_Activo,
        $Descripcion,
        $Marca,
        $Modelo,
        $Numero_Serie,
        $Placa,
        $Cantidad,
        $Fecha_Ingreso,
        $Costo_Unitario,
        $Estado,
        $Ubicacion_Almacen,
        $Garantia,
        $Vida_Util,
        $Fecha_Caducidad,
        $Proxima_Fecha_Calibracion,
        $Observaciones
    ) {
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
        $sql->bind_param(
            "ssssssssssssssss",
            $Tipo_Activo,
            $Descripcion,
            $Marca,
            $Modelo,
            $Numero_Serie,
            $Placa,
            $Cantidad,
            $Fecha_Ingreso,
            $Costo_Unitario,
            $Estado,
            $Ubicacion_Almacen,
            $Garantia,
            $Vida_Util,
            $Fecha_Caducidad,
            $Proxima_Fecha_Calibracion,
            $Observaciones
        );

        // Ejecutar la consulta y manejar el resultado
        if ($sql->execute()) {
            echo "Ingresar activos creado con éxito";
            // Redirigir a la página principal después de la inserción
            /* header("refresh:3; url=../index.php"); */
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

    // Funcion para ver datos ingresados a la base de datos con el metodo READ

    public function obtenerActivo()
    {

        global $conexion;

        // Consulta SQL para seleccionar todos los registros de la tabla ingreso_activos.
        $sql = "SELECT * FROM ingreso_activos";

        // Ejecutar la consulta y almacenar el resultado en la variable $resultado.
        $resultado = $conexion->query($sql);

        // Verificar si hay resultados en la consulta.
        if ($resultado->num_rows > 0) {
            // Convertir el resultado a un arreglo asociativo y retornarlo.
            return $resultado->fetch_all(MYSQLI_ASSOC);
        } else {
            // Si no hay resultados, retornar un arreglo vacío.
            return array();
        }
    }

    // Funcion para ACTUALIZAR con el (METODO UPDATE)

    public function ActualizarActivoModel(
        $ID_Ingreso,
        $Nuevo_Tipo_Activo,
        $Nuevo_Descripcion,
        $Nuevo_Marca,
        $Nuevo_Modelo,
        $Nuevo_Numero_Serie,
        $Nuevo_Placa,
        $Nuevo_Cantidad,
        $Nuevo_Fecha_Ingreso,
        $Nuevo_Costo_Unitario,
        $Nuevo_Estado,
        $Nuevo_Ubicacion_Almacen,
        $Nuevo_Garantia,
        $Nuevo_Vida_Util,
        $Nuevo_Fecha_Caducidad,
        $Nuevo_Proxima_Fecha_Calibracion,
        $Nuevo_Observaciones
    ) {

        global $conexion;

        $Nuevo_Tipo_Activo = mysqli_real_escape_string($conexion, $Nuevo_Tipo_Activo);
        $Nuevo_Descripcion = mysqli_real_escape_string($conexion, $Nuevo_Descripcion);
        $Nuevo_Marca = mysqli_real_escape_string($conexion, $Nuevo_Marca);
        $Nuevo_Modelo = mysqli_real_escape_string($conexion, $Nuevo_Modelo);
        $Nuevo_Numero_Serie = mysqli_real_escape_string($conexion, $Nuevo_Numero_Serie);
        $Nuevo_Placa = mysqli_real_escape_string($conexion, $Nuevo_Placa);
        $Nuevo_Cantidad = mysqli_real_escape_string($conexion, $Nuevo_Cantidad);
        $Nuevo_Fecha_Ingreso = mysqli_real_escape_string($conexion, $Nuevo_Fecha_Ingreso);
        $Nuevo_Costo_Unitario = mysqli_real_escape_string($conexion, $Nuevo_Costo_Unitario);
        $Nuevo_Estado = mysqli_real_escape_string($conexion, $Nuevo_Estado);
        $Nuevo_Ubicacion_Almacen = mysqli_real_escape_string($conexion, $Nuevo_Ubicacion_Almacen);
        $Nuevo_Garantia = mysqli_real_escape_string($conexion, $Nuevo_Garantia);
        $Nuevo_Vida_Util = mysqli_real_escape_string($conexion, $Nuevo_Vida_Util);
        $Nuevo_Fecha_Caducidad = mysqli_real_escape_string($conexion, $Nuevo_Fecha_Caducidad);
        $Nuevo_Proxima_Fecha_Calibracion = mysqli_real_escape_string($conexion, $Nuevo_Proxima_Fecha_Calibracion);
        $Nuevo_Observaciones = mysqli_real_escape_string($conexion, $Nuevo_Observaciones);

        $sql = $conexion->prepare("UPDATE ingreso_activos SET
        Tipo_Activo = ?,
        Descripcion = ?,
        Marca = ?,
        Modelo = ?,
        Numero_Serie = ?,
        Placa = ?,
        Cantidad = ?,
        Fecha_Ingreso = ?,
        Costo_Unitario = ?,
        Estado = ?,
        Ubicacion_Almacen = ?,
        Garantia = ?,
        Vida_Util = ?,
        Fecha_Caducidad = ?,
        Proxima_Fecha_Calibracion = ?,
        Observaciones = ? WHERE ID_Ingreso = ?");

        $sql->bind_param(
            "ssssssssssssssssi",
            $Nuevo_Tipo_Activo,
            $Nuevo_Descripcion,
            $Nuevo_Marca,
            $Nuevo_Modelo,
            $Nuevo_Numero_Serie,
            $Nuevo_Placa,
            $Nuevo_Cantidad,
            $Nuevo_Fecha_Ingreso,
            $Nuevo_Costo_Unitario,
            $Nuevo_Estado,
            $Nuevo_Ubicacion_Almacen,
            $Nuevo_Garantia,
            $Nuevo_Vida_Util,
            $Nuevo_Fecha_Caducidad,
            $Nuevo_Proxima_Fecha_Calibracion,
            $Nuevo_Observaciones,
            $ID_Ingreso
        );
        if ($sql->execute()) {
            echo "Activo actualizado exitosamente";
    
            /* header("refresh:3; url=../index.php"); */
        exit;
        }else {
            echo "Error al actualizar el activo: " . $sql->error;
        }
    }
}
