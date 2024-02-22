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

    //Funcion para ACTUALIZAR con el metodo (UPDATE)
    public function ActualizarComprasController(
        $ID_Compra,
        $Nuevo_Numero_Orden_Compra,
        $Nuevo_Fecha_Compra,
        $Nuevo_Total_Compra,
        $Nuevo_Numero_Factura,
        $Nuevo_Metodo_Pago,
        $Nuevo_Estado,
        $Nuevo_Observaciones,
        $Nuevo_Detalles
    ) {

        $model = new ComprasModel();

        $model->ActualizarComprasModel(
            $ID_Compra,
            $Nuevo_Numero_Orden_Compra,
            $Nuevo_Fecha_Compra,
            $Nuevo_Total_Compra,
            $Nuevo_Numero_Factura,
            $Nuevo_Metodo_Pago,
            $Nuevo_Estado,
            $Nuevo_Observaciones,
            $Nuevo_Detalles
        );
    }

    // funcion para eliminar con el metodo (DELETE).

    public function eliminarCompraController($ID_Compra)
    {

        $model = new ComprasModel();

        $eliminar = $model->eliminarCompraModel($ID_Compra);

        if ($eliminar) {
            header("Location: ../view/view_compras.php");
            exit;
        } else {
            echo "Error al eliminar la compra";
        }
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

//Funcion para validar datos del metodo (UPDATE)

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["actualizar"])) {

    $ID_Compra = $_POST['ID_Compra'];
    $Nuevo_Numero_Orden_Compra = $_POST['Nuevo_Numero_Orden_Compra'];
    $Nuevo_Fecha_Compra = $_POST['Nuevo_Fecha_Compra'];
    $Nuevo_Total_Compra = $_POST['Nuevo_Total_Compra'];
    $Nuevo_Numero_Factura = $_POST['Nuevo_Numero_Factura'];
    $Nuevo_Metodo_Pago = $_POST['Nuevo_Metodo_Pago'];
    $Nuevo_Estado = $_POST['Nuevo_Estado'];
    $Nuevo_Observaciones = $_POST['Nuevo_Observaciones'];
    $Nuevo_Detalles = $_POST['Nuevo_Detalles'];

    $controller = new ComprasController();

    $controller->ActualizarComprasController(
        $ID_Compra,
        $Nuevo_Numero_Orden_Compra,
        $Nuevo_Fecha_Compra,
        $Nuevo_Total_Compra,
        $Nuevo_Numero_Factura,
        $Nuevo_Metodo_Pago,
        $Nuevo_Estado,
        $Nuevo_Observaciones,
        $Nuevo_Detalles
    );
}

// validar los datos a eliminar con el metodo (DELETE)

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["eliminar"])) {

    $ID_Compra = $_POST["ID_Compra"];

    $controller = new ComprasController();

    $controller->eliminarCompraController($ID_Compra);
}
