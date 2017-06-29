<?php
include 'librerias.php';
session_start();
if(!isset($_SESSION["USR"])){
                
header('Location: '.URL);
exit;

 }
?>

<html>
    <head>
    <title></title>
    <?php include './cabecera.php';?>
    
    </head>
    
    <body>
         <?php
            if(isset($_SESSION["USR"])){
        ?>
        <div id="contenedor"><?php
                $oUsu=$_SESSION["USR"];
                echo $oUsu->perfil_idPerfil;
                ?>
            <a href="<?=URL?>controlador/cierrasesion.php">Cerrar sesión</a>
            <?php }?>
            <div id="header"></div>
            <div id="menulateral"><?php include('menu.php');?></div>
            <div id="contenido"></div>
        </div>
        
    </body>

    
</html>