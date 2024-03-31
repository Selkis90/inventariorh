<?php
require_once '../header.php';
require_once '../model/ProveedorModel.php';

$model = new ProveedorModel();

$proveedor = $model->obtenerProveedor();

?>

<h2>Actualizar Proveedor</h2>

<form action="../controller/ProveedorController.php" method="post">
    <ul>
        <li>
            <label for="ID_Proveedor">Seleccionar Proveedor</label>
            <select name="ID_Proveedor" id="ID_Proveedor" required>
                <?php foreach ($proveedor as $row) : ?>
                    <option value="<?= $row['ID_Proveedor']; ?>">
                        <?= htmlspecialchars($row['Nombre']); ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </li>
        <li>
            <label for="Nuevo_Nombre">Nuevo_Nombre:</label>
            <input type="text" name="Nuevo_Nombre" id="Nuevo_Nombre">
        </li>
        <li>
            <label for="Nuevo_Contacto">Nuevo_Contacto</label>
            <input type="text" name="Nuevo_Contacto" id="Nuevo_Contacto">
        </li>
        <li>
            <label for="Nuevo_Telefono">Nuevo_Telefono</label>
            <input type="text" name="Nuevo_Telefono" id="Nuevo_Telefono">
        </li>
        <li>
            <label for="Nuevo_Direccion">Nuevo_Direccion</label>
            <textarea name="Nuevo_Direccion" id="Nuevo_Direccion" cols="30" rows="1"></textarea>
        </li>
        <li>
            <label for="Nuevo_Correo_Electronico">Nuevo_Correo_Electronico</label>
            <input type="text" name="Nuevo_Correo_Electronico" id="Nuevo_Correo_Electronico">
        </li>
        <li>
            <label for="Nuevo_Observaciones">Nuevo_Observaciones</label>
            <textarea name="Nuevo_Observaciones" id="Nuevo_Observaciones" cols="30" rows="1"></textarea>
        </li>
        <li>
            <button type="submit" name="actualizar">Actualizar Proveedor</button>
        </li>
    </ul>
</form>

<?php
require_once '../footer.php';
?>