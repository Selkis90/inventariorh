<?php
require_once '../conexion.php';
require_once '../controller/inicioController.php';
?>

<!------------------ Formulario para iniciar sesión -------------------------------->
<h2>Iniciar Sesión</h2>

<form action="../controller/inicioController.php" method="post">
    <label for="correo_login">Correo</label>
    <input type="text" name="correo" required>
    <br>
    <label for="contraseña">Contraseña</label>
    <input type="password" name="contraseña" required>
    <br>
    <input type="submit" name="iniciar_sesion" value="Iniciar Sesión">
</form>

<?php
require_once '../footer.php';
?>