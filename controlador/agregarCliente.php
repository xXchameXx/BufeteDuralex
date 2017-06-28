<?php

session_start();

include '../librerias.php';

try {
    $objCliente = new Cliente();
    $rut = $_POST['txtRut'];
    $nombre = $_POST['txtNombre'];
    $apellidoPat = $_POST['txtApellidoPat'];
    $apellidoMat = $_POST['txtApellidoMat'];
    $direccion = $_POST['txDireccion'];
    $telefono = $_POST['txtTelefono'];
    $tipoPersona = $_POST['ddlTipoPersona'];
    
    $objCliente->agregarCliente($rut, $nombre, $apellidoPat, $apellidoMat, $direccion, $telefono, $tipoPersona);
    $_SESSION["msg"] = "Cliente agregado exitosamente";
    header('Location: ../MantenedorCliente.php');
} catch (exception $ex) {
    $_SESSION["msg"] = "Error al agregar cliente";
    header('Location: ../ingresoCliente.php');
}

