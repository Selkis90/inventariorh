<?php
require_once '../conexion.php';

class TransladoModel{

    public function InsertarModel($Tipo_Activo,
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

        global $conexion;

        $Tipo_Activo = mysqli_real_escape_string($conexion, $Tipo_Activo);
        $Fecha_Traslado = mysqli_real_escape_string($conexion, $Fecha_Traslado);
        $De_Ubicacion = mysqli_real_escape_string($conexion, $De_Ubicacion);
        $A_Ubicacion = mysqli_real_escape_string($conexion, $A_Ubicacion);
        $Motivo = mysqli_real_escape_string($conexion, $Motivo);
        $Responsable_Traslado = mysqli_real_escape_string($conexion, $Responsable_Traslado);
        $Persona_Entrega = mysqli_real_escape_string($conexion, $Persona_Entrega);
        $Cedula_Entrega = mysqli_real_escape_string($conexion, $Cedula_Entrega);
        $Cargo_Entrega = mysqli_real_escape_string($conexion, $Cargo_Entrega);
        $Telefono_Entrega = mysqli_real_escape_string($conexion, $Telefono_Entrega);
        $Centro_Costo_Entrega = mysqli_real_escape_string($conexion, $Centro_Costo_Entrega);
        $Persona_Responsable = mysqli_real_escape_string($conexion, $Persona_Responsable);
        $Cedula_Responsable = mysqli_real_escape_string($conexion, $Cedula_Responsable);
        $Cargo_Responsable = mysqli_real_escape_string($conexion, $Cargo_Responsable);
        $Telefono_Responsable = mysqli_real_escape_string($conexion, $Telefono_Responsable);
        $Centro_Costo_Responsable = mysqli_real_escape_string($conexion, $Centro_Costo_Responsable);
        $Comentarios = mysqli_real_escape_string($conexion, $Comentarios);
        $Estado = mysqli_real_escape_string($conexion, $Estado);

        $sql = $conexion->prepare("INSERT INTO Traslado (Tipo_Activo,
            Fecha_Traslado,
            De_Ubicacion,
            A_Ubicacion,
            Motivo,
            Responsable_Traslado,
            Persona_Entrega,
            Cedula_Entrega,
            Cargo_Entrega,
            Telefono_Entrega,
            Centro_Costo_Entrega,
            Persona_Responsable,
            Cedula_Responsable,
            Cargo_Responsable,
            Telefono_Responsable,
            Centro_Costo_Responsable,
            Comentarios,
            Estado) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

        $sql->bind_param("ssssssssssssssssss", $Tipo_Activo,
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

        if ($sql->execute()) {
            echo "Translado creado exitosamente";
            header("refresh:3; url=../index.php");
        }else {
            echo "Error al crear el Translado:" . $sql->error;
        }
    }
}
?>