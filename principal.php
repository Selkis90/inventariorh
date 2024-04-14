<?php

// Se incluye el archivo 'header.php', que probablemente contenga la estructura HTML y elementos comunes del encabezado
require_once 'header.php';

?>
<nav class="sidenav">
    <img src="<?= _URL ?>img/logo inventariorh.jpg" alt="">
    <!-- Lista de opciones con enlaces -->
    <!--  <button class="menu-toggle" onclick="toggleMenu()">☰</button> -->
    <!-- <span class="btn" href=""><i class="las la-bars la-2x"></i>☰</span> -->
    <div class="items">
        <ul class="menu-list">
            <li><a href="<?= _URL ?>principal.php">Inicio</a></li>
            <li><a href="<?= _URL ?>view/proveedor.php">Proveedor</a></li> <!-- Enlace para ver la sección de proveedores -->
            <li><a href="<?= _URL ?>view/producto.php">Producto</a></li> <!-- Enlace para ver la sección de productos -->
            <li><a href="<?= _URL ?>view/stock.php">Stock</a></li> <!-- Enlace para ver la sección de stock -->
            <li><a href="<?= _URL ?>view/activos.php">Activos</a></li><!-- Enlace para la sección de ingreso de activos -->
            <li><a href="<?= _URL ?>view/translados.php">Translados</a></li> <!-- Enlace para la sección de translados -->
            <li><a href="<?= _URL ?>view/ajustes_inventario.php">Ajustes Inventario</a></li>
            <!-- Enlace para la sección de ajustes de inventario -->
            <li><a href="<?= _URL ?>view/compras.php">Compras</a></li> <!-- Enlace para la sección de compras -->
            <!-- Puedes agregar más enlaces según las secciones de tu aplicación -->
        </ul>

        <a href="<?= _URL ?>index.php">Cerrar sesion</a>
    </div>
</nav>



<?php

// Se incluye el archivo 'footer.php', que probablemente contenga la estructura HTML del pie de página
require_once 'footer.php';

?>