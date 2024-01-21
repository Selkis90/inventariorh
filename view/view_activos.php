<?php
    require_once '../header.php';
    require_once '../model/activoModel.php';

    $model = new activoModel();

    try {
        $activo = $model->obtenerActivo();
    } catch (Exception $e) {
        echo "Error al obtener activos: " .$e->getMessage();
        exit;
    }

    if (!empty ($activo)) {
        echo "<table border='1'>
                <tr>
                    <th>Descripcion</th>
                    <th>Tipo_Activo	</th>
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

            foreach ($activo as $row) {
                echo "<tr>
                        <td>". htmlspecialchars($row['Descripcion']) . "</td>
                        <td>". htmlspecialchars($row['Tipo_Activo']) ."</td>
                        <td>". htmlspecialchars($row['Marca']) ."</td>
                        <td>". htmlspecialchars($row['Modelo']) ."</td>
                        <td>". htmlspecialchars($row['Numero_Serie']) ."</td>
                        <td>". htmlspecialchars($row['Placa']) ."</td>
                        <td>". htmlspecialchars($row['Cantidad']) ."</td>
                        <td>". htmlspecialchars($row['Fecha_Ingreso']) ."</td>
                        <td>". htmlspecialchars($row['Costo_Unitario']) ."</td>
                        <td>". htmlspecialchars($row['Estado']) ."</td>
                        <td>". htmlspecialchars($row['Ubicacion_Almacen']) ."</td>
                        <td>". htmlspecialchars($row['Garantia']) ."</td>
                        <td>". htmlspecialchars($row['Vida_Util']) ."</td>
                        <td>". htmlspecialchars($row['Fecha_Caducidad']) ."</td>
                        <td>". htmlspecialchars($row['Proxima_Fecha_Calibracion']) ."</td>
                        <td>". htmlspecialchars($row['Observaciones']) ."</td>
                    </tr>";
            }
            echo "</table>";
    }else {
        echo "No hay datos para mostrar.";
    }
    
    require_once '../footer.php';
?>