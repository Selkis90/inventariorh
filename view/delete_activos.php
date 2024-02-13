<?php
require_once '../header.php';
require_once '../model/activoModel.php';

$model = new activoModel();

try {
    $activo = $model->obtenerActivo();
} catch (Exception $e) {
    echo "Error al obtener la lista de producto_: " . $e->getMessage();
    exit;
}
?>

<form action="../controller/activoController.php" method="post">
    <label for="Tipo_Activo">Seleccione el tipo de activo a eliminar</label>
    <select name="ID_Ingreso" id="ID_Ingreso ">
        <?php
        $activo = $model->obtenerActivo();
        foreach ($activo as $row) {
            echo "<option value='" . $row['ID_Ingreso'] . "'>" . $row['Tipo_Activo'] . "</option>";
        }
        ?>
    </select>

    <input type="submit" name="eliminar" value="ELiminar Activo">
</form>
<?php
    require_once '../footer.php';
?>