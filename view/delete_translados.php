<?php
    require_once '../header.php';
    require_once '../model/TransladoModel.php';

    $model = new TransladoModel();

    try {
        $translado = $model->obtenerTranslado();
    } catch (Exception $e) {
        echo "Error al eliminar translados: " .$e->getMessage();
        exit;
    }
?>

<form action="../controller/TransladosController.php" method="post">
    <label for="Tipo_Activo">Seleccione el tipo de translado a eliminar</label>
    <select name="ID_Traslado" id="ID_Traslado ">
        <?php
            $translado = $model->obtenerTranslado();

            foreach ($translado as $row) {
                echo "<option value='" . $row['ID_Traslado'] ."'>" . $row['Tipo_Activo']  ."</option>";
            }
        ?>
    </select>
    <input type="submit" name="eliminar" value="eliminar translado">
</form>
<?php
    require_once '../footer.php';
?>