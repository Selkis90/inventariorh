<?php
require_once '../principal.php';
require_once '../model/Ajustes_inventariosModel.php';

$model = new Ajustes_InventariosModel();

$AjustesInventariosModel = $model->obtenerAjustes_Inventarios();
?>
<section class="section">
    <h2>Actualizar Inventarios</h2>

    <form action="../controller/Ajustes_inventariosController.php" method="post">
        <ul>
            <li>
                <label for="ID_Ajuste">Cantidad_Ajustada</label>
                <select name="ID_Ajuste" id="ID_Ajuste" required>
                    <?php foreach ($AjustesInventariosModel as $row) : ?>
                        <option value="<?= $row['ID_Ajuste']; ?>">
                            <?= htmlspecialchars($row['Cantidad_Ajustada']); ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </li>
            <li>
                <label for="Nuevo_Cantidad_Ajustada">Nuevo_Cantidad_Ajustada</label>
                <input type="number" name="Nuevo_Cantidad_Ajustada" id="Nuevo_Cantidad_Ajustada">
            </li>
            <li>
                <label for="Nuevo_Motivo">Nuevo_Motivo</label>
                <input type="text" name="Nuevo_Motivo" id="Nuevo_Motivo">
            </li>
            <li>
                <label for="Nuevo_Fecha_Ajuste">Nuevo_Fecha_Ajuste</label>
                <input type="date" name="Nuevo_Fecha_Ajuste" id="Nuevo_Fecha_Ajuste">
            </li>
            <li>
                <label for="Nuevo_Responsable_Ajuste">Nuevo_Responsable_Ajuste</label>
                <input type="text" name="Nuevo_Responsable_Ajuste" id="Nuevo_Responsable_Ajuste">
            </li>
            <li>
                <label for="Nuevo_Comentarios">Nuevo_Comentarios</label>
                <textarea name="Nuevo_Comentarios" id="Nuevo_Comentarios" cols="30" rows="1"></textarea>
            </li>
            <li>
                <label for="Nuevo_Tipo_Ajuste">Tipo_Ajuste</label>
                <select name="Nuevo_Tipo_Ajuste">
                    <option value="Incremento">Incremento</option>
                    <option value="Decremento">Decremento</option>
                </select>
            </li>
            <li>
                <label for="Nuevo_Documento_Relacionado">Nuevo_Documento_Relacionado</label>
                <input type="text" name="Nuevo_Documento_Relacionado" id="Nuevo_Documento_Relacionado">
            </li>
            <li>
                <button type="submit" name="actualizar">Actualizar Inventario</button>
            </li>
        </ul>
    </form>

</section>

    <?php
    require_once '../footer.php';
    ?>