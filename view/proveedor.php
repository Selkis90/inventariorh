<?php
// Se incluye el archivo 'header.php', que probablemente contenga la estructura HTML y elementos comunes del encabezado
require_once '../header.php';
?>
<p>Seleccione una opción:</p>
<!-- Lista de opciones con enlaces -->
<ul>
    <li><a href="create_proveedor.php">Crear Proveedor</a></li> <!-- Enlace para crear un nuevo proveedor -->
    <li><a href="view_proveedor.php"> Ver Proveedor o proveedores</a></li>
    <!-- Enlace para ver proveedores existentes -->
    <li><a href="update_proveedor.php">Actualizar Proveedor</a></li>
    <!-- Enlace para actualizar información de proveedores -->
    <li><a href="delete_proveedor.php">Eliminar Proveedor</a></li> <!-- Enlace para eliminar un proveedor -->
    <!-- Puedes agregar más enlaces según las secciones de tu aplicación -->
</ul>
<?php
// Se incluye el archivo 'footer.php', que probablemente contenga la estructura HTML del pie de página
require_once '../footer.php';
?>