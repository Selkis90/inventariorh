<?php
// Incluye el archivo que contiene la definición de la clase ProveedorModel
include_once('../model/ProveedorModel.php');

// Definición de la clase ProveedorController
class ProveedorController {
    // Método para crear un proveedor
    public function crearProveedor($nombre, $contacto, $telefono, $direccion, $correo, $observaciones) {
        // Crea una instancia de la clase ProveedorModel
        $model = new ProveedorModel();
        
        // Llama al método insertarProveedor de la instancia $model
        // para insertar un nuevo proveedor en la base de datos
        $model->insertarProveedor($nombre, $contacto, $telefono, $direccion, $correo, $observaciones);
    }

    // Método para ver la información de los proveedores
    public function verProveedor(){
        // Crea una instancia de la clase ProveedorModel
        $model = new ProveedorModel();
        
        // Llama al método obtenerProveedor de la instancia $model
        // para obtener la información de los proveedores desde la base de datos
        $proveedor = $model->obtenerProveedor();

        // Incluye la vista correspondiente (view_proveedor.php) para mostrar la información
        require_once '../view/view_proveedor.php';
    }
}

// Verifica si la solicitud es de tipo POST y si se ha enviado el formulario con el botón "crear"
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

// VALIDACIÓN PARA VER DATOS (método READ)
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset ($_POST["verProveedores"])) {
    // Crea una instancia de la clase ProveedorController
    $controller = new ProveedorController();

    // Llama al método verProveedor para mostrar la información de los proveedores
    $controller->verProveedor();
}
?>
