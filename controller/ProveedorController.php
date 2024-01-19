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

    public function verProveedor(){
        $model = new ProveedorModel();
        $proveedor = $model->obtenerProveedor();
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

// ESTE IF ES VALIDACION DE VER DATOS el metodo READ
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset ($_POST["verProveedores"])) {
    $controller = new ProveedorController();

    $controller->verProveedor();
}
?>