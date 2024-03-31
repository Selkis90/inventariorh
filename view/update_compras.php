<?php
require_once '../header.php';
require_once '../model/ComprasModel.php';

$model = new ComprasModel();

$compras = $model->obtenerCompras();
?>

<h2>Actualizar Compras</h2>

<form action="../controller/ComprasController.php" method="post">
    <ul>
        <li>
            <label for="ID_Compra">Seleccione la compra:</label>
            <select name="ID_Compra" id="ID_Compra" required>
                <?php foreach ($compras as $row) : ?>
                    <option value="<?= $row['ID_Compra']; ?>">
                        <?= htmlspecialchars($row['Numero_Factura']); ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </li>
        <li>
            <label for="Nuevo_Numero_Orden_Compra">Nuevo_Numero Orden Compra</label>
            <input type="text" name="Nuevo_Numero_Orden_Compra" id="Nuevo_Numero_Orden_Compra">
        </li>
        <li>
            <label for="Nuevo_Fecha_Compra">Nuevo_Fecha_Compra</label>
            <input type="date" name="Nuevo_Fecha_Compra" id="Nuevo_Fecha_Compra">
        </li>
        <li>
            <label for="Nuevo_Total_Compra">Nuevo_Total_Compra</label>
            <input type="number" name="Nuevo_Total_Compra" id="Nuevo_Total_Compra">
        </li>
        <li>
            <label for="Nuevo_Numero_Factura">Nuevo_Numero_Factura</label>
            <input type="text" name="Nuevo_Numero_Factura" id="Nuevo_Numero_Factura">
        </li>
        <li>
            <label for="Nuevo_Metodo_Pago">Nuevo_Metodo_Pago</label>
            <input type="text" name="Nuevo_Metodo_Pago" id="Nuevo_Metodo_Pago">
        </li>
        <li>
            <label for="Nuevo_Estado">Nuevo_Estado</label>
            <input type="text" name="Nuevo_Estado" id="Nuevo_Estado">
        </li>
        <li>
            <label for="Nuevo_Observaciones">Nuevo_Observaciones</label>
            <textarea name="Nuevo_Observaciones" id="Nuevo_Observaciones" cols="30" rows="1"></textarea>
        </li>
        <li>
            <label for="Nuevo_Detalles">Nuevo_Detalles</label>
            <textarea name="Nuevo_Detalles" id="Nuevo_Detalles" cols="30" rows="1"></textarea>
        </li>
        <li>
            <button type="submit" name="actualizar">Actualizar</button>
        </li>
    </ul>
</form>

<?php
require_once '../footer.php';
?>