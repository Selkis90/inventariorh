<?php
// Se incluye el archivo de conexión a la base de datos
require_once '../conexion.php';

// Definición de la clase Ajustes_InventariosModel
class Ajustes_InventariosModel
{

    // Método para insertar un nuevo registro de ajuste de inventario en la base de datos (método CREATE Ajustes_Inventarios)
    public function Insertar_Ajustes_Inventarios(
        $Cantidad_Ajustada,
        $Motivo,
        $Fecha_Ajuste,
        $Responsable_Ajuste,
        $Comentarios,
        $Tipo_Ajuste,
        $Documento_Relacionado
    ) {

        // Acceso a la variable global de conexión a la base de datos
        global $conexion;

        // Escapar y sanitizar los datos de entrada para prevenir inyección SQL
        $Cantidad_Ajustada = mysqli_real_escape_string($conexion, $Cantidad_Ajustada);
        $Motivo = mysqli_real_escape_string($conexion, $Motivo);
        $Fecha_Ajuste = mysqli_real_escape_string($conexion, $Fecha_Ajuste);
        $Responsable_Ajuste = mysqli_real_escape_string($conexion, $Responsable_Ajuste);
        $Comentarios = mysqli_real_escape_string($conexion, $Comentarios);
        $Tipo_Ajuste = mysqli_real_escape_string($conexion, $Tipo_Ajuste);
        $Documento_Relacionado = mysqli_real_escape_string($conexion, $Documento_Relacionado);

        // Preparar la instrucción SQL con marcadores de posición
        $sql = $conexion->prepare("INSERT INTO Ajustes_Inventario (Cantidad_Ajustada,
        Motivo,
        Fecha_Ajuste,
        Responsable_Ajuste,
        Comentarios,
        Tipo_Ajuste,
        Documento_Relacionado)
        VALUES 
        (?,?,?,?,?,?,?)");

        // Vincular parámetros a la instrucción preparada
        $sql->bind_param(
            "sssssss",
            $Cantidad_Ajustada,
            $Motivo,
            $Fecha_Ajuste,
            $Responsable_Ajuste,
            $Comentarios,
            $Tipo_Ajuste,
            $Documento_Relacionado
        );

        // Ejecutar la instrucción preparada y mostrar un mensaje según el resultado
        if ($sql->execute()) {
            echo "Ajuste de inventario creado exitosamente";
            // Redirigir a index.php después de 3 segundos
            header("refresh:3; url=../index.php");
            exit;
        } else {
            echo "Error al crear los ajustes de inventario: " . $sql->error;
        }
    }

    // Método para obtener los datos almacenados en la base de datos (método READ Ajustes_Inventarios)
    public function obtenerAjustes_Inventarios()
    {
        global $conexion;

        // Consulta SQL para seleccionar todos los registros de la tabla Ajustes_Inventario
        $sql = "SELECT * FROM Ajustes_Inventario";

        // Ejecutar la consulta
        $resultado = $conexion->query($sql);

        // Verificar si se obtuvieron resultados
        if ($resultado->num_rows > 0) {
            // Devolver los resultados como un array asociativo
            return $resultado->fetch_all(MYSQLI_ASSOC);
        } else {
            // Devolver un array vacío si no hay resultados
            return array();
        }
    }

    // Funcion para Actualizar con el metodo (UPDATE)

    public function ActualizarAjustesInventariosModel(
        $ID_Ajuste,
        $Nuevo_Cantidad_Ajustada,
        $Nuevo_Motivo,
        $Nuevo_Fecha_Ajuste,
        $Nuevo_Responsable_Ajuste,
        $Nuevo_Comentarios,
        $Nuevo_Tipo_Ajuste,
        $Nuevo_Documento_Relacionado
    ) {

        global $conexion;

        $Nuevo_Cantidad_Ajustada = mysqli_real_escape_string($conexion, $Nuevo_Cantidad_Ajustada);
        $Nuevo_Motivo = mysqli_real_escape_string($conexion, $Nuevo_Motivo);
        $Nuevo_Fecha_Ajuste = mysqli_real_escape_string($conexion, $Nuevo_Fecha_Ajuste);
        $Nuevo_Responsable_Ajuste = mysqli_real_escape_string($conexion, $Nuevo_Responsable_Ajuste);
        $Nuevo_Comentarios = mysqli_real_escape_string($conexion, $Nuevo_Comentarios);
        $Nuevo_Tipo_Ajuste = mysqli_real_escape_string($conexion, $Nuevo_Tipo_Ajuste);
        $Nuevo_Documento_Relacionado = mysqli_real_escape_string($conexion, $Nuevo_Documento_Relacionado);

        $sql = $conexion->prepare("UPDATE Ajustes_Inventario SET Cantidad_Ajustada = ?,
        Motivo = ?,
        Fecha_Ajuste = ?,
        Responsable_Ajuste = ?,
        Comentarios = ?,
        Tipo_Ajuste = ?,
        Documento_Relacionado = ?
        WHERE ID_Ajuste=?");

        $sql->bind_param(
            "sssssssi",
            $Nuevo_Cantidad_Ajustada,
            $Nuevo_Motivo,
            $Nuevo_Fecha_Ajuste,
            $Nuevo_Responsable_Ajuste,
            $Nuevo_Comentarios,
            $Nuevo_Tipo_Ajuste,
            $Nuevo_Documento_Relacionado,
            $ID_Ajuste
        );

        try {
            if ($sql->execute()) {
                return "Inventario Actualizado con éxito";
            } else {
                return "Error al Actualizar Inventario: " . $sql->error;
            }
        } catch (mysqli_sql_exception $e) {
            return "Excepción SQL: " . $e->getMessage();
        }
    }        
}
