<?php

session_start();

include '../librerias.php';

try {
    $objAtencion = new Atencion();
    $idAten=null;
    $fechaAten = $_POST['txtFechaAten'];
    $estado = $_POST['ddlEstado'];
    $rutAbo = $_POST['txtRutAbo'];
    $rutCli = $_POST['txtRutCli'];

    
    $objAtencion->agregarAtencion($idAten,$fechaAten, $estado, $rutAbo, $rutCli);
    //echo $fechaAten;
    //echo $estado;
    //echo $rutAbo;
    //echo $rutCli;
    $_SESSION["msg"] = "Atencion agregado exitosamente";
    header('Location: ../ConsultaAtencion.php');
} catch (exception $ex) {
    $_SESSION["msg"] = "Error al agregar atencion";
    header('Location: ../ingresoCliente.php');
}
