<?php
// Se incluye el archivo 'header.php', que probablemente contenga la estructura HTML y elementos comunes del encabezado
require_once 'header.php';

?>
<nav class="sidenav">
    <img src="<?= _URL ?>img/logo inventariorh.jpg" alt="logo inventariorh">

    <div class="items">
        <ul class="menu-list">
            <li><a href="<?= _URL ?>principal.php">prueba inicio</a></li>
            
            <li><a href="#" id="Proveedor">Proveedor</a></li><!-- ok -->
            <!-- <li><a href="<?= _URL ?>view/proveedor.php">Proveedor</a></li> --> <!-- Enlace para ver la sección de proveedores -->
            
            <li><a href="#" id="Producto">Producto</a></li><!-- ok -->
            <!-- <li><a href="<?= _URL ?>view/producto.php">Producto</a></li> --> <!-- Enlace para ver la sección de productos -->
            
            <li><a href="#" id="stock">Stock</a></li><!-- ok -->
            <!-- <li><a href="<?= _URL ?>view/stock.php">Stock</a></li> --> <!-- Enlace para ver la sección de stock -->
            
            <li><a href="#" id="Activos">Activos</a></li>
            <!-- <li><a href="<?= _URL ?>view/activos.php">Activos</a></li> --><!-- Enlace para la sección de ingreso de activos -->
            
            <li><a href="#" id="Translados">Translados</a></li>
            <!-- <li><a href="<?= _URL ?>view/translados.php">Translados</a></li> --> <!-- Enlace para la sección de translados -->
            
            <li><a href="#" id="ajustes_inventario">Ajustes Inventario</a></li>
            <!-- <li><a href="<?= _URL ?>view/ajustes_inventario.php">Ajustes Inventario</a></li> --><!-- Enlace para la sección de ajustes de inventario -->
            
            <li><a href="#" id="Compras">Compras</a></li>
            <!-- <li><a href="<?= _URL ?>view/compras.php">Compras</a></li> --> <!-- Enlace para la sección de compras --><!-- Puedes agregar más enlaces según las secciones de tu aplicación -->
            
            <li><a href="#" id="prueba">prueba</a></li><!-- ok -->
        </ul>

        <a href="<?= _URL ?>index.php">Cerrar sesion</a>
    </div>
</nav>

<!------------ Proveedor ------------>
<section class="section" id="proveedor_oculto" style="display: none;">

    <!-- Lista de enlaces de navegación para realizar diversas acciones relacionadas con el manejo de Stock. -->
    <article class="article1">
        <div>
            <ul>
                <!-- Enlace para crear nuevo stock -->
                <li><a href="./view/create_proveedor.php">Crear Proveedor</a></li><!-- Enlace para ver el stock existente -->
            </ul>
        </div>
    </article>
    <article class="article2">
        <div>
            <ul>
                <li><a href="./view/view_proveedor.php">Ver Proveedor</a></li><!-- Enlace para actualizar información de stock -->
            </ul>
        </div>
    </article>
    <article class="article3">
        <div>
            <ul>
                <li><a href="./view/update_proveedor.php">Actualizar Proveedor</a></li><!-- Enlace para eliminar entradas de stock -->
            </ul>
        </div>
    </article>
    <article class="article4">
        <div>
            <ul>
                <li><a href="./view/delete_proveedor.php">Eliminar Proveedor</a></li>
            </ul>
        </div>
    </article>
</section>

<!------------ Producto ------------>
<section class="section" id="producto_oculto" style="display: none;">

    <!-- Lista de enlaces de navegación para realizar diversas acciones relacionadas con el manejo de Stock. -->
    <article class="article1">
        <div>
            <ul>
                <!-- Enlace para crear nuevo stock -->
                <li><a href="./view/create_producto.php">Crear Producto</a></li><!-- Enlace para ver el stock existente -->
            </ul>
        </div>
    </article>
    <article class="article2">
        <div>
            <ul>
                <li><a href="./view/view_producto.php">Ver Producto</a></li><!-- Enlace para actualizar información de stock -->
            </ul>
        </div>
    </article>
    <article class="article3">
        <div>
            <ul>
                <li><a href="./view/update_producto.php">Actualizar Producto</a></li><!-- Enlace para eliminar entradas de stock -->
            </ul>
        </div>
    </article>
    <article class="article4">
        <div>
            <ul>
                <li><a href="./view/delete_producto.php">Eliminar Producto</a></li>
            </ul>
        </div>
    </article>
</section>
<!------------ stock ------------>
<section class="section" id="stock_oculto" style="display: none;">

    <!-- Lista de enlaces de navegación para realizar diversas acciones relacionadas con el manejo de Stock. -->
    <article class="article1">
        <div>
            <ul>
                <!-- Enlace para crear nuevo stock -->
                <li><a href="./view/create_stock.php">Crear Stock</a></li><!-- Enlace para ver el stock existente -->
            </ul>
        </div>
    </article>
    <article class="article2">
        <div>
            <ul>
                <li><a href="./view/view_stock.php">Ver Stock</a></li><!-- Enlace para actualizar información de stock -->
            </ul>
        </div>
    </article>
    <article class="article3">
        <div>
            <ul>
                <li><a href="./view/update_stock.php">Actualizar Stock</a></li><!-- Enlace para eliminar entradas de stock -->
            </ul>
        </div>
    </article>
    <article class="article4">
        <div>
            <ul>
                <li><a href="./view/delete_stock.php">Eliminar Stock</a></li>
            </ul>
        </div>
    </article>
