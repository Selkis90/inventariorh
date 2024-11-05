<?php
// Incluye el autoload de Composer
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

require_once '../model/StockModel.php';

// Crea una instancia del modelo de Stock
$model = new StockModel();

try {
    // Intenta obtener los datos de stock desde el modelo
    $stock = $model->obtenerStock();
} catch (Exception $e) {
    // Manejo de errores
    echo "Error al obtener el stock: " . $e->getMessage();
    exit; // Sale del script si ocurre un error
}

// Función para exportar a Excel
function exportarExcel($data)
{
    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();

    // Títulos de las columnas
    $sheet->setCellValue('A1', 'Nombre del Producto');
    $sheet->setCellValue('B1', 'Cantidad');

    // Rellenar los datos
    $row = 2; // Comienza en la fila 2
    foreach ($data as $item) {
        $sheet->setCellValue('A' . $row, $item['Nombre_Producto']);
        $sheet->setCellValue('B' . $row, $item['Cantidad']);
        $row++;
    }

    // Guardar el archivo
    $writer = new Xlsx($spreadsheet);
    $fileName = 'stock_' . date('Y-m-d_H-i-s') . '.xlsx';
    $writer->save($fileName);

    // Descarga el archivo
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment; filename="' . $fileName . '"');
    header('Cache-Control: max-age=0');
    readfile($fileName);
    unlink($fileName); // Elimina el archivo después de la descarga
}

// Llama a la función para exportar si se ha solicitado
if (isset($_POST['exportar'])) {
    exportarExcel($stock);
}
