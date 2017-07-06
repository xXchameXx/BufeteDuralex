<?php

session_start();

include '../librerias.php';

try {
    $objUsuario = new Usuario();
    $user = $_POST['txtUser'];
    $clave = $_POST['txtClave'];
    $perfil = $_POST['ddlPerfil'];
    
    
    $objUsuario->agregarUsuario(5,$user,$clave,$perfil,NULL,NULL);
    $_SESSION["msg"] = "Usuario agregado exitosamente";
    header('Location: ../MantenedorUsuario.php');
} catch (exception $ex) {
    $_SESSION["msg"] = "Error al agregar usuario";
    header('Location: ../ingresoUsuario.php');
}