<?php
    // Se incluye el archivo 'header.php' mediante 'include_once', que posiblemente contenga la estructura HTML y elementos comunes del encabezado
    include_once '../header.php';
?>

<!-- Lista de enlaces de navegación para acciones relacionadas con Activos -->
<ul>
    <li><a href="create_activos.php">Crear Activo</a></li> <!-- Enlace para acceder a la página de creación de un nuevo activo -->
    <li><a href="view_activos.php">Ver Activos</a></li> <!-- Enlace para visualizar la lista de activos existentes -->
    <li><a href="update_activos.php">Actualizar Activos</a></li> <!-- Enlace para acceder a la página de actualización de activos -->
    <li><a href="delete_activos.php">Eliminar Activos</a></li> <!-- Enlace para acceder a la página de eliminación de activos -->
</ul>

<?php
    // Se incluye el archivo 'footer.php' mediante 'require_once', que posiblemente contenga la estructura HTML del pie de página
    require_once '../footer.php';
?>
