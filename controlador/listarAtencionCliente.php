<?php

$oAtencion=new Atencion();
$oUsu=$_SESSION["USR"];
$rutCliente=$oUsu->cliente_rutCliente;
$listaAte = $oAtencion->listarXCliente($rutCliente);

