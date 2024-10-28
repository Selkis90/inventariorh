<?php
require_once '../principal.php';
require_once '../model/ProveedorModel.php';

$model = new ProveedorModel();

try {
    $proveedor = $model->obtenerProveedor();
} catch (Exception $e) {
    echo "Error al obtener la lista del proveedor: " . $e->getMessage();
    exit;
}
?>
<section class="section">
    <form action="../controller/ProveedorController.php" method="post">
        <label for="Nombre">Seleccione el nombre del proveedor</label>
        <select name="ID_Proveedor" id="ID_Proveedor">
            <?php
            $proveedor = $model->obtenerProveedor();

            foreach ($proveedor as $row) {
                echo "<option value='" . $row['ID_Proveedor'] . "'>" . $row['Nombre'] . "</option>";
            }
            ?>
        </select>
        <input type="submit" name="eliminar" value="Eliminar proveedor">
    </form>
</section>
    <?php
    require_once '../footer.php';
    ?>