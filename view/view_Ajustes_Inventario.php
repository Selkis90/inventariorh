<?php
// Incluye archivos necesarios (header y modelo de Ajustes de Inventarios)
require_once '../principal.php';
require_once '../model/Ajustes_inventariosModel.php';

// Crea una instancia del modelo de Ajustes de Inventarios
$model = new Ajustes_InventariosModel();

try {
    // Intenta obtener los datos de Ajustes de Inventarios desde el modelo
    $Ajustes_Inventarios = $model->obtenerAjustes_Inventarios();
} catch (Exception $e) {
    // Manejo de errores: imprime un mensaje de error si hay algún problema al obtener los ajustes
    echo 'Error al obtener ajustes de inventarios: ' . $e->getMessage();
}
?>
<section class="section">
    <h2>Ver Ajustes de Inventarios</h2>

    <?php
    // Verifica si hay datos de Ajustes de Inventarios para mostrar
    if (!empty($Ajustes_Inventarios)) {
        // Inicia la tabla HTML y define las columnas
        echo "<table border='1' class='tabla_ajustes'>
            <tr>
                <th>Cantidad_Ajustada</th>
                <th>Motivo</th>
                <th>Fecha_Ajuste</th>
                <th>Responsable_Ajuste</th>
                <th>Comentarios</th>
                <th>Tipo_Ajuste</th>
                <th>Documento_Relacionado</th>
            </tr>";

        // Itera a través de los datos de Ajustes de Inventarios y muestra cada fila en la tabla
        foreach ($Ajustes_Inventarios as $row) {
            echo "<tr>
                        <td>" . htmlspecialchars($row['Cantidad_Ajustada']) . "</td>
                        <td>" . htmlspecialchars($row['Motivo']) . "</td>
                        <td>" . htmlspecialchars($row['Fecha_Ajuste']) . "</td>
                        <td>" . htmlspecialchars($row['Responsable_Ajuste']) . "</td>
                        <td>" . htmlspecialchars($row['Comentarios']) . "</td>
                        <td>" . htmlspecialchars($row['Tipo_Ajuste']) . "</td>
                        <td>" . htmlspecialchars($row['Documento_Relacionado']) . "</td>
                    </tr>";
        }

        // Cierra la tabla HTML
        echo "</table>";
        
    } else {
        // Muestra un mensaje si no hay datos de Ajustes de Inventarios para mostrar
        echo "No hay datos para mostrar.";
    }
    // Incluye el archivo de pie de página
    require_once '../footer.php';
    ?>
    </section>