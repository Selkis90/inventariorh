<?php
require_once '../conexion.php';
require_once '../controller/inicioController.php';
require_once "../header_login.php";
?>

<!---------------  Formulario para realizar el registro de personas a la base de datos  ---------------->

<!-- <h3>Ingrese los datos del formulario para registrarse como usuario.</h3> -->

<form action="../controller/inicioController.php" method="post">
    <h2>Registrarse</h2>
    <label for="nombre"></label>
    <input type="text" name="nombre" placeholder="&#129706; Nombre" required>
    <br>
    <label for="correo"></label>
    <input type="email" name="correo" placeholder="&#128273; Correo" required>
    <br>
    <label for="contraseña"></label>
    <input type="password" name="contraseña" placeholder="&#128274; contraseña" required>
    <br>
    <input type="submit" name="registrarse" value="Registrar">

    <br>
    <a href="../view/view_inicio.php" style="float: right;">Inicio</a>
</form>

<?php
/* include("../footer.php"); */
?>