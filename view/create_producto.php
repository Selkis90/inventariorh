<?php
// Incluyendo archivos necesarios
require_once '../principal.php';
require_once '../model/ProductoModel.php';
?>

<section class="section">
    <!-- Título de la página -->
    <h2>Crear Producto</h2>

    <!-- Formulario para crear un nuevo producto -->
    <form action="../controller/ProductoController.php" method="post">
        <ul>
            <!-- Campo: Serial -->
            <li>
                <label for="serial">Serial</label>
                <input type="text" name="serial" id="serial" required>
            </li>
            <!-- Campo: Placa -->
            <li>
                <label for="placa">Placa</label>
                <input type="text" name="placa" id="placa" required>
            </li>
            <!-- Campo: Nombre -->
            <li>
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" required>
            </li>
            <!-- Campo: Descripción -->
            <li>
                <label for="descripcion">Descripcion</label>
                <textarea name="descripcion" id="descripcion" cols="30" rows="1"></textarea>
            </li>
            <!-- Campo: Precio Unitario -->
            <li>
                <label for="Precio_Unitario">Precio unidad</label>
                <input type="number" id="Precio_Unitario" name="Precio_Unitario" step="any" placeholder="Ingrese el precio" required>
            </li>
            <!-- Campo: Marca -->
            <li>
                <label for="marca">Marca</label>
                <input type="text" name="marca" id="marca" required>
            </li>
            <!-- Campo: Categoría -->
            <li>
                <label for="categoria">Categoria</label>
                <input type="text" name="categoria" id="categoria" required>
            </li>
            <!-- Campo: Stock -->
            <li>
                <label for="stock">Stock</label>
                <input type="number" name="stock" id="stock" required>
            </li>
            <!-- Campo: Fecha de Ingreso -->
            <li>
                <label for="Fecha_Ingreso">Fecha_Ingreso</label>
                <input type="datetime-local" name="Fecha_Ingreso" id="Fecha_Ingreso" required>
            </li>
            <!-- Campo: Estado del Activo -->
            <li>
                <label for="estado">Estado del activo</label>
                <input type="text" name="estado" id="estado" required>
            </li>
            <!-- Campo: Peso -->
            <li>
                <label for="peso">Peso</label>
                <input type="number" id="peso" name="peso" step="any" placeholder="peso" required>
            </li>
            <!-- Campo: Dimensiones -->
            <li>
                <label for="dimensiones">Dimensiones</label>
                <input type="text" name="dimensiones" id="dimensiones" required>
            </li>
            <!-- Campo: Color -->
            <li>
                <label for="color">Color</label>
                <input type="text" name="color" id="color" required>
            </li>
            <!-- Botón de envío del formulario con la etiqueta 'crear' -->
            <li>
                <button type="submit" name="crear">Crear Producto</button>
            </li>
        </ul>
    </form>
</section>
<?php
// Incluyendo el archivo de pie de página
require_once '../footer.php';
?>