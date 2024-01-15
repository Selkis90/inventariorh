<?php
// Incluye el archivo que contiene la definición de la clase StockModel
require_once '../model/StockModel.php';

// Definición de la clase StockController
class StockController
{
    // Método para crear stock, toma el nombre del producto y la cantidad como parámetros
    public function crearStock($Nombre_Producto, $Cantidad)
    {
        // Crea una instancia de la clase StockModel que se encuentra ubicada en model
        $model = new StockModel();

        // Llama al método insertarStock de la instancia de StockModel
        $model->insertarStock($Nombre_Producto, $Cantidad);
    }
}

// Verifica si la solicitud es de tipo POST y si se ha enviado el formulario con el nombre "crear"
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["crear"])) {
    // Obtiene los valores del formulario creado por POST
    $Nombre_Producto = $_POST["Nombre_Producto"];
    $Cantidad = $_POST["Cantidad"];

    // Crea una instancia de la clase StockController
    $controller = new StockController();

    // Llama al método crearStock de la instancia de StockController
    $controller->crearStock($Nombre_Producto, $Cantidad);
}
?>