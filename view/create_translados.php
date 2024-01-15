<?php
require_once '../conexion.php';
require_once '../model/TransladoModel.php';
?>

<form action="../controller/TransladosController.php" method="post">

    <label for="Tipo_Activo">Tipo Activo</label>
    <input type="text" name="Tipo_Activo" id="Tipo_Activo" required>

    <label for="Fecha_Traslado">Fecha Traslado</label>
    <input type="date" name="Fecha_Traslado" id="Fecha_Traslado" required>

    <label for="De_Ubicacion">Destino</label>
    <input type="text" name="De_Ubicacion" id="De_Ubicacion" required>

    <label for="A_Ubicacion">Ubicacion Actual</label>
    <input type="text" name="A_Ubicacion" id="A_Ubicacion" required>

    <label for="Motivo">Motivo</label>
    <input type="text" name="Motivo" id="Motivo" required>

    <label for="Responsable_Traslado">Responsable Traslado</label>
    <input type="text" name="Responsable_Traslado" id="Responsable_Traslado" required>

    <label for="Persona_Entrega">Persona Entrega</label>
    <input type="text" name="Persona_Entrega" id="Persona_Entrega" required>

    <label for="Cedula_Entrega">Cedula Entrega</label>
    <input type="text" name="Cedula_Entrega" id="Cedula_Entrega" required>

    <label for="Cargo_Entrega">Cargo Entrega</label>
    <input type="text" name="Cargo_Entrega" id="Cargo_Entrega" required>

    <label for="Telefono_Entrega">Telefono de quien entrega</label>
    <input type="text" name="Telefono_Entrega" id="Telefono_Entrega" required>

    <label for="Centro_Costo_Entrega">Centro de costo de quien entrega</label>
    <input type="text" name="Centro_Costo_Entrega" id="Centro_Costo_Entrega" required>

    <label for="Persona_Responsable">Persona Responsable</label>
    <input type="text" name="Persona_Responsable" id="Persona_Responsable" required>

    <label for="Cedula_Responsable">Cedula Responsable</label>
    <input type="text" name="Cedula_Responsable" id="Cedula_Responsable" required>

    <label for="Cargo_Responsable">Cargo Responsable</label>
    <input type="text" name="Cargo_Responsable" id="Cargo_Responsable" required>

    <label for="Telefono_Responsable">Telefono Responsable</label>
    <input type="text" name="Telefono_Responsable" id="Telefono_Responsable" required>

    <label for="Centro_Costo_Responsable">Centro Costo Responsable</label>
    <input type="text" name="Centro_Costo_Responsable" id="Centro_Costo_Responsable" required>

    <label for="Comentarios">Comentarios</label>
    <textarea name="Comentarios" id="Comentarios" cols="30" rows="10"></textarea>

    <label for="Estado">Estado</label>
    <input type="text" name="Estado" id="Estado" required>

    <button type="submit" name="crear">Crear Translado</button>
</form>

<?php
require_once '../footer.php';
?>