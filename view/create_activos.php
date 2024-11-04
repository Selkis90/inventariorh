<?php
// Se incluye el archivo 'header.php' y 'activoModel.php', que probablemente contenga la estructura HTML y elementos comunes del encabezado
require_once '../principal.php';
require_once '../model/activoModel.php';

?>
<section class="section">
    <!-- Encabezado secundario de la página -->
    <h2>Crear activo</h2>

    <!-- Formulario para crear un activo. Los datos se enviarán al controlador 'activoController.php' mediante el método POST -->
    <form action="../controller/activoController.php" method="post">
        <ul>
            <!-- Campo: Tipo de Activo -->
            <li>
                <label for="Tipo_Activo">Tipo Activo</label>
                <input type="text" name="Tipo_Activo" id="Tipo_Activo" required>
            </li>
            <!-- Campo: Descripción -->
            <li>
                <label for="Descripcion">Descripcion</label>
                <textarea name="Descripcion" id="Descripcion" cols="30" rows="1"></textarea>
            </li>
            <!-- Campo: Marca -->
            <li>
                <label for="Marca">Marca</label>
                <input type="text" name="Marca" id="Marca" required>
            </li>
            <!-- Campo: Modelo -->
            <li>
                <label for="Modelo">Modelo</label>
                <input type="text" name="Modelo" id="Modelo" required>
            </li>
            <!-- Campo: Número de Serie -->
            <li>
                <label for="Numero_Serie">Numero Serie</label>
                <input type="text" name="Numero_Serie" id="Numero_Serie" required>
            </li>
            <!-- Campo: Placa -->
            <li>
                <label for="Placa">Placa</label>
                <input type="text" name="Placa" id="Placa" required>
            </li>
            <!-- Campo: Cantidad -->
            <li>
                <label for="Cantidad">Cantidad</label>
                <input type="number" name="Cantidad" id="Cantidad" required>
            </li>
            <!-- Campo: Fecha de Ingreso -->
            <li>
                <label for="Fecha_Ingreso">Fecha Ingreso</label>
                <input type="date" name="Fecha_Ingreso" id="Fecha_Ingreso" required>
            </li>
            <!-- Campo: Costo Unitario -->
            <li>
                <label for="Costo_Unitario">Costo Unitario</label>
                <input type="number" name="Costo_Unitario" id="Costo_Unitario" required>
            </li>
            <!-- Campo: Estado -->
            <li>
                <label for="Estado">Estado</label>
                <input type="text" name="Estado" id="Estado" required>
            </li>
            <!-- Campo: Ubicación en Almacén -->
            <li>
                <label for="Ubicacion_Almacen">Ubicacion Almacen</label>
                <input type="text" name="Ubicacion_Almacen" id="Ubicacion_Almacen" required>
            </li>
            <!-- Campo: Garantía -->
            <li>
                <label for="Garantia">Garantia</label>
                <input type="date" name="Garantia" id="Garantia" required>
            </li>
            <!-- Campo: Vida Útil -->
            <li>
                <label for="Vida_Util">Vida Util</label>
                <input type="number" name="Vida_Util" id="Vida_Util" required>
            </li>
            <!-- Campo: Fecha de Caducidad -->
            <li>
                <label for="Fecha_Caducidad">Fecha Caducidad</label>
                <input type="date" name="Fecha_Caducidad" id="Fecha_Caducidad" required>
            </li>
            <!-- Campo: Próxima Fecha de Calibración -->
            <li>
                <label for="Proxima_Fecha_Calibracion">Proxima Fecha Calibracion</label>
                <input type="date" name="Proxima_Fecha_Calibracion" id="Proxima_Fecha_Calibracion" required>
            </li>
            <!-- Campo: Observaciones -->
            <li>
                <label for="Observaciones">Observaciones</label>
                <textarea name="Observaciones" id="Observaciones" cols="30" rows="1"></textarea>
            </li>
            <!-- Botón de envío del formulario con el nombre 'crear' -->
            <li>
                <button type="submit" name="crear">Crear Activo</button>
            </li>
        </ul>
    </form>
</section>
<?php
// Se incluye el archivo 'footer.php', que probablemente contenga la estructura HTML del pie de página
require_once '../footer.php';
?>