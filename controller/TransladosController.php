<?php
require_once '../model/TransladoModel.php';

class TransladosController {
    
    public function crearTranslado($Tipo_Activo,
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
        $Estado){

        $modelo = new TransladoModel();

        $modelo->InsertarModel($Tipo_Activo,
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
            $Estado);
    }   
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["crear"])) {
    
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

    $controller = new TransladosController();
    $controller->crearTranslado($Tipo_Activo,
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
        $Estado);
}
?>