<?php
// Se incluye el archivo 'header.php', que probablemente contenga la estructura HTML y elementos comunes del encabezado
require_once '../principal.php';
?>
<!-- Lista de opciones con enlaces -->
<p>Seleccione una opción:</p>
<ul>
    <li><a href="create_producto.php">Crear producto</a></li><!-- Enlace para crear un nuevo producto -->
    <li><a href="view_producto.php">Ver productos</a></li><!-- Enlace para ver productos existentes -->
    <li><a href="update_producto.php">Actualizar Producto</a></li><!-- Enlace para actualizar información de productos -->
    <li><a href="delete_producto.php">Eliminar Producto</a></li><!-- Enlace para eliminar un producto -->
</ul>

<?php
// Se incluye el archivo 'footer.php', que probablemente contenga la estructura HTML del pie de página
require_once '../footer.php';
?>