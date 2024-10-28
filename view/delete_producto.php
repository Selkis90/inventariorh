<?php
require_once '../principal.php';
require_once '../model/ProductoModel.php';

$model = new ProductoModel();

try {
    $producto = $model->obtenerProducto();
} catch (Exception $e) {
    echo "Error al obtener la lista de producto: " . $e->getMessage();
    exit;
}

?>
<section class="section">
    <form action="../controller/ProductoController.php" method="post">
        <label for="Nombre">seleccione el nombre del producto a eliminar</label>
        <select name="ID_Producto" id="ID_Producto">
            <?php
            $producto = $model->obtenerProducto();

            foreach ($producto as $row) {
                echo "<option value='" . $row['ID_Producto'] . "'>" . $row['Nombre'] . "</option>";
            }
            ?>
        </select>
        <input type="submit" name="eliminar" value="Eliminar Producto">
    </form>
</section>
    <?php
    require_once '../footer.php';
    ?>