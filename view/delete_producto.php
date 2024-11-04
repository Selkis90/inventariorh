<?php
require_once '../principal.php';
require_once '../model/ProductoModel.php';

$model = new ProductoModel();

try {
    $productos = $model->obtenerProducto();
} catch (Exception $e) {
    echo "Error al obtener la lista de productos: " . htmlspecialchars($e->getMessage());
    exit;
}
?>
<section class="section">
    <h2>Eliminar Producto</h2>
    <form action="../controller/ProductoController.php" method="post">
        <label for="ID_Producto">Seleccione el producto a eliminar</label>
        <select name="ID_Producto" id="ID_Producto" required>
            <?php foreach ($productos as $row): ?>
                <option value="<?= htmlspecialchars($row['ID_Producto']) ?>">
                    <?= htmlspecialchars($row['Nombre']) ?>
                </option>
            <?php endforeach; ?>
        </select>
        <input type="submit" name="eliminar" value="Eliminar Producto">
    </form>
</section>
<?php require_once '../footer.php'; ?>