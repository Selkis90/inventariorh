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

    // Funcion para Actualizar con el metodo (UPDATE)
    public function ActualizarTransladoController(
        $ID_Traslado,
        $Nuevo_Tipo_Activo,
        $Nuevo_Fecha_Traslado,
        $Nuevo_De_Ubicacion,
        $Nuevo_A_Ubicacion,
        $Nuevo_Motivo,
        $Nuevo_Responsable_Traslado,
        $Nuevo_Persona_Entrega,
        $Nuevo_Cedula_Entrega,
        $Nuevo_Cargo_Entrega,
        $Nuevo_Telefono_Entrega,
        $Nuevo_Centro_Costo_Entrega,
        $Nuevo_Persona_Responsable,
        $Nuevo_Cedula_Responsable,
        $Nuevo_Cargo_Responsable,
        $Nuevo_Telefono_Responsable,
        $Nuevo_Centro_Costo_Responsable,
        $Nuevo_Comentarios,
        $Nuevo_Estado
    ) {

        $model = new TransladoModel();

        $model->ActualizarTransladoModel(
        $ID_Traslado,
        $Nuevo_Tipo_Activo,
        $Nuevo_Fecha_Traslado,
        $Nuevo_De_Ubicacion,
        $Nuevo_A_Ubicacion,
        $Nuevo_Motivo,
        $Nuevo_Responsable_Traslado,
        $Nuevo_Persona_Entrega,
        $Nuevo_Cedula_Entrega,
        $Nuevo_Cargo_Entrega,
        $Nuevo_Telefono_Entrega,
        $Nuevo_Centro_Costo_Entrega,
        $Nuevo_Persona_Responsable,
        $Nuevo_Cedula_Responsable,
        $Nuevo_Cargo_Responsable,
        $Nuevo_Telefono_Responsable,
        $Nuevo_Centro_Costo_Responsable,
        $Nuevo_Comentarios,
        $Nuevo_Estado);
    }

    //Funcion para eliminar con el metodo (DELETE)
    public function eliminarTransladoController($ID_Traslado){

        $model = new TransladoModel();

        $eliminado = $model->eliminarTransladoModel($ID_Traslado);

        if ($eliminado) {
            header("Location: ../view/view_translados.php");
            exit;
        }else {
            echo "Error al eliminar traslado.";
        }
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

// Validacion de datos para UPDATE

if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['actualizar'])) {

        $ID_Traslado = $_POST["ID_Traslado"];
        $Nuevo_Tipo_Activo = $_POST["Nuevo_Tipo_Activo"];
        $Nuevo_Fecha_Traslado = $_POST["Nuevo_Fecha_Traslado"];
        $Nuevo_De_Ubicacion = $_POST["Nuevo_De_Ubicacion"];
        $Nuevo_A_Ubicacion = $_POST["Nuevo_A_Ubicacion"];
        $Nuevo_Motivo = $_POST["Nuevo_Motivo"];
        $Nuevo_Responsable_Traslado = $_POST["Nuevo_Responsable_Traslado"];
        $Nuevo_Persona_Entrega = $_POST["Nuevo_Persona_Entrega"];
        $Nuevo_Cedula_Entrega = $_POST["Nuevo_Cedula_Entrega"];
        $Nuevo_Cargo_Entrega = $_POST["Nuevo_Cargo_Entrega"];
        $Nuevo_Telefono_Entrega = $_POST["Nuevo_Telefono_Entrega"];
        $Nuevo_Centro_Costo_Entrega = $_POST["Nuevo_Centro_Costo_Entrega"];
        $Nuevo_Persona_Responsable = $_POST["Nuevo_Persona_Responsable"];
        $Nuevo_Cedula_Responsable = $_POST["Nuevo_Cedula_Responsable"];
        $Nuevo_Cargo_Responsable = $_POST["Nuevo_Cargo_Responsable"];
        $Nuevo_Telefono_Responsable = $_POST["Nuevo_Telefono_Responsable"];
        $Nuevo_Centro_Costo_Responsable = $_POST["Nuevo_Centro_Costo_Responsable"];
        $Nuevo_Comentarios = $_POST["Nuevo_Comentarios"];
        $Nuevo_Estado = $_POST["Nuevo_Estado"];

        $controller = new TransladosController();

        $controller->ActualizarTransladoController($ID_Traslado,
        $Nuevo_Tipo_Activo,
        $Nuevo_Fecha_Traslado,
        $Nuevo_De_Ubicacion,
        $Nuevo_A_Ubicacion,
        $Nuevo_Motivo,
        $Nuevo_Responsable_Traslado,
        $Nuevo_Persona_Entrega,
        $Nuevo_Cedula_Entrega,
        $Nuevo_Cargo_Entrega,
        $Nuevo_Telefono_Entrega,
        $Nuevo_Centro_Costo_Entrega,
        $Nuevo_Persona_Responsable,
        $Nuevo_Cedula_Responsable,
        $Nuevo_Cargo_Responsable,
        $Nuevo_Telefono_Responsable,
        $Nuevo_Centro_Costo_Responsable,
        $Nuevo_Comentarios,
        $Nuevo_Estado);

}

// validar datos para eliminar 

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["eliminar"])) {
    
    $ID_Traslado = $_POST["ID_Traslado"];

    $controller = new TransladosController();

    $controller->eliminarTransladoController($ID_Traslado);
}