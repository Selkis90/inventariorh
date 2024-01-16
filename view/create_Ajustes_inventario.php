<?php
    require_once '../header.php';
    require_once '../model/Ajustes_inventariosModel.php';
?>

<form action="../controller/Ajustes_inventariosController.php" method="post">

    <ul>
        <li>
            <label for="Cantidad_Ajustada">Cantidad_Ajustada</label>
            <input type="number" name="Cantidad_Ajustada" id="Cantidad_Ajustada" required>
        </li>
        <li>
            <label for="Motivo">Motivo</label>
            <input type="text" name="Motivo" id="Motivo" required>
        </li>
        <li>
            <label for="Fecha_Ajuste">Fecha_Ajuste</label>
            <input type="date" name="Fecha_Ajuste" id="Fecha_Ajuste" required>
        </li>
        <li>
            <label for="Responsable_Ajuste">Responsable_Ajuste</label>
            <input type="text" name="Responsable_Ajuste" id="Responsable_Ajuste" required>
        </li>
        <li>
            <label for="Comentarios">Comentarios</label>
            <textarea name="Comentarios" id="Comentarios" cols="30" rows="1"></textarea>
        </li>
        <li>
            <label for="Tipo_Ajuste">Tipo_Ajuste</label>
            <!-- <input type="text" name="Tipo_Ajuste" id="Tipo_Ajuste" required>   -->
            <select name="Tipo_Ajuste">
                <option value="Incremento">Incremento</option>
                <option value="Decremento">Decremento</option>
            </select>
        </li>
        <li>
            <label for="Documento_Relacionado">Documento_Relacionado</label>
            <input type="text" name="Documento_Relacionado" id="Documento_Relacionado" required>
        </li>
        <li>
            <button type="submit" name="crear">Crear Ajustes de inventarios</button>
        </li>
    </ul>

</form>

<?php
    require_once '../footer.php';
?>