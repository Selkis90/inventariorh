<?php
// Se incluye el archivo que contiene la definición de la clase activoModel
require_once '../model/activoModel.php';

// Definición de la clase controladora activoController
class activoController
{
    // Método para crear un nuevo ingreso de activo
    public function crearIngresar_activo(
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
        // Se crea una instancia del modelo activoModel
        $model = new activoModel();

        // Se invoca el método insertarIngreso_activo del modelo para realizar el registro en la base de datos
        $model->insertarIngreso_activo(
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
    }

    // Función para ver los datos ingresados a la base de datos (método READ)
    public function verActivos()
    {

        // Se crea una instancia del modelo activoModel
        $model = new activoModel();

        // Se invoca el método obtenerActivo del modelo para obtener la información de los activos desde la base de datos
        $activo = $model->obtenerActivo();

        // Se incluye la vista correspondiente (view_activos.php) para mostrar la información
        require_once '../view/view_activos.php';
    }

    // Funcion para ACTUALIZAR activos con el (METODO UPDATE)

    public function ActualizarActivoController(
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

        $model = new activoModel();

        $model->ActualizarActivoModel(
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
        );
    }

    // funcion para eliminar con el metodo (DELETE)
    public function eliminarActivoController($ID_Ingreso){

        $model = new activoModel();

        $eliminar = $model->eliminarActivoModel($ID_Ingreso);

        if ($eliminar) {
            header("Location: ../view/view_activos.php");
            exit;
        }else {
            echo "Error al eliminar el activo.";
        }
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

        // Se crea una instancia del controlador activoController
        $controller = new activoController();

        // Se invoca el método crearIngresar_activo del controlador para procesar el ingreso de activo
        $controller->crearIngresar_activo(
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
    } catch (Exception $e) {
        // Manejo de errores en caso de excepción
        echo "Error: " . $e->getMessage();
    }
}

// Función if para ver los datos (método READ)
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Se crea una instancia del controlador activoController
    $controller = new activoController();

    // Se invoca el método verActivos del controlador para mostrar la información de los activos
    $controller->verActivos();
}

//Validar datos para UPDATE

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["actualizar"])) {

    //Obtener valores del formulario por POST
    $ID_Ingreso = $_POST["ID_Ingreso"];
    $Nuevo_Tipo_Activo = $_POST["Nuevo_Tipo_Activo"];
    $Nuevo_Descripcion = $_POST["Nuevo_Descripcion"];
    $Nuevo_Marca = $_POST["Nuevo_Marca"];
    $Nuevo_Modelo = $_POST["Nuevo_Modelo"];
    $Nuevo_Numero_Serie = $_POST["Nuevo_Numero_Serie"];
    $Nuevo_Placa = $_POST["Nuevo_Placa"];
    $Nuevo_Cantidad = $_POST["Nuevo_Cantidad"];
    $Nuevo_Fecha_Ingreso = $_POST["Nuevo_Fecha_Ingreso"];
    $Nuevo_Costo_Unitario = $_POST["Nuevo_Costo_Unitario"];
    $Nuevo_Estado = $_POST["Nuevo_Estado"];
    $Nuevo_Ubicacion_Almacen = $_POST["Nuevo_Ubicacion_Almacen"];
    $Nuevo_Garantia = $_POST["Nuevo_Garantia"];
    $Nuevo_Vida_Util = $_POST["Nuevo_Vida_Util"];
    $Nuevo_Fecha_Caducidad = $_POST["Nuevo_Fecha_Caducidad"];
    $Nuevo_Proxima_Fecha_Calibracion = $_POST["Nuevo_Proxima_Fecha_Calibracion"];
    $Nuevo_Observaciones = $_POST["Nuevo_Observaciones"];

    $controller = new activoController();

    $controller->ActualizarActivoController(
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
    );
}

// validar datos para eliminar con el metodo (DELETE)
if ($_SERVER["REQUEST_METHOD"] == "POST"  && isset($_POST['eliminar'])) {
    $ID_Ingreso = $_POST["ID_Ingreso"];

    $controller = new activoController();

    $controller->eliminarActivoController($ID_Ingreso);
}