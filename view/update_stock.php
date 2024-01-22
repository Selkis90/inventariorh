<?php
require_once '../header.php';
require_once '../model/StockModel.php';

$model = new StockModel();

// Obtener el stock actual para mostrar en el formulario de actualización
$stock = $model->obtenerStock();

// ... Código HTML para mostrar el formulario de actualización ...
?>

<!-- Título de la página -->
<h2>Actualizar Stock</h2>
<form action="../controller/StockController.php" method="post">
    <!-- Agrega un campo de selección para elegir el stock a actualizar -->
    <label for="ID_Stock">Seleccionar Stock:</label>
    <select name="ID_Stock" required>
        <?php foreach ($stock as $row): ?>
            <option value="<?= $row['ID_Stock']; ?>">
                <?= htmlspecialchars($row['Nombre_Producto']); ?>
            </option>
        <?php endforeach; ?>
    </select>

    <!-- Agrega campos para los nuevos valores -->
    <label for="Nuevo_Nombre_Producto">Nuevo Nombre del Producto:</label>
    <input type="text" name="Nuevo_Nombre_Producto" required>

    <label for="Nueva_Cantidad">Nueva Cantidad:</label>
    <input type="number" name="Nueva_Cantidad" required>

    <!-- Botón de envío del formulario con la etiqueta 'actualizar' -->
    <button type="submit" name="actualizar">Actualizar Stock</button>
</form>

<?php
require_once '../footer.php';
?>
