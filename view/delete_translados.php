<?php
require_once '../principal.php';
require_once '../model/TransladoModel.php';

$model = new TransladoModel();

try {
    $translado = $model->obtenerTranslado();
} catch (Exception $e) {
    echo "Error al obtener translados: " . $e->getMessage();
    exit;
}
?>
<section class="section">
    <h2>Eliminar Translado</h2>
    <form action="../controller/TransladosController.php" method="post">
        <label for="ID_Traslado">Seleccione el tipo de translado a eliminar</label>
        <select name="ID_Traslado" id="ID_Traslado">
            <?php foreach ($translado as $row): ?>
                <option value="<?= htmlspecialchars($row['ID_Traslado']) ?>">
                    <?= htmlspecialchars($row['Tipo_Activo']) ?>
                </option>
            <?php endforeach; ?>
        </select>
        <input type="submit" name="eliminar" value="Eliminar Translado">
    </form>
</section>
<?php require_once '../footer.php'; ?>