<?php
// Incluye archivos necesarios (header y modelo de Compras)
require_once '../header.php';
require_once '../model/ComprasModel.php';

// Crea una instancia del modelo de Compras
$model = new ComprasModel();

try {
    // Intenta obtener los datos de compras desde el modelo
    $compras = $model->obtenerCompras();
} catch (Exception $e) {
    // Manejo de errores: imprime un mensaje de error si hay algún problema al obtener las compras
    echo "Error al obtener Compras: " . $e->getMessage();
}

// Verifica si hay datos de compras para mostrar
if (!empty($compras)) {
    // Inicia la tabla HTML y define las columnas
    echo "<table border='1'>
        <tr>
            <th>Numero_Orden_Compra</th>
            <th>Fecha_Compra</th>
            <th>Total_Compra</th>
            <th>Numero_Factura</th>
            <th>Metodo_Pago</th>
            <th>Estado</th>
            <th>Observaciones</th>
            <th>Detalles</th>
        </tr>";

    // Itera a través de los datos de compras y muestra cada fila en la tabla
    foreach ($compras as $row) {
        echo
        "<tr>
                <td>" . htmlspecialchars($row['Numero_Orden_Compra']) . "</td>
                <td>" . htmlspecialchars($row['Fecha_Compra']) . "</td>
                <td>" . htmlspecialchars($row['Total_Compra']) . "</td>
                <td>" . htmlspecialchars($row['Numero_Factura']) . "</td>
                <td>" . htmlspecialchars($row['Metodo_Pago']) . "</td>
                <td>" . htmlspecialchars($row['Estado']) . "</td>
                <td>" . htmlspecialchars($row['Observaciones']) . "</td>
                <td>" . htmlspecialchars($row['Detalles']) . "</td>
            </tr>";
    }

    // Cierra la tabla HTML
    echo "</table>";
} else {
    // Muestra un mensaje si no hay datos de compras para mostrar
    echo "No hay datos para mostrar.";
}

// Incluye el archivo de pie de página
require_once '../footer.php';
