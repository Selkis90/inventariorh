<?php
// Se incluye el archivo 'header.php' y 'ProveedorModel.php' que probablemente contenga la estructura HTML y elementos comunes del encabezado
require_once '../header.php';
require_once '../model/ProveedorModel.php';
?>

<!-- Encabezado secundario de la página -->
<h2>Crear Proveedor</h2>

<!-- Formulario para crear un proveedor. Los datos se enviarán al controlador 'ProveedorController.php' mediante el método POST -->
<form id="createForm" method="post" action="../controller/ProveedorController.php">

    <!-- Campos del formulario -->
    <label for="nombre">Nombre de la empresa:</label>
    <input type="text" id="nombre" name="nombre" required>

    <label for="contacto">Contacto:</label>
    <input type="text" id="contacto" name="contacto" required>

    <label for="telefono">Teléfono:</label>
    <input type="tel" id="telefono" name="telefono" required>

    <label for="direccion">Dirección:</label>
    <input type="text" id="direccion" name="direccion" required>

    <label for="correoElectronico">Correo Electrónico:</label>
    <input type="email" id="correoElectronico" name="correoElectronico" required>

    <label for="observaciones">Observaciones:</label>
    <textarea id="observaciones" name="observaciones"></textarea>

    <!-- Botón de envío del formulario con el nombre 'crear' -->
    <button type="submit" name="crear">Crear Proveedor</button>
</form>

<?php
// Se incluye el archivo 'footer.php', que probablemente contenga la estructura HTML del pie de página
require_once '../footer.php';
?>