<?php
    require_once '../header.php';
    require_once '../model/ComprasModel.php';

    $model = new ComprasModel();

    try {
        $compras = $model->obtenerCompras();
    } catch (Exception $e) {
        echo "Error al obtener Compras: " .$e->getMessage();
    }

    if (!empty($compras)) {
        echo "<table border='1'>
        <tr>
            <th>Numero_Orden_Compra</th>
            <th>Fecha_Compra</th>
            <th>Total_Compra</th>
            <th>Numero_Factura</th>
            <th>Metodo_Pago	</th>
            <th>Estado</th>
            <th>Observaciones</th>
            <th>Detalles</th>
        </tr>";

        foreach ($compras as $row) {
            echo
            "<tr>
                <td>". htmlspecialchars($row['Numero_Orden_Compra']) ."</td>
                <td>". htmlspecialchars($row['Fecha_Compra']) ."</td>
                <td>". htmlspecialchars($row['Total_Compra']) ."</td>
                <td>". htmlspecialchars($row['Numero_Factura']) ."</td>
                <td>". htmlspecialchars($row['Metodo_Pago']) ."</td>
                <td>". htmlspecialchars($row['Estado']) ."</td>
                <td>". htmlspecialchars($row['Observaciones']) ."</td>
                <td>". htmlspecialchars($row['Detalles']) ."</td>
            </tr>";
        }
        echo "</table>";
    }else {
        echo "No hay datos para mostrar.";
    }

    require_once '../footer.php';
?>