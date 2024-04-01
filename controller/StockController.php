<?php
// Incluye el archivo que contiene la definición de la clase StockModel
require_once '../model/StockModel.php';

// Definición de la clase StockController
class StockController
{
    // -------------Función para agregar datos a la base de datos (método CREATE)

    public function crearStock($Nombre_Producto, $Cantidad)
    {
        // Crea una instancia de la clase StockModel que se encuentra ubicada en model
        $model = new StockModel();

        // Llama al método insertarStock de la instancia de StockModel
        $model->insertarStock($Nombre_Producto, $Cantidad);
    }

    // --------------Función para ver los datos agregados en la base de datos (método READ)

    public function VerStock()
    {
        // Crea una instancia de la clase StockModel
        $model = new StockModel();

        // Obtiene datos de stock utilizando el método obtenerStock de la instancia de StockModel
        $model->obtenerStock();

        // Incluye la vista correspondiente (view_stock.php) para mostrar los datos
        require_once '../view/view_stock.php';
    }

    // -------------------Función para actualizar datos en la base de datos (método UPDATE)

    public function actualizarStockController($ID_Stock, $Nuevo_Nombre_Producto, $Nueva_Cantidad)
    {
        //creo un objeto de la clase StockModel
        $model = new StockModel();

        // Llama al funcion actualizarStockModel de la clase de StockModel
        $model->actualizarStockModel($ID_Stock, $Nuevo_Nombre_Producto, $Nueva_Cantidad);
    }

    // ----------------------------Funcion para eliminar con el metodo (DELETE)
    public function eliminarStock($ID_Stock)
    {
        // Crea una instancia de la clase StockModel
        $model = new StockModel();

        // Llama al método eliminarStockModel de la instancia de StockModel
        $eliminado = $model->eliminarStockModel($ID_Stock);

        if ($eliminado) {
            // Redirige a la página de ver stock después de eliminar el producto
            header("Location: ../view/view_stock.php");
            exit;
        } else {
            // Manejo de errores en caso de que no se pueda eliminar el producto
            echo "Error al eliminar el producto. " ;
        }
    }
}

// ----------------------------------------------VALIDACIÓN PARA CREAR DATOS

// Verifica si la solicitud es de tipo POST y si se ha enviado el formulario con el nombre "crear"
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["crear"])) {
    // Obtiene los valores del formulario creado por POST
    $Nombre_Producto = $_POST["Nombre_Producto"];
    $Cantidad = $_POST["Cantidad"];

    // Crea una instancia de la clase StockController
    $controller = new StockController();

    // Llama al método crearStock de la instancia de StockController para insertar nuevos datos
    $controller->crearStock($Nombre_Producto, $Cantidad);
}

//--------------------------------------------- VALIDACIÓN PARA VER DATOS (método READ)

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["verStock"])) {
    // Crea una instancia de la clase StockController
    $controller = new StockController();

    // Llama al método VerStock de la instancia de StockController para mostrar los datos
    $controller->VerStock();
}

// --------------------------------------------VALIDACIÓN PARA ACTUALIZAR DATOS (método UPDATE)

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["actualizar"])) {
    // Obtiene los valores del formulario de actualización por POST
    $ID_Stock = $_POST["ID_Stock"];
    $Nuevo_Nombre_Producto = $_POST["Nuevo_Nombre_Producto"];
    $Nueva_Cantidad = $_POST["Nueva_Cantidad"];

    // Crea una objeto de la clase StockController
    $controller = new StockController();

    // Llama al funcion actualizarStockController de la clase de StockController para actualizar los datos
    $controller->actualizarStockController($ID_Stock, $Nuevo_Nombre_Producto, $Nueva_Cantidad);
}

// Verifica si la solicitud es de tipo POST y si se ha enviado el formulario para eliminar un producto
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["eliminar"])) {
    // Obtiene el ID del producto a eliminar
    $ID_Stock = $_POST["ID_Stock"];

    // Crea una instancia de la clase StockController
    $controller = new StockController();

    // Llama al método eliminarStock de la instancia de StockController para eliminar el producto
    $controller->eliminarStock($ID_Stock);
}



/* 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 */