<?php
    require_once '../header.php';
    require_once '../model/ComprasModel.php';

    $model = new ComprasModel();

    try {
        $compra = $model->obtenerCompras();
    } catch (Exception $e) {
        echo "Error al obtener la lista de compras: " . $e->getMessage();
        exit;
    }
?>

<form action="../controller/ComprasController.php" method="post">
    <label for="Numero_Factura">Seleccione el Numero_Orden_Compra</label>
    <select name="ID_Compra" id="ID_Compra">
        <?php
            $compra = $model->obtenerCompras();

            foreach ($compra as $row) {
                echo "<option value='" . $row['ID_Compra'] . "'>" . $row['Numero_Orden_Compra'] . "</option>";
            }
        ?>
    </select>

    <input type="submit" name="eliminar" value="Eliminar compra">
</form>

<?php
    require_once '../footer.php';
?>