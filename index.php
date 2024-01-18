<?php
// Se incluye el archivo 'header.php', que probablemente contenga la estructura HTML y elementos comunes del encabezado
require_once 'header.php';
?>
<p>Seleccione una opción:</p>
<!-- Lista de opciones con enlaces -->
<ul>
    <li><a href="view/proveedor.php">Proveedor</a></li> <!-- Enlace para ver la sección de proveedores -->
    <li><a href="view/producto.php">Producto</a></li> <!-- Enlace para ver la sección de productos -->
    <li><a href="view/stock.php">Stock</a></li> <!-- Enlace para ver la sección de stock -->
    <li><a href="view/ingresar_activos.php">Ingresar Activos</a></li><!-- Enlace para la sección de ingreso de activos -->
    <li><a href="view/translados.php">Translados</a></li> <!-- Enlace para la sección de translados -->
    <li><a href="view/ajustes_inventario.php">Ajustes Inventario</a></li><!-- Enlace para la sección de ajustes de inventario -->
    <li><a href="view/compras.php">Compras</a></li> <!-- Enlace para la sección de compras -->
    <!-- Puedes agregar más enlaces según las secciones de tu aplicación -->
</ul>

<?php
// Se incluye el archivo 'footer.php', que probablemente contenga la estructura HTML del pie de página
require_once 'footer.php';
?>


