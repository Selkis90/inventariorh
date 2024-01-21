<?php
// Incluye el archivo que contiene la definición de la clase ProductoModel
require_once '../model/ProductoModel.php';

// Definición de la clase ProductoController
class ProductoController
{
    // Método para crear un producto
    public function creaProducto($serial, $placa, $nombre, $descripcion, $Precio_Unitario, $marca, $categoria, $stock, $Fecha_Ingreso, $estado, $peso, $dimensiones, $color)
    {
        // Crea una instancia de la clase ProductoModel
        $model = new ProductoModel();

        // Llama al método insertarProducto de la instancia $model
        // para insertar un nuevo producto en la base de datos
        $model->insertarProducto($serial, $placa, $nombre, $descripcion, $Precio_Unitario, $marca, $categoria, $stock, $Fecha_Ingreso, $estado, $peso, $dimensiones, $color);
    }

// Metodo para ver datos de la base de datos READ
    public function verProducto(){

        $model = $model->obtenerProducto();
        require_once '../view/view_producto.php';
    }    
}

// Verifica si la solicitud es de tipo POST y si se ha enviado el formulario con el botón "crear"
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["crear"])) {
    // Obtiene los valores del formulario enviado por POST
    $serial = $_POST["serial"];
    $placa = $_POST["placa"];
    $nombre = $_POST["nombre"];
    $descripcion = $_POST["descripcion"];
    $Precio_Unitario = $_POST["Precio_Unitario"];
    $marca = $_POST["marca"];
    $categoria = $_POST["categoria"];
    $stock = $_POST["stock"];
    $Fecha_Ingreso = $_POST["Fecha_Ingreso"];
    $estado = $_POST["estado"];
    $peso = $_POST["peso"];
    $dimensiones = $_POST["dimensiones"];
    $color = $_POST["color"];

    // Crea una instancia de la clase ProductoController
    $controller = new ProductoController();

    // Llama al método creaProducto con los valores obtenidos del formulario
    $controller->creaProducto($serial, $placa, $nombre, $descripcion, $Precio_Unitario, $marca, $categoria, $stock, $Fecha_Ingreso, $estado, $peso, $dimensiones, $color);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $controller = new ProductoController();
    $controller->verProducto();
}
?>