<?php
require_once '../principal.php';
require_once '../model/Ajustes_inventariosModel.php';

$model = new Ajustes_InventariosModel();

try {
    $ajustesInventarios = $model->obtenerAjustes_Inventarios();
} catch (Exception $e) {
    echo "Error al obtener Ajustes de inventarios: " . htmlspecialchars($e->getMessage());
    exit;
}
?>
<section class="section">
    <h2>Eliminar Ajustes</h2>
    <form action="../controller/Ajustes_inventariosController.php" method="post">
        <label for="Responsable_Ajuste">Seleccione el Responsable a eliminar</label>
        <select name="ID_Ajuste" id="ID_Ajuste">
            <?php foreach ($ajustesInventarios as $row): ?>
                <option value="<?= htmlspecialchars($row['ID_Ajuste']) ?>">
                    <?= htmlspecialchars($row['Responsable_Ajuste']) ?>
                </option>
            <?php endforeach; ?>
        </select>
        <input type="submit" name="eliminar" value="Eliminar Responsable">
    </form>
</section>
<?php require_once '../footer.php'; ?>