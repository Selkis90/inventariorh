<?php

// Incluye archivos necesarios (header y modelo de Activo)
require_once '../principal.php';
require_once '../model/activoModel.php';

// Crea una instancia del modelo de Activo
$model = new activoModel();

try {
    // Intenta obtener los datos de activos desde el modelo
    $activo = $model->obtenerActivo();
} catch (Exception $e) {
    // Manejo de errores: imprime un mensaje de error y sale del script si ocurre un error
    echo "Error al obtener activos: " . $e->getMessage();
    exit;
}
?>
<section class="section">
    <h2>ver Activos</h2>

    <?php
    // Verifica si hay datos de activos para mostrar
    if (!empty($activo)) {
        // Inicia la tabla HTML y define las columnas
        echo "<table border='1'class='tabla_activos'>
                <tr>
                    <th>Descripcion</th>
                    <th>Tipo_Activo</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Numero_Serie</th>
                    <th>Placa</th>
                    <th>Cantidad</th>
                    <th>Fecha_Ingreso</th>
                    <th>Costo_Unitario</th>
                    <th>Estado</th>
                    <th>Ubicacion_Almacen</th>
                    <th>Garantia</th>
                    <th>Vida_Util</th>
                    <th>Fecha_Caducidad</th>
                    <th>Proxima_Fecha_Calibracion</th>
                    <th>Observaciones</th>
                </tr>";

        // Itera a través de los datos de activos y muestra cada fila en la tabla
        foreach ($activo as $row) {
            echo "<tr>
                        <td>" . htmlspecialchars($row['Descripcion']) . "</td>
                        <td>" . htmlspecialchars($row['Tipo_Activo']) . "</td>
                        <td>" . htmlspecialchars($row['Marca']) . "</td>
                        <td>" . htmlspecialchars($row['Modelo']) . "</td>
                        <td>" . htmlspecialchars($row['Numero_Serie']) . "</td>
                        <td>" . htmlspecialchars($row['Placa']) . "</td>
                        <td>" . htmlspecialchars($row['Cantidad']) . "</td>
                        <td>" . htmlspecialchars($row['Fecha_Ingreso']) . "</td>
                        <td>" . htmlspecialchars($row['Costo_Unitario']) . "</td>
                        <td>" . htmlspecialchars($row['Estado']) . "</td>
                        <td>" . htmlspecialchars($row['Ubicacion_Almacen']) . "</td>
                        <td>" . htmlspecialchars($row['Garantia']) . "</td>
                        <td>" . htmlspecialchars($row['Vida_Util']) . "</td>
                        <td>" . htmlspecialchars($row['Fecha_Caducidad']) . "</td>
                        <td>" . htmlspecialchars($row['Proxima_Fecha_Calibracion']) . "</td>
                        <td>" . htmlspecialchars($row['Observaciones']) . "</td>
                    </tr>";
        }

        // Cierra la tabla HTML
        echo "</table>";
    } else {
        // Muestra un mensaje si no hay datos de activos para mostrar
        echo "No hay datos para mostrar.";
    }

    // Incluye el archivo de pie de página
    require_once '../footer.php';
    ?>
    </section>