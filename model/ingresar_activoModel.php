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
        if (!empty($Fecha_Ingreso) && strtotime($Fecha_Ingreso) !== false) {
            $Fecha_Ingreso = date('Y-m-d', strtotime($Fecha_Ingreso));
        } else {
            echo "La fecha de ingreso no es válida.";
            return;
        }

        $Costo_Unitario = mysqli_real_escape_string($conexion, $Costo_Unitario);
        $Estado = mysqli_real_escape_string($conexion, $Estado);
        $Ubicacion_Almacen = mysqli_real_escape_string($conexion, $Ubicacion_Almacen);

        // Verifica y formatea las fechas restantes
        $Garantia = !empty($Garantia) ? date('Y-m-d', strtotime($Garantia)) : null;
        $Vida_Util = mysqli_real_escape_string($conexion, $Vida_Util);
        $Fecha_Caducidad = !empty($Fecha_Caducidad) ? date('Y-m-d', strtotime($Fecha_Caducidad)) : null;
        $Proxima_Fecha_Calibracion = !empty($Proxima_Fecha_Calibracion) ? date('Y-m-d', strtotime($Proxima_Fecha_Calibracion)) : null;
        $Observaciones = mysqli_real_escape_string($conexion, $Observaciones);

        // Generar la consulta para ingresar los datos ingresados
        $sql = $conexion->prepare("INSERT INTO ingreso_activos(Tipo_Activo, Descripcion, 
        Marca, Modelo, Numero_Serie, Placa, Cantidad, Fecha_Ingreso, Costo_Unitario, 
        Estado, Ubicacion_Almacen, Garantia, Vida_Util, Fecha_Caducidad, 
        Proxima_Fecha_Calibracion, Observaciones) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    
        $sql->bind_param("sssssssdssssssss", $Tipo_Activo, $Descripcion, $Marca, $Modelo, 
        $Numero_Serie, $Placa, $Cantidad, $Fecha_Ingreso, $Costo_Unitario, $Estado,
        $Ubicacion_Almacen, $Garantia, $Vida_Util, $Fecha_Caducidad, $Proxima_Fecha_Calibracion, 
        $Observaciones);

        if ($sql->execute()) {
            echo "Ingresar activos creado con éxito";
            header("refresh:3; url=index.php");
        } else {
            echo "Error al crear ingresar activos";
        }
    }
}
?>