<?php
// Incluye archivos necesarios (header y modelo de Producto)
require_once '../header.php';

require_once '../model/ProductoModel.php';

// Crea una instancia del modelo de Producto
$model = new ProductoModel();

try {
    // Intenta obtener los datos de Producto desde el modelo
    $producto = $model->obtenerProducto();

    // Verifica si hay datos de Producto para mostrar
    if (!empty($producto)) {
        // Inicia la tabla HTML y define las columnas
        echo "<table border='1'>
                <tr>
                    <th>Serial</th>
                    <th>Placa</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Precio Unitario</th>
                    <th>Marca</th>
                    <th>Categoria</th>
                    <th>Stock</th>
                    <th>Fecha_Ingreso</th>
                    <th>Estado</th>
                    <th>Peso</th>
                    <th>Dimensiones</th>
                    <th>Color</th>
                </tr>";

        // Itera a través de los datos de Producto y muestra cada fila en la tabla        
        foreach ($producto as $row) {
            echo "<tr>
                    <td>" . htmlspecialchars($row['Serial']) . "</td>
                    <td>" . htmlspecialchars($row['Placa']) . "</td>
                    <td>" . htmlspecialchars($row['Nombre']) . "</td>
                    <td>" . htmlspecialchars($row['Descripcion']) . "</td>
                    <td>" . htmlspecialchars($row['Precio_Unitario']) . "</td>
                    <td>" . htmlspecialchars($row['Marca']) . "</td>
                    <td>" . htmlspecialchars($row['Categoria']) . "</td>
                    <td>" . htmlspecialchars($row['Stock']) . "</td>
                    <td>" . htmlspecialchars($row['Fecha_Ingreso']) . "</td>
                    <td>" . htmlspecialchars($row['Estado']) . "</td>
                    <td>" . htmlspecialchars($row['Peso']) . "</td>
                    <td>" . htmlspecialchars($row['Dimensiones']) . "</td>
                    <td>" . htmlspecialchars($row['Color']) . "</td>
                </tr>";
        }

        // Cierra la tabla HTML
        echo "</table>";
    } else {
        // Muestra un mensaje si no hay datos de Producto para mostrar
        echo "No hay datos para mostrar.";
        exit;
    }
} catch (Exception $e) {
    // Manejo de errores: redirecciona a una página de error o muestra un mensaje
    /* header("Location: error_page.php"); */
    exit;
}

// Incluye el archivo de pie de página
require_once '../footer.php';
