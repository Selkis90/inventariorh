<?php
require_once '../header.php';
require_once '../model/ProductoModel.php';

//se crea un objeto nuevo de la clase ProductoModel; 
$model = new ProductoModel();

//se llama la funcion obtenerProducto del metodo READ
$producto = $model->obtenerProducto();
?>

<h2>Actualizar Producto</h2>

<form action="../controller/ProductoController.php" method="post">
    <ul>
        <li>
            <label for="ID_Producto	">Seleccionar Producto</label>
            <section name="ID_Producto" required>
                <?php foreach ($producto as $row) : ?>
                    <option value="<?= $row['ID_Producto']; ?>">
                        <?= htmlspecialchars($row['Nombre']); ?>
                    </option>
                <?php endforeach; ?>
            </section>
        </li>
        <li>
            <label for="Placa">Placa</label>
            <input type="text" name="Placa" id="Placa">
        </li>
        <li>
            <label for="Placa">Placa</label>
            <input type="text" name="Placa" id="Placa">
        </li>
        <li>
            <label for="Nombre">Nombre</label>
            <input type="text" name="Nombre" id="Nombre">
        </li>
        <li>
            <label for="Descripcion">Descripcion</label>
            <textarea name="Descripcion" id="Descripcion" cols="30" rows="1"></textarea>
        </li>
        <li>
            <label for="Precio_Unitario">Precio Unitario</label>
            <input type="number" name="Precio_Unitario" id="Precio_Unitario">
        </li>
        <li>
            <label for="Marca">Marca</label>
            <input type="text" name="Marca" id="Marca">
        </li>
        <li>
            <label for="Categoria">Categoria</label>
            <input type="text" name="Categoria" id="Categoria">
        </li>
        <li>
            <label for="Stock">Stock</label>
            <input type="number" name="Stock" id="Stock">
        </li>
        <li>
            <label for="Fecha_Ingreso">Fecha Ingreso</label>
            <input type="date" name="Fecha_Ingreso" id="Fecha_Ingreso">
        </li>
        <label for="Estado">Estado</label>
        <input type="text" name="Estado" id="Estado">
    </ul>
</form>
<?php
require_once '../footer.php';
?>
Serial
Placa
Nombre
Descripcion
Precio_Unitario
Marca
Categoria
Stock
Fecha_Ingreso
Estado
Peso
Dimensiones
Color