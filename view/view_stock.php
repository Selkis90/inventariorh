<?php
require_once '../header.php';
require_once '../model/StockModel.php';

$model = new StockModel();

try {
    $stock = $model->obtenerStock();
} catch (Exception $e) {
    // Manejo de errores, puedes imprimir un mensaje de error o registrar el error según tus necesidades.
    echo "Error al obtener el stock: " . $e->getMessage();
    exit;
}

?>

<h2>Ver Stock</h2>

<?php
if (!empty($stock)) {
    echo "<table border='1'>
            <tr>
                
                <th>Nombre del Producto</th>
                <th>Cantidad</th>
            </tr>";
//<th>ID</th>
    foreach ($stock as $row) {
        echo "<tr>
            
                <td>" . htmlspecialchars($row['Nombre_Producto']) . "</td>
                <td>" . htmlspecialchars($row['Cantidad']) . "</td>
            </tr>";
    }

    echo "</table>";
} else {
    echo "No hay datos para mostrar.";
}
// <td>" . htmlspecialchars($row['ID']) . "</td>
require_once '../footer.php';
?>