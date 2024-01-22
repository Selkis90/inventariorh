<?php
    // Incluye los archivos necesarios (header y modelo de Translado)
    require_once '../header.php';
    require_once '../model/TransladoModel.php';

    // Crea una instancia del modelo de Translado
    $model = new TransladoModel();

    try {
        // Intenta obtener los datos de traslado desde el modelo
        $translado = $model->obtenerTranslado(); 
    } catch (Exception $e) {
        // Maneja cualquier excepción y muestra un mensaje de error
        echo "Error al mostrar los datos: " . $e->getMessage();
    }

    // Verifica si hay datos de traslado para mostrar
    if (!empty($translado)) {
        // Inicia la tabla HTML y define las columnas
        echo "<table border='1'>
            <tr>
                <th>Tipo_Activo</th>
                <th>Fecha_Traslado</th>
                <th>De_Ubicacion</th>
                <th>A_Ubicacion</th>
                <th>Motivo</th>
                <th>Responsable_Traslado</th>
                <th>Persona_Entrega</th>
                <th>Cedula_Entrega</th>
                <th>Cargo_Entrega</th>
                <th>Telefono_Entrega</th>
                <th>Centro_Costo_Entrega</th>
                <th>Persona_Responsable</th>
                <th>Cedula_Responsable</th>
                <th>Cargo_Responsable</th>
                <th>Telefono_Responsable</th>
                <th>Centro_Costo_Responsable</th>
                <th>Comentarios</th>
                <th>Estado</th>
            </tr>";

        // Itera a través de los datos de traslado y muestra cada fila en la tabla
        foreach ($translado as $row) {
            echo " <tr>
                <td>". htmlspecialchars($row['Tipo_Activo']) ."</td>
                <td>". htmlspecialchars($row['Fecha_Traslado']) ."</td>
                <td>". htmlspecialchars($row['De_Ubicacion']) ."</td>
                <td>". htmlspecialchars($row['A_Ubicacion']) ."</td>
                <td>". htmlspecialchars($row['Motivo']) ."</td>
                <td>". htmlspecialchars($row['Responsable_Traslado']) ."</td>
                <td>". htmlspecialchars($row['Persona_Entrega']) ."</td>
                <td>". htmlspecialchars($row['Cedula_Entrega']) ."</td>
                <td>". htmlspecialchars($row['Cargo_Entrega']) ."</td>
                <td>". htmlspecialchars($row['Telefono_Entrega']) ."</td>
                <td>". htmlspecialchars($row['Centro_Costo_Entrega']) ."</td>
                <td>". htmlspecialchars($row['Persona_Responsable']) ."</td>
                <td>". htmlspecialchars($row['Cedula_Responsable']) ."</td>
                <td>". htmlspecialchars($row['Cargo_Responsable']) ."</td>
                <td>". htmlspecialchars($row['Telefono_Responsable']) ."</td>
                <td>". htmlspecialchars($row['Centro_Costo_Responsable']) ."</td>
                <td>". htmlspecialchars($row['Comentarios']) ."</td>
                <td>". htmlspecialchars($row['Estado']) ."</td>
            </tr>";
        }

        // Cierra la tabla HTML
        echo "</table>";
    } else {
        // Muestra un mensaje si no hay datos para mostrar
        echo "No hay datos para mostrar.";
    }

    // Incluye el archivo de pie de página
    require_once '../footer.php';
?>