<?php
require_once '../header.php';
require_once '../model/StockModel.php';

// Crea una instancia del modelo para obtener la lista de productos
$model = new StockModel();

// Intenta obtener los datos de stock desde el modelo
try {
    $stock = $model->obtenerStock();
} catch (Exception $e) {
    // Manejo de errores: puedes imprimir un mensaje de error o registrar el error según tus necesidades
    echo "Error al obtener la lista de productos: " . $e->getMessage();
    exit; // Sale del script si ocurre un error
}
?>

<form method="post" action="../controller/StockController.php">
    <!-- Lista desplegable para seleccionar el Nombre_Producto a eliminar -->
    <label for="Nombre_Producto">Selecciona el Nombre del stock a Eliminar:</label>
    <select name="ID_Stock">
        <?php
        // Obtener la lista de Nombre_Producto desde el modelo (usando la instancia $model)
        $stock = $model->obtenerStock();

        foreach ($stock as $row) {
            echo "<option value='" . $row['ID_Stock'] . "'>" . $row['Nombre_Producto'] . "</option>";
        }
        ?>
    </select>

    <input type="submit" name="eliminar" value="Eliminar Stock">
</form>

<?php
require_once '../footer.php';

// Resto del código (más abajo en el archivo)
?>
