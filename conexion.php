<?php

/**
 * Archivo que contiene los parámetros de conexión a la base de datos
 * y otros adicionales que se requieran en el proyecto.
 */
require_once 'parametros.php';


// Definición de variables para la conexión a la base de datos
$host = _HOST; // Dirección del servidor de la base de datos
$user = _USER;      // Nombre de usuario de la base de datos
$password = _PASSWORD;       // Contraseña de la base de datos
$bd = _BD_NAME; // Nombre de la base de datos

// Creación de una nueva instancia de la clase mysqli para establecer la conexión
try {
    $conexion = new mysqli($host, $user, $password, $bd);
} catch (\Throwable $th) {
    echo "Error al conectarse a la base de datos, por favor verifique los parámetros de conexión y que la base exista.";
    exit();
}

// Verificación de si la conexión tuvo éxito
if ($conexion->connect_error) {
    // Si hay un error en la conexión, se muestra un mensaje de error y se termina la ejecución del script
    die("Error al conectarse a la base de datos: " . $conexion->connect_error);
}
// Cierre del bloque PHP
