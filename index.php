<?php 
/*si no esta echo el login se regresa a la pagina principal*/
include 'librerias.php';
session_start();
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>

        <meta charset="UTF-8">
        <title></title>
        <?php include './cabecera.php';?>
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <script src="<?=URL?>js/jquery-3.2.1.min.js" type="text/javascript"></script>
   
    <body>
        <header>
            <h1>Bufete Abogados Duralex</h1>
        </header>

        
        
        <?php
            if(isset($_SESSION["USR"])){
        ?>
        <div><?php
                $oUsu=$_SESSION["USR"];
                echo $oUsu->user;
                ?>
            <a href="<?=URL?>controlador/cierrasesion.php">Cerrar sesión</a>
        </div>
        <?php
        }
        if(!isset($_SESSION["USR"])){
        ?>
        <section>
        <article>
        <fieldset>
        <form action="<?=URL?>controlador/valida.php" method="post">
            <table>
            <tr>
                <td>
                    <div><label>Nombre: </label><input id="nomusu" type="text" name="nomusu"></div>
                </td>
            </tr>    
            <tr>
                <td>
                    <div><label>Clave: </label><input id="claveusu" type="password" name="claveusu"></div>
                </td>
            </tr>
            <tr>
                <td>
                    <input id="enviar" type="button" value="Acceder">
                    <div id="msjweb"></div>
                </td>
            </tr>
            
            </table>
        </form>
            
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="balanza.jpg" alt="Balanza">
    </div>

    <div class="item">
      <img src="libros.jpg" alt="Libros">
    </div>

    <div class="item">
      <img src="martillo2.jpg" alt="Martillo">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
            
        </fieldset>
        </article>
        </section>
        <?php 
            }
           ?>
        
        <footer>
        <h1>Bufete Abogados Duralex LTDA</h1>
        <h2>Teléfono 222785690 - 2255986185</a></h2>
        <h2>Dirección av.Antonio Varas 666</a></h2>
        </footer>
        
    </body>
    <script type="text/javascript">
        $(document).ready(function(){
            
             $("#enviar").click(function(){
                 if($("#nomusu").val()=="" || $("#claveusu").val()==""){
                     alert("Debe agregar un usuario y clave");
                 }
                 else{
                     $.ajax({url:"<?=URL?>controlador/valida.php"
                            ,type:"post"
                            ,data:{'nomusu':$("#nomusu").val(),
                                   'claveusu':$("#claveusu").val()}
                            ,success:function(resweb){
                                $('#msjweb').html(resweb);
                                if(resweb=="Todo Bien"){
                                    location.href="<?=URL;?>admin.php";
                                }
                            }
                        });//Cierre AJAX                     
                 }
                
            });//Click del botón  
            
        });//Ready del document
    
    </script>
   
</html>