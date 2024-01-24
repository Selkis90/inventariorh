<?php
// Se incluye el archivo 'header.php', que probablemente contenga la estructura HTML y elementos comunes del encabezado
require_once '../header.php';
?>

<!-- Lista de enlaces de navegación para acciones relacionadas con Ajustes de inventarios -->
<ul>
    <li><a href="create_Ajustes_inventario.php">Crear Ajustes inventarios</a></li>
    <!-- Enlace para crear un nuevo ajuste de inventario -->
    <li><a href="view_Ajustes_Inventario.php">Ver Ajustes inventarios</a></li>
    <!-- Enlace para ver los ajustes de inventario existentes -->
    <li><a href="update_Ajustes_Inventario.php">Actualizar Ajustes inventarios</a></li>
    <!-- Enlace para actualizar información de ajustes de inventario -->
    <li><a href="delete_Ajustes_Inventario.php">Eliminar Ajustes inventarios</a></li>
    <!-- Enlace para eliminar un ajuste de inventario -->
</ul>

<?php
// Se incluye el archivo 'footer.php', que probablemente contenga la estructura HTML del pie de página
require_once '../footer.php';
?>