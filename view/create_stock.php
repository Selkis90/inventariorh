<?php
    require_once '../header.php';
    require_once '../model/StockModel.php';
?>
<h2>Crear stock</h2>

<form action="../controller/StockController.php" method="post">
    <label for="Nombre_Producto">Nombre del Producto</label>
    <input type="text" name="Nombre_Producto" id="Nombre_Producto" required>

    <label for="Cantidad">Cantidad</label>
    <input type="number" name="Cantidad" id="Cantidad" required>

    <button type="submit" name="crear">Crear Stock</button>
</form>
<?php
    require_once '../footer.php';
?>