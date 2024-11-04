<?php
require_once '../principal.php';
require_once '../model/ProveedorModel.php';

$model = new ProveedorModel();

try {
    $proveedores = $model->obtenerProveedor();
} catch (Exception $e) {
    echo "Error al obtener proveedores: " . htmlspecialchars($e->getMessage());
    exit;
}
?>
<section class="section">
    <h2>Eliminar Proveedor</h2>
    <form action="../controller/ProveedorController.php" method="post">
        <label for="ID_Proveedor">Seleccione el Proveedor a eliminar</label>
        <select name="ID_Proveedor" id="ID_Proveedor">
            <?php foreach ($proveedores as $row): ?>
                <option value="<?= htmlspecialchars($row['ID_Proveedor']) ?>">
                    <?= htmlspecialchars($row['Nombre']) ?> (<?= htmlspecialchars($row['Contacto']) ?>)
                </option>
            <?php endforeach; ?>
        </select>
        <input type="submit" name="eliminar" value="Eliminar Proveedor">
    </form>
</section>
<?php require_once '../footer.php'; ?>