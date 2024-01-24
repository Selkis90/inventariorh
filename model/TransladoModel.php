<?php
// Importando el archivo de conexión a la base de datos
require_once '../conexion.php';

// Definición de la clase TransladoModel
class TransladoModel
{

    // Método para insertar un nuevo registro de Translado en la base de datos
    public function InsertarModel(
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

        // Acceder a la variable global de conexión a la base de datos
        global $conexion;

        // Escapar y sanitizar los datos de entrada
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

        // Preparar la instrucción SQL con marcadores de posición
        $sql = $conexion->prepare("INSERT INTO Traslado (
                Tipo_Activo,
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
                Estado
            ) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

        // Vincular parámetros a la instrucción preparada
        $sql->bind_param(
            "ssssssssssssssssss",
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

        // Ejecutar la instrucción preparada
        if ($sql->execute()) {
            echo "Translado creado exitosamente";
            // Redirigir a index.php después de 3 segundos
            header("refresh:3; url=../index.php");
            exit;
        } else {
            echo "Error al crear el Translado:" . $sql->error;
        }
    }

    // Función para obtener los datos de todos los traslados registrados en la base de datos (método READ)
    public function obtenerTranslado()
    {

        global $conexion;

        // Consulta SQL para seleccionar todos los registros de la tabla Traslado
        $sql = "SELECT * FROM Traslado";

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
}
