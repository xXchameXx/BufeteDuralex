<?php

if(!isset($_SESSION["USR"])){
                
exit;

 }
?>

<?php
if (isset($_SESSION["USR"])) {
    $oUsu = $_SESSION["USR"];
    if ($oUsu->perfil_idPerfil == 2) {
        ?> 
        <h1>Menu Administrador</h1>
        <br>
        <a href="#"><i class="fa fa-home fa-2x">Lista y consultas</i></a>
        <br>
        <a href="#"><i class="fa fa-home fa-2x">estadisticas</i></a>
    <?php } 
}
?>
