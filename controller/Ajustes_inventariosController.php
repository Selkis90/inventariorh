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
