<?php
// Se incluye el archivo 'header.php', que probablemente contenga la estructura HTML y elementos comunes del encabezado
require_once '../header.php';
?>

<!-- Lista de enlaces de navegación para acciones relacionadas con compras -->
<ul>
    <li><a href="create_compras.php">Crear compra</a></li> <!-- Enlace para crear una nueva compra -->
    <li><a href="view_compras.php">Ver compras</a></li> <!-- Enlace para ver las compras existentes -->
    <li><a href="update_compras.php">Actualizar compra</a></li> <!-- Enlace para actualizar información de compras -->
    <li><a href="delete_compras.php">Eliminar compra</a></li> <!-- Enlace para eliminar una compra -->
</ul>

<?php
// Se incluye el archivo 'footer.php', que probablemente contenga la estructura HTML del pie de página
require_once '../footer.php';
?>