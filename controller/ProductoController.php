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

    // Funcion para ACTUALIZAR con el (METODO UPDATE)
    public function ActualizarProductoController(
        $ID_Producto,
        $Nuevo_Serial,
        $Nueva_Placa,
        $Nuevo_Nombre,
        $Nueva_Descripcion,
        $Nuevo_Precio_Unitario,
        $Nueva_Marca,
        $Nueva_Categoria,
        $Nuevo_Stock,
        $Nueva_Fecha_Ingreso,
        $Nuevo_Estado,
        $Nuevo_Peso,
        $Nueva_Dimensiones,
        $Nuevo_Color
    ) {

        $model = new ProductoModel();
        $model->ActualizarProductoModel(
            $ID_Producto,
            $Nuevo_Serial,
            $Nueva_Placa,
            $Nuevo_Nombre,
            $Nueva_Descripcion,
            $Nuevo_Precio_Unitario,
            $Nueva_Marca,
            $Nueva_Categoria,
            $Nuevo_Stock,
            $Nueva_Fecha_Ingreso,
            $Nuevo_Estado,
            $Nuevo_Peso,
            $Nueva_Dimensiones,
            $Nuevo_Color
        );
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

// validar datos del producto (METODO UPDATE)

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['actualizar'])) {
    // obtener valores 
    $ID_Producto = $_POST['ID_Producto'];
    $Nuevo_Serial = $_POST['Nuevo_Serial'];
    $Nueva_Placa = $_POST['Nueva_Placa'];
    $Nuevo_Nombre = $_POST['Nuevo_Nombre'];
    $Nueva_Descripcion = $_POST['Nueva_Descripcion'];
    $Nuevo_Precio_Unitario = $_POST['Nuevo_Precio_Unitario'];
    $Nueva_Marca = $_POST['Nueva_Marca'];
    $Nueva_Categoria = $_POST['Nueva_Categoria'];
    $Nuevo_Stock = $_POST['Nuevo_Stock'];
    $Nueva_Fecha_Ingreso = $_POST['Nueva_Fecha_Ingreso'];
    $Nuevo_Estado = $_POST['Nuevo_Estado'];
    $Nuevo_Peso = $_POST['Nuevo_Peso'];
    $Nueva_Dimensiones = $_POST['Nueva_Dimensiones'];
    $Nuevo_Color = $_POST['Nuevo_Color'];

    $controller = new ProductoController();

    $controller->ActualizarProductoController(
        $ID_Producto,
        $Nuevo_Serial,
        $Nueva_Placa,
        $Nuevo_Nombre,
        $Nueva_Descripcion,
        $Nuevo_Precio_Unitario,
        $Nueva_Marca,
        $Nueva_Categoria,
        $Nuevo_Stock,
        $Nueva_Fecha_Ingreso,
        $Nuevo_Estado,
        $Nuevo_Peso,
        $Nueva_Dimensiones,
        $Nuevo_Color
    );
}
