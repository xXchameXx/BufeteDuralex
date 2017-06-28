<?php

session_start();

include '../librerias.php';

try {
    $objAbogado = new Abogado();
    $rut = $_POST['txtRut'];
    $nombre = $_POST['txtNombre'];
    $apellidoPat = $_POST['txtApellidoPat'];
    $apellidoMat = $_POST['txtApellidoMat'];
    $fecha = $_POST['txtFecha'];
    $fechasql = $objAbogado ->convertDateToMsSQL($fecha);
    $valor = $_POST['txtValor'];
    $especialidad = $_POST['ddlEspecialidad'];
    
    $objAbogado->agregarAbogado($rut, $nombre, $apellidoPat, $apellidoMat, $fechasql, $valor, $especialidad);
    $_SESSION["msg"] = "Abogado agregado exitosamente";
    header('Location: ../MantenedorAbogado.php');
} catch (exception $ex) {
    $_SESSION["msg"] = "Error al agregar Abogado";
    header('Location: ../ingresoAbogado.php');
}

