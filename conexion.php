<?php
// Definición de variables para la conexión a la base de datos
$host = "localhost"; // Dirección del servidor de la base de datos
$user = "root";      // Nombre de usuario de la base de datos
$password = "";       // Contraseña de la base de datos
$bd = "inventarios"; // Nombre de la base de datos

// Creación de una nueva instancia de la clase mysqli para establecer la conexión
$conexion = new mysqli($host, $user, $password, $bd);

// Verificación de si la conexión tuvo éxito
if ($conexion->connect_error) {
    // Si hay un error en la conexión, se muestra un mensaje de error y se termina la ejecución del script
    die ("Error al conectarse a la base de datos: " . $conexion->connect_error);
}
// Cierre del bloque PHP
?>


