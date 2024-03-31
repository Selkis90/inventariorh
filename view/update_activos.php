<?php
require_once '../header.php';
require_once '../model/activoModel.php';

$model = new activoModel();

$activo = $model->obtenerActivo();
?>

<h2>Actualizar Activo</h2>

<form action="../controller/activoController.php" method="post">
    <ul>
        <li>
            <label for="ID_Ingreso">Seleccione Activo</label>
            <select name="ID_Ingreso" id="ID_Ingreso" required>
                <?php foreach ($activo as $row) : ?>
                    <option value="<?= $row['ID_Ingreso']; ?>">
                        <?= htmlspecialchars($row['Tipo_Activo']); ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </li>
        <li>
            <label for="Nuevo_Tipo_Activo">Nuevo_Tipo_Activo</label>
            <input type="text" name="Nuevo_Tipo_Activo" id="Nuevo_Tipo_Activo">
        </li>
        <li>
            <label for="Nuevo_Descripcion">Nuevo_Descripcion</label>
            <textarea name="Nuevo_Descripcion" id="Nuevo_Descripcion" cols="30" rows="1"></textarea>
        </li>
        <li>
            <label for="Nuevo_Marca">Nuevo_Marca</label>
            <input type="text" name="Nuevo_Marca" id="Nuevo_Marca">
        </li>
        <li>
            <label for="Nuevo_Modelo">Nuevo_Modelo</label>
            <input type="text" name="Nuevo_Modelo" id="Nuevo_Modelo">
        </li>
        <li>
            <label for="Nuevo_Numero_Serie">Nuevo_Numero_Serie</label>
            <input type="text" name="Nuevo_Numero_Serie" id="Nuevo_Numero_Serie">
        </li>
        <li>
            <label for="Nuevo_Placa">Nuevo_Placa</label>
            <input type="text" name="Nuevo_Placa" id="Nuevo_Placa">
        </li>
        <li>
            <label for="Nuevo_Cantidad">Nuevo_Cantidad</label>
            <input type="number" name="Nuevo_Cantidad" id="Nuevo_Cantidad">
        </li>
        <li>
            <label for="Nuevo_Fecha_Ingreso">Nuevo_Fecha_Ingreso</label>
            <input type="date" name="Nuevo_Fecha_Ingreso" id="Nuevo_Fecha_Ingreso">
        </li>
        <li>
            <label for="Nuevo_Costo_Unitario">Nuevo_Costo_Unitario</label>
            <input type="number" name="Nuevo_Costo_Unitario" id="Nuevo_Costo_Unitario">
        </li>
        <li>
            <label for="Nuevo_Estado">Nuevo_Estado</label>
            <input type="text" name="Nuevo_Estado" id="Nuevo_Estado">
        </li>
        <li>
            <label for="Nuevo_Ubicacion_Almacen">Nuevo_Ubicacion_Almacen</label>
            <input type="text" name="Nuevo_Ubicacion_Almacen" id="Nuevo_Ubicacion_Almacen">
        </li>
        <li>
            <label for="Nuevo_Garantia">Nuevo_Garantia</label>
            <input type="date" name="Nuevo_Garantia" id="Nuevo_Garantia">
        </li>
        <li>
            <label for="Nuevo_Vida_Util">Nuevo_Vida_Util</label>
            <input type="number" name="Nuevo_Vida_Util" id="Nuevo_Vida_Util">
        </li>
        <li>
            <label for="Nuevo_Fecha_Caducidad">Nuevo_Fecha_Caducidad</label>
            <input type="date" name="Nuevo_Fecha_Caducidad" id="Nuevo_Fecha_Caducidad">
        </li>
        <li>
            <label for="Nuevo_Proxima_Fecha_Calibracion">Nuevo_Proxima_Fecha_Calibracion</label>
            <input type="date" name="Nuevo_Proxima_Fecha_Calibracion" id="Nuevo_Proxima_Fecha_Calibracion">
        </li>
        <li>
            <label for="Nuevo_Observaciones">Nuevo_Observaciones</label>
            <textarea name="Nuevo_Observaciones" id="Nuevo_Observaciones" cols="30" rows="1"></textarea>
        </li>
        <li>
            <button type="submit" name="actualizar">Actualizar</button>
        </li>
    </ul>
</form>
<?php
require_once '../footer.php';
?>
<!--  
	
Tipo_Activo	
Descripcion	
Marca	
Modelo	
Numero_Serie	
Placa	
Cantidad	
Fecha_Ingreso		
Costo_Unitario	
Estado	
Ubicacion_Almacen	
Garantia	
Vida_Util	
Fecha_Caducidad	
Proxima_Fecha_Calibracion	
Observaciones	
-->