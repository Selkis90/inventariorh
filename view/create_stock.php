<?php
    // Incluye el encabezado de la página y el modelo relacionado con el stock.
    require_once '../header.php';
    require_once '../model/StockModel.php';
?>

<!-- Título de la página -->
<h2>Crear stock</h2>

<!-- Formulario para crear stock. Los datos se enviarán al controlador StockController.php mediante el método POST. -->
<!-- Se asumió que el controlador está un nivel arriba (../../controller/StockController.php) desde la ubicación actual del archivo. -->
<form action="../controller/StockController.php" method="post">
    <ul>
        <!-- Campo: Nombre del Producto -->
        <li>
            <label for="Nombre_Producto">Nombre del Producto</label>
            <input type="text" name="Nombre_Producto" id="Nombre_Producto" required>
        </li>
        <!-- Campo: Cantidad -->
        <li>
            <label for="Cantidad">Cantidad</label>
            <input type="number" name="Cantidad" id="Cantidad" required>
        </li>
        <!-- Botón de envío del formulario con la etiqueta 'crear'. -->
        <li>
            <button type="submit" name="crear">Crear Stock</button>
        </li>
    </ul>
</form>

<?php
    // Incluye el pie de página, que puede contener información adicional o scripts necesarios para la página.
    require_once '../footer.php';
?>

