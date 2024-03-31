<?php
require_once '../conexion.php';
require_once '../controller/inicioController.php';
?>

<!---------------  Formulario para realizar el registro de personas a la base de datos  ---------------->
<h2>Registrarse</h2>
<h3>Ingrese los datos del formulario para registrarse como usuario.</h3>

<form action="../controller/inicioController.php" method="post">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" required>
    <br>
    <label for="correo">Correo Electrónico</label>
    <input type="email" name="correo" required>
    <br>
    <label for="contraseña">Contraseña</label>
    <input type="password" name="contraseña" required>
    <br>
    <input type="submit" name="registrarse" value="Registrar">
</form>

<?php
include("../footer.php");
?>