<?php
require_once '../header.php';
require_once '../model/ProductoModel.php';
?>

<!-- Encabezado secundario de la página -->
<h2>Crear Producto</h2>

<form action="../controller/ProductoController.php" method="post">
    <!-- Campos del formulario -->
    <label for="serial">Serial</label>
    <input type="text" name="serial" id="serial" required>

    <label for="placa">Placa</label>
    <input type="text" name="placa" id="placa" required>

    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre" required>

    <label for="descripcion">Descripcion</label>
    <textarea name="descripcion" id="descripcion" cols="30" rows="10"></textarea>

    <label for="Precio_Unitario">Precio unidad</label>
    <input type="number" id="Precio_Unitario" name="Precio_Unitario" step="any" placeholder="Ingrese el precio" required>

    <label for="marca">Marca</label>
    <input type="text" name="marca" id="marca" required>

    <label for="categoria">Categoria</label>
    <input type="text" name="categoria" id="categoria" required>

    <label for="stock">Stock</label>
    <input type="number" name="stock" id="stock" required>

    <label for="Fecha_Ingreso">Fecha_Ingreso</label>
    <input type="datetime-local" name="Fecha_Ingreso" id="Fecha_Ingreso" required>

    <label for="estado">Estado del activo</label>
    <input type="text" name="estado" id="estado" required>

    <label for="peso">Peso</label>
    <input type="number" id="peso" name="peso" step="any" placeholder="peso" required>

    <label for="dimensiones">Dimensiones</label>
    <input type="text" name="dimensiones" id="dimensiones" required>

    <label for="color">Color</label>
    <input type="text" name="color" id="color" required>

    <!-- Botón de envío del formulario con el nombre 'crear' -->
    <button type="submit" name="crear">Crear Producto</button>
</form>