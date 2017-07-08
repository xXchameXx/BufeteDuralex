<!DOCTYPE html>
<?php
include 'librerias.php';
session_start();
include 'controlador/listarCliente.php';
if(!isset($_SESSION["USR"])){
                
header('Location: '.URL);
exit;

 }
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <?php include './cabecera.php';?>
        <script>
             $(document).ready(function() 
             {
               $('#example').DataTable();
             } );
        </script>
        <script type="text/javascript">
        $(document).ready(function(){
          $('#open').click(function(){
                $('#popup').fadeIn('slow');
                        return false;
            });

            $('#close').click(function(){
                $('#popup').fadeOut('slow');
                        return false;
            });
        });
        </script>
        
         <script type="text/javascript">
        $(document).ready(function(){
          $('#elimina').click(function(){
                $('#popupElimina').fadeIn('slow');
                        return false;
            });

            $('#close2').click(function(){
                $('#popupElimina').fadeOut('slow');
                        return false;
            });
        });
        </script>
        
        
        <script type="text/javascript">
        $(document).ready(function(){
          $('#edita').click(function(){
                $('#popupEdita').fadeIn('slow');
                        return false;
            });

            $('#close3').click(function(){
                $('#popupEdita').fadeOut('slow');
                        return false;
            });
        });
        </script>
        
    </head>
    <body>
        <?php
            if(isset($_SESSION["USR"])){
        ?>
        <div id="contenedor">
                

            <div id="header"></div>
            <div id="menulateral"><?php include('menu.php');?></div>
            <div id="contenido">
                <fieldset><legend>Mantenedor Cliente</legend>
                    <form style="background-color: white;">
                    <table id="example" class="display table-striped table-bordered"  >
                        <thead>
                            <tr>
                                <td>RUT</td>
                                <td>NOMBRE</td>
                                <td>APELLIDO PATERNO</td>
                                <td>APELLIDO MATERNO</td>
                                <td>DIRECCION</td>
                                <td>TELEFONO</td>
                                <td>TIPO PERSONA</td>
                                <td>EDITAR</td>
                                <td>ELIMINAR</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row = $listaCli->fetch_assoc()) { ?>
                                <tr>
                                    <td><?php echo $row['rutCliente']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['nombreCliente']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['apellidoPatCliente']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['apellidoMatCliente']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['direccionCliente']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['telefonoCliente']; ?>
                                    </td>
                                    <td>
                                                <?php
                                                if ($row['TipoPersona_idTipoPersona'] == 1) {
                                                    echo "Natural";  
                                                } 
                                                if ($row['TipoPersona_idTipoPersona'] == 2) {
                                                    echo "Juridica";  
                                                } 
                                                   
                                                ?>
                                    </td>
                                    <td>
                                        <input class="btn btn-warning" type="button" name="btnEditar" value="Editar"   >
                                        <a  href="?rut=<?= $row['rutCliente']?>" id="edita">editar</a>
                                    </td>
                                    <td>
                                        
                                        <input class="btn btn-danger" type="button" name="btnEliminar" value="Eliminar" onclick="window.location.href= '<?=URL?>controlador/eliminarCliente.php?rut=<?= $row['rutCliente']?>'">
                                    </td>
                                    
                                </tr>
                            <?php } ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td>RUT</td>
                                <td>NOMBRE</td>
                                <td>APELLIDO PATERNO</td>
                                <td>APELLIDO MATERNO</td>
                                <td>DIRECCION</td>
                                <td>TELEFONO</td>
                                <td>TIPO PERSONA</td>
                                <td>EDITAR</td>
                                <td>ELIMINAR</td>
                            </tr>
                        </tfoot>
                    </table>
                               
                        <button type="button" class="btn btn-success btn-lg btn-block " id="open" >Agregar Nuevo Cliente</button>
                            
                </form>
                    
                </fieldset>
                    <div id="popup" style="display: none; position: absolute">
                        <div class="content-popup">
                            <div class="close"><a href="#" id="close"><img src="images/close.png"/></a></div>
                            <div>
                                <?php include './RegistraCliente.php';?>
                            </div>
                        </div>
                    </div>
                    <div class="popup-overlay"></div>
                    
                     <!-- Eliminar registro -->
                    <div id="popupElimina" style="display: none; position: absolute">
                        <div class="content-popup">
                            <div class="close"><a href="#" id="close2"><img src="images/close.png"/></a></div>
                            <div>
                                <?php include './eliminaCliente.php';?>
                            </div>
                        </div>
                    </div>
                    <div class="popup-overlay"></div> 
                    
                     <!-- Editar registro -->
                     
                      <div id="popupEdita" style="display: none; position: absolute">
                        <div class="content-popup">
                            <div class="close"><a href="#" id="close3"><img src="images/close.png"/></a></div>
                            <div>
                                <?php include './editaCliente.php';?>
                            </div>
                        </div>
                    </div>
                    <div class="popup-overlay"></div> 
                    
            </div>
        </div>
                    <?php } ?>
        
        
    </body>
</html>