</section>


<!------------ Activos ------------>
<section class="section" id="activo_oculto" style="display: none;">

    <!-- Lista de enlaces de navegación para realizar diversas acciones relacionadas con el manejo de Stock. -->
    <article class="article1">
        <div>
            <ul>
                <!-- Enlace para crear nuevo stock -->
                <li><a href="./view/create_activos.php">Crear Activos</a></li><!-- Enlace para ver el stock existente -->
            </ul>
        </div>
    </article>
    <article class="article2">
        <div>
            <ul>
                <li><a href="./view/view_activos.php">Ver Activos</a></li><!-- Enlace para actualizar información de stock -->
            </ul>
        </div>
    </article>
    <article class="article3">
        <div>
            <ul>
                <li><a href="./view/update_activos.php">Actualizar Activos</a></li><!-- Enlace para eliminar entradas de stock -->
            </ul>
        </div>
    </article>
    <article class="article4">
        <div>
            <ul>
                <li><a href="./view/delete_activos.php">Eliminar Activos</a></li>
            </ul>
        </div>
    </article>
</section>

<!------------ Translados ------------>
<section class="section" id="translado_oculto" style="display: none;">

    <!-- Lista de enlaces de navegación para realizar diversas acciones relacionadas con el manejo de Stock. -->
    <article class="article1">
        <div>
            <ul>
                <!-- Enlace para crear nuevo stock -->
                <li><a href="./view/create_translados.php">Crear Translados</a></li><!-- Enlace para ver el stock existente -->
            </ul>
        </div>
    </article>
    <article class="article2">
        <div>
            <ul>
                <li><a href="./view/view_translados.php">Ver Translados</a></li><!-- Enlace para actualizar información de stock -->
            </ul>
        </div>
    </article>
    <article class="article3">
        <div>
            <ul>
                <li><a href="./view/update_translados.php">Actualizar Translados</a></li><!-- Enlace para eliminar entradas de stock -->
            </ul>
        </div>
    </article>
    <article class="article4">
        <div>
            <ul>
                <li><a href="./view/delete_translados.php">Eliminar Translados</a></li>
            </ul>
        </div>
    </article>
</section>


<!------------ Ajustes_Inventario ------------>

<section class="section" id="Ajustes_Inventario_oculto" style="display: none;">

    <!-- Lista de enlaces de navegación para realizar diversas acciones relacionadas con el manejo de Stock. -->
    <article class="article1">
        <div>
            <ul>
                <!-- Enlace para crear nuevo stock -->
                <li><a href="./view/create_Ajustes_inventario.php">Crear Ajustes</a></li><!-- Enlace para ver el stock existente -->
            </ul>
        </div>
    </article>
    <article class="article2">
        <div>
            <ul>
                <li><a href="./view/view_Ajustes_Inventario.php">Ver Ajustes</a></li><!-- Enlace para actualizar información de stock -->
            </ul>
        </div>
    </article>
    <article class="article3">
        <div>
            <ul>
                <li><a href="./view/update_Ajustes_Inventario.php">Actualizar Ajustes</a></li><!-- Enlace para eliminar entradas de stock -->
            </ul>
        </div>
    </article>
    <article class="article4">
        <div>
            <ul>
                <li><a href="./view/delete_Ajustes_Inventario.php">Eliminar Ajustes</a></li>
            </ul>
        </div>
    </article>
</section>


<!------------ Compras------------>
<section class="section" id="compra_oculto" style="display: none;">

    <!-- Lista de enlaces de navegación para realizar diversas acciones relacionadas con el manejo de Stock. -->
    <article class="article1">
        <div>
            <ul>
                <!-- Enlace para crear nuevo stock -->
                <li><a href="./view/create_compras.php">Crear Compras</a></li><!-- Enlace para ver el stock existente -->
            </ul>
        </div>
    </article>
    <article class="article2">
        <div>
            <ul>
                <li><a href="./view/view_compras.php">Ver Compras</a></li><!-- Enlace para actualizar información de stock -->
            </ul>
        </div>
    </article>
    <article class="article3">
        <div>
            <ul>
                <li><a href="./view/update_compras.php">Actualizar Compras</a></li><!-- Enlace para eliminar entradas de stock -->
            </ul>
        </div>
    </article>
    <article class="article4">
        <div>
            <ul>
                <li><a href="./view/delete_compras.php">Eliminar Compras</a></li>
            </ul>
        </div>
    </article>
</section>

<!-- Estructura HTML inicialmente oculta -->
<section class="section" id="seccionPrueba" style="display: none;">
    <article class="article1">
        <p>hola</p>
    </article>
</section>



<?php

// Se incluye el archivo 'footer.php', que probablemente contenga la estructura HTML del pie de página
require_once 'footer.php';

?>