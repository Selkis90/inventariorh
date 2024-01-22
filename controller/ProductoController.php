<?php
// Incluyendo el archivo que contiene la definición de la clase ProductoModel
require_once '../model/ProductoModel.php';

// Definición de la clase ProductoController
class ProductoController
{
    // Función para crear un nuevo producto (método CREATE)
    public function creaProducto($serial, $placa, $nombre, $descripcion, $Precio_Unitario, $marca, $categoria, $stock, $Fecha_Ingreso, $estado, $peso, $dimensiones, $color)
    {
        // Creando una instancia del modelo ProductoModel
        $model = new ProductoModel();

        try {
            // Llamando al método insertarProducto del modelo ProductoModel para agregar un nuevo producto
            $model->insertarProducto($serial, $placa, $nombre, $descripcion, $Precio_Unitario, $marca, $categoria, $stock, $Fecha_Ingreso, $estado, $peso, $dimensiones, $color);
        } catch (Exception $e) {
            // Manejo de excepciones: Imprimir un mensaje de error en caso de fallo
            echo "Error: " . $e->getMessage();
        }
    }

    // Función para obtener y mostrar todos los productos (método READ)
    public function verProducto()
    {
        // Creando una instancia del modelo ProductoModel
        $model = new ProductoModel();

        try {
            // Obteniendo datos de productos utilizando el método obtenerProducto del modelo ProductoModel
            $productos = $model->obtenerProducto();
            
            // Incluyendo la vista correspondiente (view_producto.php) para mostrar los datos
            require_once '../view/view_producto.php';
        } catch (Exception $e) {
            // Manejo de excepciones: Imprimir un mensaje de error en caso de fallo
            echo "Error: " . $e->getMessage();
        }
    }
}

// Validación para crear un nuevo producto
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["crear"])) {
    // Obteniendo los valores del formulario creado por POST
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

    // Creando una instancia de la clase ProductoController
    $controller = new ProductoController();

    // Llamando al método creaProducto de la instancia de ProductoController para insertar nuevos datos
    $controller->creaProducto($serial, $placa, $nombre, $descripcion, $Precio_Unitario, $marca, $categoria, $stock, $Fecha_Ingreso, $estado, $peso, $dimensiones, $color);
}

// Validación para ver productos (método READ)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Creando una instancia de la clase ProductoController
    $controller = new ProductoController();

    // Llamando al método verProducto de la instancia de ProductoController para mostrar los datos
    $controller->verProducto();
}
?>
