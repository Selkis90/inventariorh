<?php
    require_once '../conexion.php';

    class Ajustes_InventariosModel{

        public function Insertar_Ajustes_Inventarios($Cantidad_Ajustada,
        $Motivo,
        $Fecha_Ajuste,
        $Responsable_Ajuste,
        $Comentarios,
        $Tipo_Ajuste,
        $Documento_Relacionado){

        global $conexion;

        $Cantidad_Ajustada = mysqli_real_escape_string ($conexion, $Cantidad_Ajustada);
        $Motivo = mysqli_real_escape_string ($conexion,$Motivo);
        $Fecha_Ajuste = mysqli_real_escape_string ($conexion, $Fecha_Ajuste);
        $Responsable_Ajuste = mysqli_real_escape_string ($conexion, $Responsable_Ajuste);
        $Comentarios = mysqli_real_escape_string ($conexion, $Comentarios);
        $Tipo_Ajuste = mysqli_real_escape_string ($conexion, $Tipo_Ajuste);
        $Documento_Relacionado = mysqli_real_escape_string ($conexion, $Documento_Relacionado);

        $sql = $conexion->prepare("INSERT INTO Ajustes_Inventario (Cantidad_Ajustada,
        Motivo,
        Fecha_Ajuste,
        Responsable_Ajuste,
        Comentarios,
        Tipo_Ajuste,
        Documento_Relacionado)
        VALUES 
        (?,?,?,?,?,?,?)");

        $sql->bind_param("sssssss", $Cantidad_Ajustada,
        $Motivo,
        $Fecha_Ajuste,
        $Responsable_Ajuste,
        $Comentarios,
        $Tipo_Ajuste,
        $Documento_Relacionado);

        if ($sql->execute()) {

            echo "Se inserto correctamente Ajustes de inventarios";
            header ("refresh:3; url=../index.php");
        }else {
            echo "Error al crear los ajustes del inventario:" . $sql->error;
        }

        }
    }
?>