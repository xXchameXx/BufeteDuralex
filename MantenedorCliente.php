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
        <link href="css/estiloprincipal.css" rel="stylesheet" type="text/css"/>
        <link href="css/datatables/media/css/jquery.dataTables.css" rel="stylesheet" type="text/css"/>
        <script src="css/datatables/media/js/jquery.js" type="text/javascript"></script>
        <script src="css/datatables/media/js/jquery.dataTables.js" type="text/javascript"></script>
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
                                        <?php echo $row['TipoPersona_idTipoPersona']; ?>
                                    </td>
                                    <td>
                                        <input class="btn btn-warning" type="button" name="btnEditar" value="Editar">
                                    </td>
                                    <td>
                                        <input class="btn btn-danger" type="button" name="btnEliminar" value="Eliminar">
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
            </div>
        </div>
                    <?php } ?>
        
        
    </body>
</html>