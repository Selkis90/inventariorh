<?php
// Se incluye el archivo que contiene la definición de la clase Ingresar_activoModel
require_once '../model/activoModel.php';

// Definición de la clase controladora Ingresar_activoController
class activoController
{
    // Método para crear un nuevo ingreso de activo
    public function crearIngresar_activo($Tipo_Activo, $Descripcion, $Marca, $Modelo,
    $Numero_Serie, $Placa, $Cantidad, $Fecha_Ingreso, $Costo_Unitario, $Estado,
    $Ubicacion_Almacen, $Garantia, $Vida_Util, $Fecha_Caducidad, $Proxima_Fecha_Calibracion,
    $Observaciones)
    {
        // Se crea una instancia del modelo Ingresar_activoModel
        $model = new activoModel();

        // Se invoca el método insertarIngreso_activo del modelo para realizar el registro en la base de datos
        $model->insertarIngreso_activo($Tipo_Activo, $Descripcion, $Marca, $Modelo, $Numero_Serie, $Placa, $Cantidad, $Fecha_Ingreso, $Costo_Unitario, $Estado,
        $Ubicacion_Almacen, $Garantia, $Vida_Util, $Fecha_Caducidad, $Proxima_Fecha_Calibracion, $Observaciones);
    }

//Funcion para ver los datos ingresados a la base de datos READ
    public function verActivos(){

        $model = new activoModel();
        $activo = $model->obtenerActivo();
        require_once '../view/view_activos.php';

    }

}

// Verificación de si la solicitud es de tipo POST y si se ha enviado el parámetro "crear"
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["crear"])) {
    try {
        // Recopilación de los datos del formulario
        $Tipo_Activo = $_POST["Tipo_Activo"];
        $Descripcion = $_POST["Descripcion"];
        $Marca = $_POST["Marca"];
        $Modelo = $_POST["Modelo"];
        $Numero_Serie = $_POST["Numero_Serie"];
        $Placa = $_POST["Placa"];
        $Cantidad = $_POST["Cantidad"];

        // La fecha de ingreso puede ser nula, dependiendo de la implementación del formulario
        $Fecha_Ingreso = isset($_POST["Fecha_Ingreso"]) ? $_POST["Fecha_Ingreso"] : null;

        $Costo_Unitario = $_POST["Costo_Unitario"];
        $Estado = $_POST["Estado"];
        $Ubicacion_Almacen = $_POST["Ubicacion_Almacen"];
        
        // Algunos campos pueden ser nulos, se verifica y asigna el valor correspondiente
        $Garantia = isset($_POST["Garantia"]) ? $_POST["Garantia"] : null;
        $Vida_Util = $_POST["Vida_Util"];
        $Fecha_Caducidad = isset($_POST["Fecha_Caducidad"]) ? $_POST["Fecha_Caducidad"] : null;
        $Proxima_Fecha_Calibracion = isset($_POST["Proxima_Fecha_Calibracion"]) ? $_POST["Proxima_Fecha_Calibracion"] : null;
        $Observaciones = $_POST["Observaciones"];

        // Se convierten las fechas a un formato adecuado para almacenamiento en la base de datos
        $Garantia = $Garantia !== null ? date('Y-m-d', strtotime($Garantia)) : null;
        $Fecha_Caducidad = $Fecha_Caducidad !== null ? date('Y-m-d', strtotime($Fecha_Caducidad)) : null;
        $Proxima_Fecha_Calibracion = $Proxima_Fecha_Calibracion !== null ? date('Y-m-d', strtotime($Proxima_Fecha_Calibracion)) : null;

        // Se crea una instancia del controlador Ingresar_activoController
        $controller = new activoController();

        // Se invoca el método crearIngresar_activo del controlador para procesar el ingreso de activo
        $controller->crearIngresar_activo($Tipo_Activo, $Descripcion, $Marca, $Modelo, $Numero_Serie, $Placa, $Cantidad, $Fecha_Ingreso, $Costo_Unitario, $Estado,
        $Ubicacion_Almacen, $Garantia, $Vida_Util, $Fecha_Caducidad, $Proxima_Fecha_Calibracion, $Observaciones);
    } catch (Exception $e) {
        // Manejo de errores en caso de excepción
        echo "Error: " . $e->getMessage();
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $controller = new activoController();

    $controller->verActivos();
}
?>