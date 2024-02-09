<?php
// Incluye el archivo que contiene la definición de la clase ProveedorModel
include_once('../model/ProveedorModel.php');

// Definición de la clase ProveedorController
class ProveedorController
{
    // --------------------Funcion para crear un proveedor (METODO CREATE)

    public function crearProveedor($nombre, $contacto, $telefono, $direccion, $correo, $observaciones)
    {
        // Crea una instancia de la clase ProveedorModel
        $model = new ProveedorModel();

        // Llama al método insertarProveedor de la instancia $model
        // para insertar un nuevo proveedor en la base de datos
        $model->insertarProveedor($nombre, $contacto, $telefono, $direccion, $correo, $observaciones);
    }

    // ------------------Funcion para ver la información de los proveedores (METODO READ)

    public function verProveedor()
    {
        // Crea una instancia de la clase ProveedorModel
        $model = new ProveedorModel();

        // Llama al método obtenerProveedor de la instancia $model
        // para obtener la información de los proveedores desde la base de datos
        $model->obtenerProveedor();

        // Incluye la vista correspondiente (view_proveedor.php) para mostrar la información
        require_once '../view/view_proveedor.php';
    }

    //--------------------Funcion para Actualizar un Proveedor (Metodo UPDATE)

    public function ActualizarProveedor(
        $ID_Proveedor,
        $Nuevo_Nombre,
        $Nuevo_Contacto,
        $Nuevo_Telefono,
        $Nuevo_Direccion,
        $Nuevo_Correo_Electronico,
        $Nuevo_Observaciones
    ) {
        $model = new ProveedorModel();

        $model->ActualizarProveedor(
            $ID_Proveedor,
            $Nuevo_Nombre,
            $Nuevo_Contacto,
            $Nuevo_Telefono,
            $Nuevo_Direccion,
            $Nuevo_Correo_Electronico,
            $Nuevo_Observaciones
        );
    }


    //funcion para eliminar con el metodo (DELETE)
    public function eliminarProveedorController($ID_Proveedor)
    {
        $model = new ProveedorModel();

        $eliminado = $model->eliminarProveedorModel($ID_Proveedor);

        if ($eliminado) {
            header("Location: ../view/view_proveedor.php");
        } else {
            echo "Error al eliminar el producto.";
        }
    }
}

// ----------------------------------------------VALIDACIÓN PARA CREAR DATOS (METODO CREATE)

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["crear"])) {
    // Obtiene los valores del formulario enviado por POST
    $nombre = $_POST['nombre'];
    $contacto = $_POST['contacto'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    $correo = $_POST['correoElectronico'];
    $observaciones = $_POST['observaciones'];

    // Crea una instancia de la clase ProveedorController
    $controller = new ProveedorController();

    // Llama al método crearProveedor con los valores obtenidos del formulario
    $controller->crearProveedor($nombre, $contacto, $telefono, $direccion, $correo, $observaciones);
}

// --------------------------------------------VALIDACIÓN PARA VER DATOS (método READ)
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["verProveedores"])) {
    // Crea una instancia de la clase ProveedorController
    $controller = new ProveedorController();

    // Llama al método verProveedor para mostrar la información de los proveedores
    $controller->verProveedor();
}

// --------------------------------------------VALIDACIÓN PARA ACTUALIZAR DATOS (método UPDATE)

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['actualizar'])) {

    $ID_Proveedor = $_POST['ID_Proveedor'];
    $Nuevo_Nombre = $_POST['Nuevo_Nombre'];
    $Nuevo_Contacto = $_POST['Nuevo_Contacto'];
    $Nuevo_Telefono = $_POST['Nuevo_Telefono'];
    $Nuevo_Direccion = $_POST['Nuevo_Direccion'];
    $Nuevo_Correo_Electronico = $_POST['Nuevo_Correo_Electronico'];
    $Nuevo_Observaciones = $_POST['Nuevo_Observaciones'];

    $controller = new ProveedorController();

    $controller->ActualizarProveedor(
        $ID_Proveedor,
        $Nuevo_Nombre,
        $Nuevo_Contacto,
        $Nuevo_Telefono,
        $Nuevo_Direccion,
        $Nuevo_Correo_Electronico,
        $Nuevo_Observaciones
    );
}

// validacion de datos para eliminar (DELETE)

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["eliminar"])) {

    $ID_Proveedor = $_POST["ID_Proveedor"];

    $controller = new ProveedorController();

    $controller->eliminarProveedorController($ID_Proveedor);
}
