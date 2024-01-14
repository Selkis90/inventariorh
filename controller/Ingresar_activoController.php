<?php
require_once '../model/ingresar_activoModel.php';



class Ingresar_activoController
{
    public function crearIngresar_activo($Tipo_Activo, $Descripcion, $Marca, $Modelo,
    $Numero_Serie, $Placa, $Cantidad, $Fecha_Ingreso, $Costo_Unitario, $Estado,
    $Ubicacion_Almacen, $Garantia, $Vida_Util, $Fecha_Caducidad, $Proxima_Fecha_Calibracion,
    $Observaciones)
    {
        $model = new Ingresar_activoModel();

        $model->insertarIngreso_activo($Tipo_Activo, $Descripcion, $Marca, $Modelo, $Numero_Serie, $Placa, $Cantidad, $Fecha_Ingreso, $Costo_Unitario, $Estado,
        $Ubicacion_Almacen, $Garantia, $Vida_Util, $Fecha_Caducidad, $Proxima_Fecha_Calibracion, $Observaciones);
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["crear"])) {
    try {
        $Tipo_Activo = $_POST["Tipo_Activo"];
        $Descripcion = $_POST["Descripcion"];
        $Marca = $_POST["Marca"];
        $Modelo = $_POST["Modelo"];
        $Numero_Serie = $_POST["Numero_Serie"];
        $Placa = $_POST["Placa"];
        $Cantidad = $_POST["Cantidad"];
        
        // Obtener el valor de las fechas y formatearlas
       
        $Fecha_Ingreso = isset($_POST["Fecha_Ingreso"]) ? $_POST["Fecha_Ingreso"] : null;

        // $model = new Ingresar_activoModel();
        // $Fecha_Ingreso = $model->formatearFecha($Fecha_Ingreso);

        $Costo_Unitario = $_POST["Costo_Unitario"];
        $Estado = $_POST["Estado"];
        $Ubicacion_Almacen = $_POST["Ubicacion_Almacen"];
        
        $Garantia = isset($_POST["Garantia"]) ? $_POST["Garantia"] : null;
        $Vida_Util = $_POST["Vida_Util"];
        $Fecha_Caducidad = isset($_POST["Fecha_Caducidad"]) ? $_POST["Fecha_Caducidad"] : null;
        $Proxima_Fecha_Calibracion = isset($_POST["Proxima_Fecha_Calibracion"]) ? $_POST["Proxima_Fecha_Calibracion"] : null;
        $Observaciones = $_POST["Observaciones"];

        // Asegurémonos de que las fechas estén en el formato correcto
        // $Fecha_Ingreso = date('Y-m-d', strtotime($Fecha_Ingreso));
        $Garantia = $Garantia !== null ? date('Y-m-d', strtotime($Garantia)) : null;
        $Fecha_Caducidad = $Fecha_Caducidad !== null ? date('Y-m-d', strtotime($Fecha_Caducidad)) : null;
        $Proxima_Fecha_Calibracion = $Proxima_Fecha_Calibracion !== null ? date('Y-m-d', strtotime($Proxima_Fecha_Calibracion)) : null;

        $controller = new Ingresar_activoController();

        $controller->crearIngresar_activo($Tipo_Activo, $Descripcion, $Marca, $Modelo, $Numero_Serie, $Placa, $Cantidad, $Fecha_Ingreso, $Costo_Unitario, $Estado,
        $Ubicacion_Almacen, $Garantia, $Vida_Util, $Fecha_Caducidad, $Proxima_Fecha_Calibracion, $Observaciones);
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>