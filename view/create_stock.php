<?php
    require_once '../header.php';
    require_once '../model/StockModel.php';
?>
<h2>Crear stock</h2>

<!-- <form action="../controller/StockController.php" method="post">   -->
<form action="../../controller/StockController.php" method="post">
    <ul>
        <li>
            <label for="Nombre_Producto">Nombre del Producto</label>
            <input type="text" name="Nombre_Producto" id="Nombre_Producto" required>
        </li>
        <li>
            <label for="Cantidad">Cantidad</label>
            <input type="number" name="Cantidad" id="Cantidad" required>
        </li>
        <li>
            <button type="submit" name="crear">Crear Stock</button>
        </li>
    </ul>
</form>
<?php
    require_once '../../footer.php';
?>


