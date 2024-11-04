<?php
require_once '../principal.php';
require_once '../model/StockModel.php';

$model = new StockModel();

// Intenta obtener los datos de stock desde el modelo
try {
    $stock = $model->obtenerStock();
} catch (Exception $e) {
    echo "Error al obtener la lista de productos: " . htmlspecialchars($e->getMessage());
    exit;
}
?>
<section class="section">
    <h2>Eliminar Stock</h2>
    <form method="post" action="../controller/StockController.php">
        <label for="Nombre_Producto">Selecciona el Nombre del stock a Eliminar:</label>
        <select name="ID_Stock">
            <?php foreach ($stock as $row): ?>
                <option value="<?= htmlspecialchars($row['ID_Stock']) ?>">
                    <?= htmlspecialchars($row['Nombre_Producto']) ?>
                </option>
            <?php endforeach; ?>
        </select>
        <input type="submit" name="eliminar" value="Eliminar Stock">
    </form>
</section>
<?php require_once '../footer.php'; ?>