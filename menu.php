<!-- Botón para mostrar/ocultar el menú -->


<!-- Menú lateral -->
<nav id="sidenav" class="sidenav bg-light">

    <div class="d-flex flex-column align-items-center">
        <img src="<?= _URL ?>img/nuevo_logo.jpeg" alt="logo inventariorh" class="img-fluid mb-4">

        <ul class="nav flex-column w-100">
            <li class="nav-item">
                <a class="nav-link" href="<?= _URL ?>principal.php">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" id="Proveedor">Proveedor</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" id="Producto">Producto</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" id="stock">Stock</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" id="Activos">Activos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" id="Translados">Translados</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" id="ajustes_inventario">Ajustes Inventario</a>
            </li>
        </ul>

        <a href="<?= _URL ?>index.php" class="btn btn-danger mt-4 w-100">Cerrar sesión</a>
    </div>
</nav>
<!-- menu oculto -->
<!-- Enlace al archivo JavaScript -->
