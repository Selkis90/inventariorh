<?php
require_once '../conexion.php';

class Ingresar_activoModel
{
    public function insertarIngreso_activo($Tipo_Activo, $Descripcion, $Marca, $Modelo, 
        $Numero_Serie, $Placa, $Cantidad, $Fecha_Ingreso, $Costo_Unitario, $Estado,
        $Ubicacion_Almacen, $Garantia, $Vida_Util, $Fecha_Caducidad, $Proxima_Fecha_Calibracion, 
        $Observaciones)
    {
        global $conexion;

        $Tipo_Activo = mysqli_real_escape_string($conexion, $Tipo_Activo);
        $Descripcion = mysqli_real_escape_string($conexion, $Descripcion);
        $Marca = mysqli_real_escape_string($conexion, $Marca);
        $Modelo = mysqli_real_escape_string($conexion, $Modelo);
        $Numero_Serie = mysqli_real_escape_string($conexion, $Numero_Serie);
        $Placa = mysqli_real_escape_string($conexion, $Placa);
        $Cantidad = mysqli_real_escape_string($conexion, $Cantidad);

        // Verifica y formatea la fecha de ingreso
        // $Fecha_Ingreso = $this->formatearFecha($Fecha_Ingreso);
        // if (!$Fecha_Ingreso) {
        //     echo "La fecha de ingreso no es válida.";
        //     return;
        // }

        $Costo_Unitario = mysqli_real_escape_string($conexion, $Costo_Unitario);
        $Estado = mysqli_real_escape_string($conexion, $Estado);
        $Ubicacion_Almacen = mysqli_real_escape_string($conexion, $Ubicacion_Almacen);

        // Verifica y formatea las fechas restantes
        // $Garantia = $this->formatearFecha($Garantia);
        $Vida_Util = mysqli_real_escape_string($conexion, $Vida_Util);
        // $Fecha_Caducidad = $this->formatearFecha($Fecha_Caducidad);
        // $Proxima_Fecha_Calibracion = $this->formatearFecha($Proxima_Fecha_Calibracion);
        $Observaciones = mysqli_real_escape_string($conexion, $Observaciones);

        // Generar la consulta para ingresar los datos ingresados
        $sql = $conexion->prepare("INSERT INTO ingreso_activos(Tipo_Activo, Descripcion, 
        Marca, Modelo, Numero_Serie, Placa, Cantidad, Fecha_Ingreso, Costo_Unitario, 
        Estado, Ubicacion_Almacen, Garantia, Vida_Util, Fecha_Caducidad, 
        Proxima_Fecha_Calibracion, Observaciones) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    
        $sql->bind_param("ssssssssssssssss", $Tipo_Activo, $Descripcion, $Marca, $Modelo, 
        $Numero_Serie, $Placa, $Cantidad, $Fecha_Ingreso, $Costo_Unitario, $Estado,
        $Ubicacion_Almacen, $Garantia, $Vida_Util, $Fecha_Caducidad, $Proxima_Fecha_Calibracion, 
        $Observaciones);

        if ($sql->execute()) {
            echo "Ingresar activos creado con éxito";
            header("refresh:3; url=../index.php"); // Redirige a la página principal después de la inserción
            exit;
        } else {
            echo "Error al crear ingresar activos";
        }
    }

    protected function formatearFecha($fecha)
    {
        // Verificar si la fecha es válida en formato DD-MM-YYYY
        $date_obj = DateTime::createFromFormat('d-m-Y', $fecha);
        
        if ($date_obj && $date_obj->format('d-m-Y') === $fecha) {
            // Formatear la fecha a 'Y-m-d' si es válida
            return $date_obj->format('Y-m-d');
        } else {
            // Si la fecha no es válida, mostrar un mensaje de error o lanzar una excepción
            throw new Exception("Fecha no válida: " . $fecha);
        }
    }
}
?>