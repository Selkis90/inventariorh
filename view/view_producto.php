<?php
    require_once '../header.php';
    require_once '../model/ProductoModel.php';

    $model = new ProductoModel();
    

    try {
        $producto = $model->obtenerProducto();
    } catch (Exception $e) {
        echo "Error al obtener producto: " . $e->getMessage();;
    }

    if (!empty($producto)) {
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
        echo "</table>";
    }else {
        echo "No ahy datos para mostrar. ";
    }

    require_once '../footer.php';
?>

