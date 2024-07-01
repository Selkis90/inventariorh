<?php
require_once '../conexion.php';
require_once '../controller/inicioController.php';
require_once "../header_login.php";
?>

<!------------------ Formulario para iniciar sesión -------------------------------->


<form action="../controller/inicioController.php" method="post">
    <h2>Iniciar Sesión</h2>
    <label for="correo_login"></label>
    <input type="text" name="correo" placeholder="&#128273; Correo">
    <br>
    <label for="contraseña"></label>
    <input type="password" name="contraseña" placeholder="&#128274; contraseña" required>
    <br>
    <input type="submit" id="inicio_sesion" name="iniciar_sesion" value="Iniciar Sesión">

    <br>
    <a href="../view/view_registrarse.php" style="float: right;">Registrarse</a>
</form>


<?php
/* require_once '../footer.php'; */
?>