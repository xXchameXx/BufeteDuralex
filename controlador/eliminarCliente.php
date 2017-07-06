<?php

session_start();

include '../librerias.php';

try {
    $objCliente = new Cliente();
    $rut = $_REQUEST['rut'];
    
    
    $objCliente->eliminarCliente($rut);
    
    $_SESSION["msg"] = "Abogado eliminado exitosamente";
    
    header('Location: ../MantenedorCliente.php');
} catch (exception $ex) {
    $_SESSION["msg"] = "Error al agregar Abogado";
    header('Location: ../ingresoAbogado.php');
}