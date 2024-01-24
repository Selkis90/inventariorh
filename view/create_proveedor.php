<?php
// Incluye el archivo 'header.php' y 'ProveedorModel.php', que probablemente contenga la estructura HTML y elementos comunes del encabezado
require_once '../header.php';
require_once '../model/ProveedorModel.php';
?>

<!-- Encabezado secundario de la página -->
<h2>Crear Proveedor</h2>

<!-- Formulario para crear un proveedor. Los datos se enviarán al controlador 'ProveedorController.php' mediante el método POST -->
<form id="createForm" method="post" action="../controller/ProveedorController.php">
    <ul>
        <!-- Campo: Nombre de la empresa -->
        <li>
            <label for="nombre">Nombre de la empresa:</label>
            <input type="text" id="nombre" name="nombre" required>
        </li>
        <!-- Campo: Contacto -->
        <li>
            <label for="contacto">Contacto:</label>
            <input type="text" id="contacto" name="contacto" required>
        </li>
        <!-- Campo: Teléfono -->
        <li>
            <label for="telefono">Teléfono:</label>
            <input type="text" id="telefono" name="telefono" required>
        </li>
        <!-- Campo: Dirección -->
        <li>
            <label for="direccion">Dirección:</label>
            <input type="text" id="direccion" name="direccion" required>
        </li>
        <!-- Campo: Correo Electrónico -->
        <li>
            <label for="correoElectronico">Correo Electrónico:</label>
            <input type="email" id="correoElectronico" name="correoElectronico" required>
        </li>
        <!-- Campo: Observaciones -->
        <li>
            <label for="observaciones">Observaciones:</label>
            <textarea id="observaciones" name="observaciones" cols="30" rows="1"></textarea>
        </li>
        <!-- Botón de envío del formulario con el nombre 'crear' -->
        <li>
            <button type="submit" name="crear">Crear Proveedor</button>
        </li>
    </ul>
</form>

<?php
// Incluye el archivo 'footer.php', que probablemente contenga la estructura HTML del pie de página
require_once '../footer.php';
?>