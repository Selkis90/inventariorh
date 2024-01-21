<?php
    require_once '../header.php';
    require_once '../model/ComprasModel.php';
?>

<form action="../controller/ComprasController.php" method="post">
    <ul>
        <li>
            <label for="Numero_Orden_Compra">Numero_Orden_Compra</label>
            <input type="text" name="Numero_Orden_Compra" id="Numero_Orden_Compra" required>
        </li>
        <li>
            <label for="Fecha_Compra">Fecha_Compra</label>
            <input type="date" name="Fecha_Compra" id="Fecha_Compra" required>
        </li>
        <li>
            <label for="Total_Compra">Total_Compra</label>
            <input type="number" name="Total_Compra" id="Total_Compra" required>
        </li>
        <li>
            <label for="Numero_Factura">Numero_Factura</label>
            <input type="text" name="Numero_Factura" id="Numero_Factura" required>
        </li>
        <li>
            <label for="Metodo_Pago">Metodo_Pago</label>
            <input type="text" name="Metodo_Pago" id="Metodo_Pago" required>
        </li>
        <li>
            <label for="Estado">Estado</label>
            <input type="text" name="Estado" id="Estado" required>
        </li>
        <li>
            <label for="Observaciones">Observaciones</label>
            <textarea name="Observaciones" id="Observaciones" cols="30" rows="1"></textarea>
        </li>
        <li>
            <label for="Detalles">Detalles</label>
            <textarea name="Detalles" id="Detalles" cols="30" rows="1"></textarea>

        <li>
            <button type="submit" name ="crear">Crear Compra</button>
        </li>
    </ul>
</form>

<?php
    require_once '../footer.php';
?>
