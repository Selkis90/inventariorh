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
    
    $Tipo_Activo = $_POST["Tipo_Activo"];
    $Descripcion = $_POST["Descripcion"];
    $Marca = $_POST["Marca"];
    $Modelo = $_POST["Modelo"];
    $Numero_Serie = $_POST["Numero_Serie"];
    $Placa = $_POST["Placa"];
    $Cantidad = $_POST["Cantidad"];
    $Fecha_Ingreso = date('Y-m-d', strtotime($Fecha_Ingreso));
    $Costo_Unitario = $_POST["Costo_Unitario"];
    $Estado = $_POST["Estado"];
    $Ubicacion_Almacen = $_POST["Ubicacion_Almacen"];
    $Garantia = date('Y-m-d', strtotime($Garantia));
    $Vida_Util = $_POST["Vida_Util"];
    $Fecha_Caducidad = date('Y-m-d', strtotime($Fecha_Caducidad));
    $Proxima_Fecha_Calibracion = date('Y-m-d', strtotime($Proxima_Fecha_Calibracion));
    $Observaciones =  $_POST["Observaciones"];

    $controller = new Ingresar_activoController();

    $controller->crearIngresar_activo($Tipo_Activo, $Descripcion, $Marca, $Modelo, $Numero_Serie, $Placa, $Cantidad, $Fecha_Ingreso, $Costo_Unitario, $Estado,
    $Ubicacion_Almacen, $Garantia, $Vida_Util, $Fecha_Caducidad, $Proxima_Fecha_Calibracion, $Observaciones);
}
?>