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
            // Redirigir a principal.php después de 3 segundos
            header("refresh:3; url=../principal.php");
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

    //Funcion para Actualizar con el metodo (UPDATE)
    public function ActualizarTransladoModel(
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
        global $conexion;

        $Nuevo_Tipo_Activo = mysqli_real_escape_string($conexion, $Nuevo_Tipo_Activo);
        $Nuevo_Fecha_Traslado = mysqli_real_escape_string($conexion, $Nuevo_Fecha_Traslado);
        $Nuevo_De_Ubicacion = mysqli_real_escape_string($conexion, $Nuevo_De_Ubicacion);
        $Nuevo_A_Ubicacion = mysqli_real_escape_string($conexion, $Nuevo_A_Ubicacion);
        $Nuevo_Motivo = mysqli_real_escape_string($conexion, $Nuevo_Motivo);
        $Nuevo_Responsable_Traslado = mysqli_real_escape_string($conexion, $Nuevo_Responsable_Traslado);
        $Nuevo_Persona_Entrega = mysqli_real_escape_string($conexion, $Nuevo_Persona_Entrega);
        $Nuevo_Cedula_Entrega = mysqli_real_escape_string($conexion, $Nuevo_Cedula_Entrega);
        $Nuevo_Cargo_Entrega = mysqli_real_escape_string($conexion, $Nuevo_Cargo_Entrega);
        $Nuevo_Telefono_Entrega = mysqli_real_escape_string($conexion, $Nuevo_Telefono_Entrega);
        $Nuevo_Centro_Costo_Entrega = mysqli_real_escape_string($conexion, $Nuevo_Centro_Costo_Entrega);
        $Nuevo_Persona_Responsable = mysqli_real_escape_string($conexion, $Nuevo_Persona_Responsable);
        $Nuevo_Cedula_Responsable = mysqli_real_escape_string($conexion, $Nuevo_Cedula_Responsable);
        $Nuevo_Cargo_Responsable = mysqli_real_escape_string($conexion, $Nuevo_Cargo_Responsable);
        $Nuevo_Telefono_Responsable = mysqli_real_escape_string($conexion, $Nuevo_Telefono_Responsable);
        $Nuevo_Centro_Costo_Responsable = mysqli_real_escape_string($conexion, $Nuevo_Centro_Costo_Responsable);
        $Nuevo_Comentarios = mysqli_real_escape_string($conexion,$Nuevo_Comentarios);
        $Nuevo_Estado = mysqli_real_escape_string($conexion,$Nuevo_Estado);

        $sql = $conexion->prepare("UPDATE Traslado SET Tipo_Activo = ?,
        Fecha_Traslado = ?,
        De_Ubicacion = ?,
        A_Ubicacion = ?,
        Motivo = ?,
        Responsable_Traslado = ?,
        Persona_Entrega = ?,
        Cedula_Entrega = ?,
        Cargo_Entrega = ?,
        Telefono_Entrega = ?,
        Centro_Costo_Entrega = ?,
        Persona_Responsable = ?,
        Cedula_Responsable = ?,
        Cargo_Responsable = ?,
        Telefono_Responsable = ?,
        Centro_Costo_Responsable = ?,
        Comentarios = ?,
        Estado = ? 
        WHERE ID_Traslado = ?");

        $sql->bind_param("ssssssssssssssssssi",
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
        $Nuevo_Estado,
        $ID_Traslado);

        if ($sql->execute()) {
            return "Traslado Actualizado correctamente";

            exit;
        }else {
            return "Error al actualizar Traslados: " .$sql->error;
        }
    }

    //Funcion para eliminar con el metodo (DELETE).
    public function eliminarTransladoModel($ID_Traslado){
        
        global $conexion;

        $ID_Traslado = mysqli_real_escape_string($conexion, $ID_Traslado);

        $sql = $conexion->prepare("DELETE FROM Traslado WHERE ID_Traslado = ?");
        $sql->bind_param("i", $ID_Traslado);

        if ($sql->execute()) {
            return true;
        }else {
            return false;
        }

    }
}
