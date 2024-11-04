<?php
// Incluye archivos necesarios (header y modelo de Proveedor)

require_once '../principal.php';

require_once '../model/ProveedorModel.php';

// Crea una instancia del modelo de Proveedor
$model = new ProveedorModel();

try {
    // Intenta obtener los datos de proveedores desde el modelo
    $proveedor = $model->obtenerProveedor();
} catch (Exception $e) {
    // Manejo de errores: imprime un mensaje de error y sale del script si ocurre un error
    echo "Error al obtener el proveedor: " . $e->getMessage();
    exit;
}
?>
<section class="section">
    <h2>Ver Proveedores</h2>

    <?php
    // Verifica si hay datos de proveedores para mostrar
    if (!empty($proveedor)) {
        // Inicia la tabla HTML y define las columnas
        echo "<table border='1' class='tabla_proveedor'>
    <tr>
        <th>Nombre</th>
        <th>Contacto</th>
        <th>Telefono</th>
        <th>Direccion</th>
        <th>Correo Electronico</th>
        <th>Observaciones</th>
    </tr>";

        // Itera a través de los datos de proveedores y muestra cada fila en la tabla
        foreach ($proveedor as $row) {
            echo "<tr>
            <th>" . htmlspecialchars($row['Nombre']) . "</th>
            <th>" . htmlspecialchars($row['Contacto']) . "</th>
            <th>" . htmlspecialchars($row['Telefono']) . "</th>
            <th>" . htmlspecialchars($row['Direccion']) . "</th>
            <th>" . htmlspecialchars($row['Correo_Electronico']) . "</th>
            <th>" . htmlspecialchars($row['Observaciones']) . "</th>
        </tr>";
        }

        // Cierra la tabla HTML
        echo  "</table>";
    } else {
        // Muestra un mensaje si no hay datos de proveedores para mostrar
        echo "No hay datos para mostrar.";
    }

    // Incluye el archivo de pie de página
    require_once '../footer.php';
    ?>
</section>