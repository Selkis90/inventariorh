<?php
// Incluye el archivo que contiene la definición de la clase Ajustes_inventariosModel
require_once '../model/Ajustes_inventariosModel.php';

// Definición de la clase Ajustes_inventariosController
class Ajustes_inventariosController
{

    // Método para crear ajustes de inventarios
    public function crearAjustes_inventarios(
        $Cantidad_Ajustada,
        $Motivo,
        $Fecha_Ajuste,
        $Responsable_Ajuste,
        $Comentarios,
        $Tipo_Ajuste,
        $Documento_Relacionado
    ) {
        // Crea una instancia de la clase Ajustes_InventariosModel
        $model = new Ajustes_InventariosModel();

        // Llama al método Insertar_Ajustes_Inventarios de la instancia $model
        // para insertar un nuevo ajuste de inventarios en la base de datos
        $model->Insertar_Ajustes_Inventarios(
            $Cantidad_Ajustada,
            $Motivo,
            $Fecha_Ajuste,
            $Responsable_Ajuste,
            $Comentarios,
            $Tipo_Ajuste,
            $Documento_Relacionado
        );
    }

    // Función para ver los datos que se ingresaron a la base de datos (método READ)
    public function verAjustes_inventariosController()
    {
        // Crea una instancia de la clase Ajustes_InventariosModel
        $model = new Ajustes_InventariosModel();

        // Llama al método obtenerAjustes_Inventarios de la instancia $model
        // para obtener la información de los ajustes de inventarios desde la base de datos
        $Ajustes_Inventarios = $model->obtenerAjustes_Inventarios();

        // Incluye la vista correspondiente (view_Ajustes_Inventario.php) para mostrar la información
        require_once '../view/view_Ajustes_Inventario.php';
    }

    //Funcion para Actualizar con el metodo (UPDATE)
    public function ActualizarAjusteInventarioController(
        $ID_Ajuste,
        $Nuevo_Cantidad_Ajustada,
        $Nuevo_Motivo,
        $Nuevo_Fecha_Ajuste,
        $Nuevo_Responsable_Ajuste,
        $Nuevo_Comentarios,
        $Nuevo_Tipo_Ajuste,
        $Nuevo_Documento_Relacionado
    ) {

        $model = new Ajustes_InventariosModel();

        $model->ActualizarAjustesInventariosModel(
            $ID_Ajuste,
            $Nuevo_Cantidad_Ajustada,
            $Nuevo_Motivo,
            $Nuevo_Fecha_Ajuste,
            $Nuevo_Responsable_Ajuste,
            $Nuevo_Comentarios,
            $Nuevo_Tipo_Ajuste,
            $Nuevo_Documento_Relacionado
        );
    }

    // funcion para eliminar con el metodo (DELETE)
    public function eliminarAjusteInventarioController($ID_Ajuste)
    {

        $model = new Ajustes_InventariosModel();

        $eliminar = $model->eliminarAjusteInventarioModel($ID_Ajuste);

        if ($eliminar) {
            header("Location: ../view/view_Ajustes_Inventario.php");
            exit;
        } else {
            echo "Error al eliminar el responsable";
        }
    }
}

// Verifica si la solicitud es de tipo POST y si se ha enviado el formulario con el botón "crear"
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["crear"])) {
    // Obtiene los valores del formulario enviado por POST
    $Cantidad_Ajustada = $_POST["Cantidad_Ajustada"];
    $Motivo = $_POST["Motivo"];
    $Fecha_Ajuste = $_POST["Fecha_Ajuste"];
    $Responsable_Ajuste = $_POST["Responsable_Ajuste"];
    $Comentarios = $_POST["Comentarios"];
    $Tipo_Ajuste = $_POST["Tipo_Ajuste"];
    $Documento_Relacionado = $_POST["Documento_Relacionado"];

    // Crea una instancia de la clase Ajustes_inventariosController
    $controller = new Ajustes_inventariosController();

    // Llama al método crearAjustes_inventarios con los valores obtenidos del formulario
    $controller->crearAjustes_inventarios(
        $Cantidad_Ajustada,
        $Motivo,
        $Fecha_Ajuste,
        $Responsable_Ajuste,
        $Comentarios,
        $Tipo_Ajuste,
        $Documento_Relacionado
    );
}

// Función if para ver los datos (método READ)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Crea una instancia de la clase Ajustes_inventariosController
    $controller = new Ajustes_inventariosController();

    // Llama al método verAjustes_inventariosController para mostrar la información de los ajustes de inventarios
    $controller->verAjustes_inventariosController();
}

// Validar datos pata el metodo (UPDATE)

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["actualizar"])) {

    $ID_Ajuste = $_POST["ID_Ajuste"];
    $Nuevo_Cantidad_Ajustada = $_POST["Nuevo_Cantidad_Ajustada"];
    $Nuevo_Motivo = $_POST["Nuevo_Motivo"];
    $Nuevo_Fecha_Ajuste = $_POST["Nuevo_Fecha_Ajuste"];
    $Nuevo_Responsable_Ajuste = $_POST["Nuevo_Responsable_Ajuste"];
    $Nuevo_Comentarios = $_POST["Nuevo_Comentarios"];
    $Nuevo_Tipo_Ajuste = $_POST["Nuevo_Tipo_Ajuste"];
    $Nuevo_Documento_Relacionado = $_POST["Nuevo_Documento_Relacionado"];

    $controller = new Ajustes_inventariosController();

    $controller->ActualizarAjusteInventarioController(
        $ID_Ajuste,
        $Nuevo_Cantidad_Ajustada,
        $Nuevo_Motivo,
        $Nuevo_Fecha_Ajuste,
        $Nuevo_Responsable_Ajuste,
        $Nuevo_Comentarios,
        $Nuevo_Tipo_Ajuste,
        $Nuevo_Documento_Relacionado
    );
}

// validar datos de eliminacion

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["eliminar"])) {

    $ID_Ajuste = $_POST["ID_Ajuste"];

    $controller = new Ajustes_inventariosController();

    $controller->eliminarAjusteInventarioController($ID_Ajuste);
}
