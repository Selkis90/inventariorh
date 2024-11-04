<?php
require_once '../principal.php';
require_once '../model/activoModel.php';

$model = new activoModel();

try {
    $activos = $model->obtenerActivo();
} catch (Exception $e) {
    echo "Error al obtener la lista de activos: " . htmlspecialchars($e->getMessage());
    exit;
}
?>
<section class="section">
    <h2>Eliminar Activos</h2>
    <form action="../controller/activoController.php" method="post">
        <label for="Tipo_Activo">Seleccione el tipo de activo a eliminar</label>
        <select name="ID_Ingreso" id="ID_Ingreso">
            <?php foreach ($activos as $row): ?>
                <option value="<?= htmlspecialchars($row['ID_Ingreso']) ?>">
                    <?= htmlspecialchars($row['Tipo_Activo']) ?>
                </option>
            <?php endforeach; ?>
        </select>
        <input type="submit" name="eliminar" value="Eliminar Activo">
    </form>
</section>
<?php require_once '../footer.php'; ?>