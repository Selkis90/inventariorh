<?php
    // Se incluye el archivo 'header.php' y 'Ajustes_inventariosModel.php', que probablemente contenga la estructura HTML y elementos comunes del encabezado
    require_once '../header.php';
    require_once '../model/Ajustes_inventariosModel.php';
?>

<!-- Formulario para crear ajustes de inventarios. Los datos se enviarán al controlador 'Ajustes_inventariosController.php' mediante el método POST -->
<form action="../controller/Ajustes_inventariosController.php" method="post">
    <ul>
        <!-- Campo: Cantidad Ajustada -->
        <li>
            <label for="Cantidad_Ajustada">Cantidad_Ajustada</label>
            <input type="number" name="Cantidad_Ajustada" id="Cantidad_Ajustada" required>
        </li>
        <!-- Campo: Motivo del Ajuste -->
        <li>
            <label for="Motivo">Motivo</label>
            <input type="text" name="Motivo" id="Motivo" required>
        </li>
        <!-- Campo: Fecha del Ajuste -->
        <li>
            <label for="Fecha_Ajuste">Fecha_Ajuste</label>
            <input type="date" name="Fecha_Ajuste" id="Fecha_Ajuste" required>
        </li>
        <!-- Campo: Responsable del Ajuste -->
        <li>
            <label for="Responsable_Ajuste">Responsable_Ajuste</label>
            <input type="text" name="Responsable_Ajuste" id="Responsable_Ajuste" required>
        </li>
        <!-- Campo: Comentarios -->
        <li>
            <label for="Comentarios">Comentarios</label>
            <textarea name="Comentarios" id="Comentarios" cols="30" rows="1"></textarea>
        </li>
        <!-- Campo: Tipo de Ajuste (Incremento o Decremento) -->
        <li>
            <label for="Tipo_Ajuste">Tipo_Ajuste</label>
            <select name="Tipo_Ajuste">
                <option value="Incremento">Incremento</option>
                <option value="Decremento">Decremento</option>
            </select>
        </li>
        <!-- Campo: Documento Relacionado -->
        <li>
            <label for="Documento_Relacionado">Documento_Relacionado</label>
            <input type="text" name="Documento_Relacionado" id="Documento_Relacionado" required>
        </li>
        <!-- Botón de envío del formulario con el nombre 'crear' -->
        <li>
            <button type="submit" name="crear">Crear Ajustes de inventarios</button>
        </li>
    </ul>
</form>

<?php
    // Se incluye el archivo 'footer.php', que probablemente contenga la estructura HTML del pie de página
    require_once '../footer.php';
?>