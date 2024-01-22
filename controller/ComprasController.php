<?php
    require_once '../model/ComprasModel.php';

    class ComprasController{

        public function crearCompras($Numero_Orden_Compra,
        $Fecha_Compra,
        $Total_Compra ,
        $Numero_Factura,
        $Metodo_Pago,
        $Estado,
        $Observaciones,
        $Detalles){

        $model = new ComprasModel();

        $model->insertarModel($Numero_Orden_Compra,
        $Fecha_Compra,
        $Total_Compra ,
        $Numero_Factura,
        $Metodo_Pago,
        $Estado,
        $Observaciones,
        $Detalles);

        }

// Funcion para ver los datos creados en la base de datos metodo READ

        public function verCompras(){

            $model = new ComprasModel();
            $compras = $model->obtenerCompras();
            require_once '../view/view_compras.php';
        }
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["crear"])) {
        
            $Numero_Orden_Compra =  $_POST["Numero_Orden_Compra"];
            $Fecha_Compra = $_POST["Fecha_Compra"];
            $Total_Compra  = $_POST["Total_Compra"];
            $Numero_Factura = $_POST["Numero_Factura"];
            $Metodo_Pago = $_POST["Metodo_Pago"];
            $Estado = $_POST["Estado"];
            $Observaciones = $_POST["Observaciones"];
            $Detalles = $_POST["Detalles"];

            $controller = new ComprasController();

            $controller->crearCompras($Numero_Orden_Compra,
            $Fecha_Compra,
            $Total_Compra ,
            $Numero_Factura,
            $Metodo_Pago,
            $Estado,
            $Observaciones,
            $Detalles);
    }

// if para ver los datos ingresados en la base de datos metodo READ

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $controller = new ComprasController();

        $controller->verCompras();
    }
?>