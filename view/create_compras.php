<?php
// Se incluye el archivo 'header.php' y 'ComprasModel.php', que probablemente contenga la estructura HTML y elementos comunes del encabezado
require_once '../header.php';
require_once '../model/ComprasModel.php';
?>

<!-- Formulario para crear una compra. Los datos se enviarán al controlador 'ComprasController.php' mediante el método POST -->
<form action="../controller/ComprasController.php" method="post">
    <ul>
        <!-- Campo: Numero de Orden de Compra -->
        <li>
            <label for="Numero_Orden_Compra">Numero_Orden_Compra</label>
            <input type="text" name="Numero_Orden_Compra" id="Numero_Orden_Compra" required>
        </li>
        <!-- Campo: Fecha de Compra -->
        <li>
            <label for="Fecha_Compra">Fecha_Compra</label>
            <input type="date" name="Fecha_Compra" id="Fecha_Compra" required>
        </li>
        <!-- Campo: Total de la Compra -->
        <li>
            <label for="Total_Compra">Total_Compra</label>
            <input type="number" name="Total_Compra" id="Total_Compra" required>
        </li>
        <!-- Campo: Numero de Factura -->
        <li>
            <label for="Numero_Factura">Numero_Factura</label>
            <input type="text" name="Numero_Factura" id="Numero_Factura" required>
        </li>
        <!-- Campo: Metodo de Pago -->
        <li>
            <label for="Metodo_Pago">Metodo_Pago</label>
            <input type="text" name="Metodo_Pago" id="Metodo_Pago" required>
        </li>
        <!-- Campo: Estado de la Compra -->
        <li>
            <label for="Estado">Estado</label>
            <input type="text" name="Estado" id="Estado" required>
        </li>
        <!-- Campo: Observaciones -->
        <li>
            <label for="Observaciones">Observaciones</label>
            <textarea name="Observaciones" id="Observaciones" cols="30" rows="1"></textarea>
        </li>
        <!-- Campo: Detalles -->
        <li>
            <label for="Detalles">Detalles</label>
            <textarea name="Detalles" id="Detalles" cols="30" rows="1"></textarea>
        </li>
        <!-- Botón de envío del formulario con el nombre 'crear' -->
        <li>
            <button type="submit" name="crear">Crear Compra</button>
        </li>
    </ul>
</form>

<?php
// Se incluye el archivo 'footer.php', que probablemente contenga la estructura HTML del pie de página
require_once '../footer.php';
?>