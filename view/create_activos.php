<?php
    require_once '../header.php';
    require_once '../model/activoModel.php';
?>

<h2>Crear activo</h2>

<form action="../controller/activoController.php" method="post">
    <ul>
        <li>
            <label for="Tipo_Activo">Tipo Activo</label>
            <input type="text" name="Tipo_Activo" id="Tipo_Activo" required>
        </li>
        <li>
            <label for="Descripcion">Descripcion</label>
            <textarea name="Descripcion" id="Descripcion" cols="30" rows="1"></textarea>
        </li>
        <li>
            <label for="Marca">Marca</label>
            <input type="text" name="Marca" id="Marca" required>
        </li>
        <li>
            <label for="Modelo">Modelo</label>
            <input type="text" name="Modelo" id="Modelo" required>
        </li>
        <li>
            <label for="Numero_Serie">Numero Serie</label>
            <input type="text" name="Numero_Serie" id="Numero_Serie" required>
        </li>
        <li>
            <label for="Placa">Placa</label>
            <input type="text" name="Placa" id="Placa" required>
        </li>
        <li>
            <label for="Cantidad">Cantidad</label>
            <input type="number" name="Cantidad" id="Cantidad" required>
        </li>
        <li>
            <label for="Fecha_Ingreso">Fecha Ingreso</label>
            <input type="date" name="Fecha_Ingreso" id="Fecha_Ingreso" required>
        </li>
        <li>
            <label for="Costo_Unitario">Costo Unitario</label>
            <input type="number" name="Costo_Unitario" id="Costo_Unitario" required>
        </li>
        <li>
            <label for="Estado">Estado</label>
            <input type="text" name="Estado" id="Estado" required>
        </li>
        <li>
            <label for="Ubicacion_Almacen">Ubicacion Almacen</label>
            <input type="text" name="Ubicacion_Almacen" id="Ubicacion_Almacen" required>
        </li>
        <li>
            <label for="Garantia">Garantia</label>
            <input type="date" name="Garantia" id="Garantia" required>
        </li>
        <li>
            <label for="Vida_Util">Vida Util</label>
            <input type="number" name="Vida_Util" id="Vida_Util" required>
        </li>
        <li>
            <label for="Fecha_Caducidad">Fecha Caducidad</label>
            <input type="date" name="Fecha_Caducidad" id="Fecha_Caducidad" required>
        </li>
        <li>
            <label for="Proxima_Fecha_Calibracion">Proxima Fecha Calibracion</label>
            <input type="date" name="Proxima_Fecha_Calibracion" id="Proxima_Fecha_Calibracion" required>
        </li>
        <li>
            <label for="Observaciones">Observaciones</label>
            <textarea name="Observaciones" id="Observaciones" cols="30" rows="1"></textarea>
        </li>
        <li>
            <button type="submit" name="crear">Crear Activo</button>
        </li>
    </ul>
</form>

<?php
    require_once '../footer.php';
?>