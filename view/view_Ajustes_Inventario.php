<?php
    require_once '../header.php';
    require_once '../model/Ajustes_inventariosModel.php';

    $model = new Ajustes_InventariosModel();

    try {
        $Ajustes_Inventarios = $model->obtenerAjustes_Inventarios();
    } catch (Exception $e) {
        echo 'Error al obtener translado: ' .$e->getMessage();
    }    
?>

<h2>ver Ajustes de inventarios</h2>

<?php
    if (!empty($Ajustes_Inventarios)) {
        echo "<table border='1'>
            <tr>
                <th>Cantidad_Ajustada</th>
                <th>Motivo</th>
                <th>Fecha_Ajuste</th>
                <th>Responsable_Ajuste</th>
                <th>Comentarios</th>
                <th>Tipo_Ajuste</th>
                <th>Documento_Relacionado</th>
            </tr>";

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
            echo "</table>";
    }else {
        echo "No hay datos para mostrar.";
    }

    require_once '../footer.php';
?>