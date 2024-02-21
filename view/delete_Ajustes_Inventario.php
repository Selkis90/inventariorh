<?php
require_once '../header.php';
require_once '../model/Ajustes_inventariosModel.php';

$model = new Ajustes_InventariosModel();

try {
    $ajustesInventariosModel = $model->obtenerAjustes_Inventarios();
} catch (Exception $e) {
    echo "Error al eliminar Ajustes de inventarios: "  . $e->getMessage();
    exit;
}
?>

<form action="../controller/Ajustes_inventariosController.php" method="post">
    <label for="Responsable_Ajuste">Seleccione el Responsable a eliminar</label>
    <select name="ID_Ajuste" id="ID_Ajuste">
        <?php
        $ajustesInventariosModel = $model->obtenerAjustes_Inventarios();

        foreach ($ajustesInventariosModel as $row) {
            echo "<option value='" . $row['ID_Ajuste'] . "'>" . $row['Responsable_Ajuste'] . "</option>";
        }
        ?>
    </select>
    <input type="submit" name="eliminar" value="Eliminar Responsable">
</form>

<?php
require_once '../footer.php';
?>