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
            <label for="ID_Producto	">Seleccionar Producto:</label>
            <select name="ID_Producto" required>
                <?php foreach ($producto as $row) : ?>
                    <option value="<?= $row['ID_Producto']; ?>">
                        <?= htmlspecialchars($row['Nombre']); ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </li>
        <li>
            <label for="Nuevo_Serial">Nuevo Serial</label>
            <input type="text" name="Nuevo_Serial" id="Nuevo_Serial">
        </li>
        <li>
            <label for="Nueva_Placa">Nueva Placa</label>
            <input type="text" name="Nueva_Placa" id="Nueva_Placa">
        </li>
        <li>
            <label for="Nuevo_Nombre">Nuevo Nombre</label>
            <input type="text" name="Nuevo_Nombre" id="Nuevo_Nombre">
        </li>
        <li>
            <label for="Nueva_Descripcion">Nueva Descripcion</label>
            <textarea name="Nueva_Descripcion" id="Nueva_Descripcion" cols="30" rows="1"></textarea>
        </li>
        <li>
            <label for="Nuevo_Precio_Unitario">Nuevo_Precio_Unitario</label>
            <input type="number" name="Nuevo_Precio_Unitario" id="Nuevo_Precio_Unitario">
        </li>
        <li>
            <label for="Nueva_Marca">Nueva Marca</label>
            <input type="text" name="Nueva_Marca" id="Nueva_Marca">
        </li>
        <li>
            <label for="Nueva_Categoria">Nueva_Categoria</label>
            <input type="text" name="Nueva_Categoria" id="Nueva_Categoria">
        </li>
        <li>
            <label for="Nuevo_Stock">Nuevo_Stock</label>
            <input type="number" name="Nuevo_Stock" id="Nuevo_Stock">
        </li>
        <li>
            <label for="Nueva_Fecha_Ingreso">Nueva_Fecha_Ingreso</label>
            <input type="date" name="Nueva_Fecha_Ingreso" id="Nueva_Fecha_Ingreso">
        </li>
        <li>
            <label for="Nuevo_Estado">Nuevo_Estado</label>
            <input type="text" name="Nuevo_Estado" id="Nuevo_Estado">
        </li>
        <li>
            <label for="Nuevo_Peso">Nuevo_Peso</label>
            <input type="number" name="Nuevo_Peso" id="Nuevo_Peso">
        </li>
        <li>
            <label for="Nueva_Dimensiones">Nueva_Dimensiones</label>
            <input type="text" name="Nueva_Dimensiones" id="Nueva_Dimensiones" placeholder="Largo,Alto, Ancho">
        </li>
        <li>
            <label for="Nuevo_Color">Nuevo_Color</label>
            <input type="text" name="Nuevo_Color" id="Nuevo_Color">
        </li>
        <li>
            <button type="submit" name="actualizar">Actualizar</button>
        </li>
    </ul>
</form>
<?php
require_once '../footer.php';
?>
