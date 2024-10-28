<?php
require_once '../principal.php';
require_once '../model/TransladoModel.php';

$model = new TransladoModel();

$translados = $model->obtenerTranslado();
?>
<section class="section">
    <h2>Actualizar Translados</h2>

    <form action="../controller/TransladosController.php" method="post">
        <ul>
            <li>
                <label for="ID_Traslado">Seleccione Translado</label>
                <select name="ID_Traslado" id="ID_Traslado" required>
                    <?php foreach ($translados as $row) : ?>
                        <option value="<?= $row['ID_Traslado']; ?>">
                            <?= htmlspecialchars($row['Tipo_Activo']); ?>
                        </option>;
                    <?php endforeach; ?>
                </select>
            </li>
            <li>
                <label for="Nuevo_Tipo_Activo">Nuevo_Tipo_Activo</label>
                <input type="text" name="Nuevo_Tipo_Activo" id="Nuevo_Tipo_Activo">
            </li>
            <li>
                <label for="Nuevo_Fecha_Traslado">Nuevo_Fecha_Traslado</label>
                <input type="date" name="Nuevo_Fecha_Traslado" id="Nuevo_Fecha_Traslado">
            </li>
            <li>
                <label for="Nuevo_De_Ubicacion">Nuevo_De_Ubicacion</label>
                <input type="text" name="Nuevo_De_Ubicacion" id="Nuevo_De_Ubicacion">
            </li>
            <li>
                <label for="Nuevo_A_Ubicacion">Nuevo_A_Ubicacion</label>
                <input type="text" name="Nuevo_A_Ubicacion" id="Nuevo_A_Ubicacion">
            </li>
            <li>
                <label for="Nuevo_Motivo">Nuevo_Motivo</label>
                <input type="text" name="Nuevo_Motivo" id="Nuevo_Motivo">
            </li>
            <li>
                <label for="Nuevo_Responsable_Traslado">Nuevo_Responsable_Traslado</label>
                <input type="text" name="Nuevo_Responsable_Traslado" id="Nuevo_Responsable_Traslado">
            </li>
            <li>
                <label for="Nuevo_Persona_Entrega">Nuevo_Persona_Entrega</label>
                <input type="text" name="Nuevo_Persona_Entrega" id="Nuevo_Persona_Entrega">
            </li>
            <li>
                <label for="Nuevo_Cedula_Entrega">Nuevo_Cedula_Entrega</label>
                <input type="text" name="Nuevo_Cedula_Entrega" id="Nuevo_Cedula_Entrega">
            </li>
            <li>
                <label for="Nuevo_Cargo_Entrega">Nuevo_Cargo_Entrega</label>
                <input type="text" name="Nuevo_Cargo_Entrega" id="Nuevo_Cargo_Entrega">
            </li>
            <li>
                <label for="Nuevo_Telefono_Entrega">Nuevo_Telefono_Entrega</label>
                <input type="text" name="Nuevo_Telefono_Entrega" id="Nuevo_Telefono_Entrega">
            </li>
            <li>
                <label for="Nuevo_Centro_Costo_Entrega">Nuevo_Centro_Costo_Entrega</label>
                <input type="text" name="Nuevo_Centro_Costo_Entrega" id="Nuevo_Centro_Costo_Entrega">
            </li>
            <li>
                <label for="Nuevo_Persona_Responsable">Nuevo_Persona_Responsable</label>
                <input type="text" name="Nuevo_Persona_Responsable" id="Nuevo_Persona_Responsable">
            </li>
            <li>
                <label for="Nuevo_Cedula_Responsable">Nuevo_Cedula_Responsable</label>
                <input type="text" name="Nuevo_Cedula_Responsable" id="Nuevo_Cedula_Responsable">
            </li>
            <li>
                <label for="Nuevo_Cargo_Responsable">Nuevo_Cargo_Responsable</label>
                <input type="text" name="Nuevo_Cargo_Responsable" id="Nuevo_Cargo_Responsable">
            </li>
            <li>
                <label for="Nuevo_Telefono_Responsable">Nuevo_Telefono_Responsable</label>
                <input type="text" name="Nuevo_Telefono_Responsable" id="Nuevo_Telefono_Responsable">
            </li>
            <li>
                <label for="Nuevo_Centro_Costo_Responsable">Nuevo_Centro_Costo_Responsable</label>
                <input type="text" name="Nuevo_Centro_Costo_Responsable" id="Nuevo_Centro_Costo_Responsable">
            </li>
            <li>
                <label for="Nuevo_Comentarios">Nuevo_Comentarios</label>
                <textarea name="Nuevo_Comentarios" id="Nuevo_Comentarios" cols="30" rows="1"></textarea>
            </li>
            <li>
                <label for="Nuevo_Estado">Nuevo_Estado</label>
                <input type="text" name="Nuevo_Estado" id="Nuevo_Estado">
            </li>
            <li>
                <button type="submit" name="actualizar">Actualizar Traslado</button>
            </li>
        </ul>


    </form>
</section>
    <?php
    require_once '../footer.php';
    ?>