<?php

session_start();

include '../librerias.php';

try {
    $objAbogado = new Abogado();
    $rut = $_POST['txtRut2'];
  
    
    $objAbogado->eliminarAbogado($rut2);
    
    $_SESSION["msg"] = "Abogado eliminado exitosamente";
   
    header('Location: ../MantenedorAbogado.php');
} catch (exception $ex) {
    $_SESSION["msg"] = "Error al agregar Abogado";
    header('Location: ../ingresoAbogado.php');
}
