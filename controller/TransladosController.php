<?php
// Importar el modelo TransladoModel.php que contiene la lógica de manipulación de datos
require_once '../model/TransladoModel.php';

// Definir la clase TransladosController que maneja las acciones relacionadas con los traslados
class TransladosController
{

    // Método para crear un nuevo traslado
    public function crearTranslado(
        $Tipo_Activo,
        $Fecha_Traslado,
        $De_Ubicacion,
        $A_Ubicacion,
        $Motivo,
        $Responsable_Traslado,
        $Persona_Entrega,
        $Cedula_Entrega,
        $Cargo_Entrega,
        $Telefono_Entrega,
        $Centro_Costo_Entrega,
        $Persona_Responsable,
        $Cedula_Responsable,
        $Cargo_Responsable,
        $Telefono_Responsable,
        $Centro_Costo_Responsable,
        $Comentarios,
        $Estado
    ) {

        // Crear una instancia del modelo TransladoModel
        $modelo = new TransladoModel();

        // Llamar al método InsertarModel del modelo para insertar un nuevo traslado en la base de datos
        $modelo->InsertarModel(
            $Tipo_Activo,
            $Fecha_Traslado,
            $De_Ubicacion,
            $A_Ubicacion,
            $Motivo,
            $Responsable_Traslado,
            $Persona_Entrega,
            $Cedula_Entrega,
            $Cargo_Entrega,
            $Telefono_Entrega,
            $Centro_Costo_Entrega,
            $Persona_Responsable,
            $Cedula_Responsable,
            $Cargo_Responsable,
            $Telefono_Responsable,
            $Centro_Costo_Responsable,
            $Comentarios,
            $Estado
        );
    }

    // Función para ver los datos ingresados en la base de datos (método READ)
    public function verTranslado()
    {

        $model = new TransladoModel();

        $translado = $model->obtenerTranslado();

        require_once '../view/view_translados.php';
    }
}

// Verificar si la solicitud es de tipo POST y si se ha enviado el formulario de creación
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["crear"])) {

    // Recoger los datos del formulario
    $Tipo_Activo = $_POST["Tipo_Activo"];
    $Fecha_Traslado = $_POST["Fecha_Traslado"];
    $De_Ubicacion = $_POST["De_Ubicacion"];
    $A_Ubicacion = $_POST["A_Ubicacion"];
    $Motivo = $_POST["Motivo"];
    $Responsable_Traslado = $_POST["Responsable_Traslado"];
    $Persona_Entrega = $_POST["Persona_Entrega"];
    $Cedula_Entrega = $_POST["Cedula_Entrega"];
    $Cargo_Entrega = $_POST["Cargo_Entrega"];
    $Telefono_Entrega = $_POST["Telefono_Entrega"];
    $Centro_Costo_Entrega = $_POST["Centro_Costo_Entrega"];
    $Persona_Responsable = $_POST["Persona_Responsable"];
    $Cedula_Responsable = $_POST["Cedula_Responsable"];
    $Cargo_Responsable = $_POST["Cargo_Responsable"];
    $Telefono_Responsable = $_POST["Telefono_Responsable"];
    $Centro_Costo_Responsable = $_POST["Centro_Costo_Responsable"];
    $Comentarios = $_POST["Comentarios"];
    $Estado = $_POST["Estado"];

    // Crear una instancia del controlador TransladosController
    $controller = new TransladosController();

    // Llamar al método crearTranslado para procesar el formulario y crear un nuevo traslado
    $controller->crearTranslado(
        $Tipo_Activo,
        $Fecha_Traslado,
        $De_Ubicacion,
        $A_Ubicacion,
        $Motivo,
        $Responsable_Traslado,
        $Persona_Entrega,
        $Cedula_Entrega,
        $Cargo_Entrega,
        $Telefono_Entrega,
        $Centro_Costo_Entrega,
        $Persona_Responsable,
        $Cedula_Responsable,
        $Cargo_Responsable,
        $Telefono_Responsable,
        $Centro_Costo_Responsable,
        $Comentarios,
        $Estado
    );
}

// Verificar si la solicitud es de tipo POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Crear una instancia del controlador TransladosController
    $controller = new TransladosController();

    // Llamar al método verTranslado para mostrar los datos ingresados en la base de datos
    $controller->verTranslado();
}
