<?php
    require_once '../header.php';
    require_once '../model/ProveedorModel.php';

    $model = new ProveedorModel();
    $proveedor = $model->obtenerProveedor();

    try {
        $proveedor = $model->obtenerProveedor();
    } catch (Exception $e) {
        echo "Error a obtener el proveedor: " . $e->getMessage();
        exit;
    }
?>

<h2>Ver Proveedores</h2>

<?php
if (!empty($proveedor)) {
    echo "<table border='1'>
    <tr>
        <th>Nombre</th>
        <th>Contacto</th>
        <th>Telefono</th>
        <th>Direccion</th>
        <th>Correo Electronico</th>
        <th>Observaciones</th>
    </tr>";

    foreach ($proveedor as $row) {
        echo "<tr>
            <th>". htmlspecialchars($row['Nombre']) . "</th>
            <th>". htmlspecialchars($row['Contacto']) . "</th>
            <th>". htmlspecialchars($row['Telefono']) . "</th>
            <th>". htmlspecialchars($row['Direccion']) . "</th>
            <th>". htmlspecialchars($row['Correo_Electronico']) . "</th>
            <th>". htmlspecialchars($row['Observaciones']) . "</th>
        </tr>";
    }
    echo  "</table>";
}else {
    echo "No hay datos para mostrar.";
}

    require_once '../footer.php';
?>