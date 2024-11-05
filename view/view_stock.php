<?php
// Incluye archivos necesarios (header y modelo de Stock)
/* require_once '../header.php'; */
require_once '../principal.php';
require_once '../model/StockModel.php';


// Crea una instancia del modelo de Stock
$model = new StockModel();

try {
    // Intenta obtener los datos de stock desde el modelo
    $stock = $model->obtenerStock();
} catch (Exception $e) {
    // Manejo de errores: puedes imprimir un mensaje de error o registrar el error según tus necesidades
    echo "Error al obtener el stock: " . $e->getMessage();
    exit; // Sale del script si ocurre un error
}
?>
<section class="section">
    <h2>Ver Stock</h2>

    <?php
    // Verifica si hay datos de stock para mostrar
    if (!empty($stock)) {
        // Inicia la tabla HTML y define las columnas
        echo "<table border='1' class='tabla_stock'>
            <tr>
                <th>Nombre del Producto</th>
                <th>Cantidad</th>
            </tr>";

        // Itera a través de los datos de stock y muestra cada fila en la tabla
        foreach ($stock as $row) {
            echo "<tr>
                <td>" . htmlspecialchars($row['Nombre_Producto']) . "</td>
                <td>" . htmlspecialchars($row['Cantidad']) . "</td>
                
            </tr>";
        }

        // Cierra la tabla HTML
        echo "</table>";
    } else {
        // Muestra un mensaje si no hay datos para mostrar
        echo "No hay datos para mostrar.";
    }


    ?>
</section>
<?php
// Incluye el archivo de pie de página
require_once '../footer.php';
?>