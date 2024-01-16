<?php
// Incluye los archivos necesarios para la conexión a la base de datos y el modelo relacionado con los traslados.
require_once '../header.php';
require_once '../model/TransladoModel.php';
?>

<!-- Formulario para la creación de traslados. Los datos se enviarán al controlador TransladosController.php mediante el método POST. -->
<form action="../controller/TransladosController.php" method="post">
    <ul>
        <li>
            <!-- Campos del formulario para capturar información relacionada con el traslado. -->
            <label for="Tipo_Activo">Tipo Activo</label>
            <input type="text" name="Tipo_Activo" id="Tipo_Activo" required>
        </li>
        <li>
            <label for="Fecha_Traslado">Fecha Traslado</label>
            <input type="date" name="Fecha_Traslado" id="Fecha_Traslado" required>
        </li>
        <li>
            <label for="De_Ubicacion">Destino</label>
            <input type="text" name="De_Ubicacion" id="De_Ubicacion" required>
        </li>
        <li>
            <label for="A_Ubicacion">Ubicacion Actual</label>
            <input type="text" name="A_Ubicacion" id="A_Ubicacion" required>
        </li>
        <li>
            <label for="Motivo">Motivo</label>
            <input type="text" name="Motivo" id="Motivo" required>
        </li>
        <li>
            <label for="Responsable_Traslado">Responsable Traslado</label>
            <input type="text" name="Responsable_Traslado" id="Responsable_Traslado" required>
        </li>
        <li>
            <label for="Persona_Entrega">Persona Entrega</label>
            <input type="text" name="Persona_Entrega" id="Persona_Entrega" required>
        </li>
        <li>
            <label for="Cedula_Entrega">Cedula Entrega</label>
            <input type="text" name="Cedula_Entrega" id="Cedula_Entrega" required>
        </li>
        <li>
            <label for="Cargo_Entrega">Cargo Entrega</label>
            <input type="text" name="Cargo_Entrega" id="Cargo_Entrega" required>
        </li>
        <li>
        <label for="Telefono_Entrega">Telefono de quien entrega</label>
        <input type="number" name="Telefono_Entrega" id="Telefono_Entrega" minlength="10" maxlength="15" required>
        </li>
        <li>
            <label for="Centro_Costo_Entrega">Centro de costo de quien entrega</label>
            <input type="text" name="Centro_Costo_Entrega" id="Centro_Costo_Entrega" required>
        </li>
        <li>
            <label for="Persona_Responsable">Persona Responsable</label>
            <input type="text" name="Persona_Responsable" id="Persona_Responsable" required>
        </li>
        <li>
            <label for="Cedula_Responsable">Cedula Responsable</label>
            <input type="text" name="Cedula_Responsable" id="Cedula_Responsable" required>
        </li>
        <li>
            <label for="Cargo_Responsable">Cargo Responsable</label>
            <input type="text" name="Cargo_Responsable" id="Cargo_Responsable" required>
        </li>
        <li>
            <label for="Telefono_Responsable">Telefono Responsable</label>
            <input type="number" name="Telefono_Responsable" id="Telefono_Responsable" minlength="10" maxlength="15" required>
        </li>
        <li>
            <label for="Centro_Costo_Responsable">Centro Costo Responsable</label>
            <input type="text" name="Centro_Costo_Responsable" id="Centro_Costo_Responsable" required>
        </li>
        <li>
            <label for="Comentarios">Comentarios</label>
            <textarea name="Comentarios" id="Comentarios" cols="30" rows="1"></textarea>
        </li>
        <li>
            <label for="Estado">Estado</label>
            <input type="text" name="Estado" id="Estado" required>
        </li>
        <li>
            <!-- Botón de envío del formulario con la etiqueta 'crear'. -->
            <button type="submit" name="crear">Crear Translado</button>
        </li>
    </ul>
</form>

<?php
// Incluye el pie de página, que puede contener información adicional o scripts necesarios para la página.
require_once '../footer.php';
?>