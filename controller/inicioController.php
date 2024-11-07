<?php
require_once '../conexion.php';


// --------- Programación para ingresar los datos a la base de datos ------------------------------------

// Validar si los datos se envían por método POST y si se envían desde input registrarse
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["registrarse"])) {
    // Obtener y limpiar los datos que se envían por el formulario
    $nombre = mysqli_real_escape_string($conexion, $_POST["nombre"]);
    $correo = mysqli_real_escape_string($conexion, $_POST["correo"]);
    $contraseña = password_hash($_POST['contraseña'], PASSWORD_DEFAULT);

    // Definir la consulta SQL para insertar datos
    $sql = "INSERT INTO usuarios (nombre, correo, contraseña) VALUES (?,?,?)";

    // Prepara la consulta SQL para su ejecución
    $stmt = $conexion->prepare($sql);

    // Vincular los parámetros
    $stmt->bind_param("sss", $nombre, $correo, $contraseña);

    // Ejecutar la consulta SQL preparada
    if ($stmt->execute()) {
        // Imprimir mensaje de registro exitoso
        echo "Registro con éxito.";

        // Redirige a la página principal
        header("refresh:3; url=../view/view_inicio.php");
    } else {
        // Imprimir un mensaje de error
        echo "Error al crear el registro: " . $stmt->error;
    }

    $stmt->close();
}

// ------------------------------- Programación para iniciar sesión ------------------------------
// Validar si los datos se envían por método POST y si se envían desde input "iniciar_sesion" 
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["iniciar_sesion"])) {
    // Limpiar los datos ingresados a la base de datos
    $correo = htmlspecialchars(mysqli_real_escape_string($conexion, $_POST["correo"]));
    $contraseña = htmlspecialchars(mysqli_real_escape_string($conexion, $_POST["contraseña"]));

    // Generar la consulta SQL
    $sql = "SELECT * FROM usuarios WHERE correo = ?";

    // Preparar la consulta
    $stmt = $conexion->prepare($sql);

    // Pasar parámetros a la consulta
    $stmt->bind_param("s", $correo);

    // Ejecutar consulta preparada
    $stmt->execute();

    // Obtener los resultados de la consulta
    $resultado = $stmt->get_result();

    // Verificar si se obtuvo una fila (un usuario) de la base de datos
    if ($resultado->num_rows > 0) {
        $fila = $resultado->fetch_assoc();

        // Verificar contraseña
        if (password_verify($contraseña, $fila['contraseña'])) {
            echo "<script src='../javascript/funciones.js'></script>";
            echo "<script>
                    saludar();
                    window.location.href = '../principal.php';
                </script>";
        } else {
            echo "<script>
                    alert('Contraseña incorrecta.');
                    window.location.href = '../index.php';
                </script>";
        }
    } else {
        echo "<script>
                alert('Usuario no encontrado');
                window.location.href = '../index.php';
            </script>";
    }
}
