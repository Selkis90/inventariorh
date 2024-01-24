<?php
// Incluye el archivo que contiene la definición de la clase ComprasModel
require_once '../model/ComprasModel.php';

// Definición de la clase ComprasController
class ComprasController
{

    // Método para crear compras
    public function crearCompras(
        $Numero_Orden_Compra,
        $Fecha_Compra,
        $Total_Compra,
        $Numero_Factura,
        $Metodo_Pago,
        $Estado,
        $Observaciones,
        $Detalles
    ) {
        // Crea una instancia de la clase ComprasModel
        $model = new ComprasModel();

        // Llama al método insertarModel de la instancia $model
        // para insertar una nueva compra en la base de datos
        $model->insertarModel(
            $Numero_Orden_Compra,
            $Fecha_Compra,
            $Total_Compra,
            $Numero_Factura,
            $Metodo_Pago,
            $Estado,
            $Observaciones,
            $Detalles
        );
    }

    // Función para ver los datos creados en la base de datos (método READ)
    public function verCompras()
    {
        // Crea una instancia de la clase ComprasModel
        $model = new ComprasModel();

        // Llama al método obtenerCompras de la instancia $model
        // para obtener la información de las compras desde la base de datos
        $model->obtenerCompras();

        // Incluye la vista correspondiente (view_compras.php) para mostrar la información
        require_once '../view/view_compras.php';
    }
}

// Verifica si la solicitud es de tipo POST y si se ha enviado el formulario con el botón "crear"
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["crear"])) {
    // Obtiene los valores del formulario enviado por POST
    $Numero_Orden_Compra = $_POST["Numero_Orden_Compra"];
    $Fecha_Compra = $_POST["Fecha_Compra"];
    $Total_Compra  = $_POST["Total_Compra"];
    $Numero_Factura = $_POST["Numero_Factura"];
    $Metodo_Pago = $_POST["Metodo_Pago"];
    $Estado = $_POST["Estado"];
    $Observaciones = $_POST["Observaciones"];
    $Detalles = $_POST["Detalles"];

    // Crea una instancia de la clase ComprasController
    $controller = new ComprasController();

    // Llama al método crearCompras con los valores obtenidos del formulario
    $controller->crearCompras(
        $Numero_Orden_Compra,
        $Fecha_Compra,
        $Total_Compra,
        $Numero_Factura,
        $Metodo_Pago,
        $Estado,
        $Observaciones,
        $Detalles
    );
}

// Verifica si la solicitud es de tipo POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Crea una instancia de la clase ComprasController
    $controller = new ComprasController();

    // Llama al método verCompras para mostrar la información de las compras
    $controller->verCompras();
}
