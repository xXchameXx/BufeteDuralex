<!DOCTYPE html>
<?php
include 'librerias.php';
session_start();
include 'controlador/listarAbogado.php';
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
        
    </head>
    <body>
        <?php
            if(isset($_SESSION["USR"])){
        ?>
        <div id="contenedor">
                

            <div id="header"></div>
            <div id="menulateral"><?php include('menu.php');?></div>
            <div id="contenido">
                <fieldset><legend>Mantenedor Abogado</legend>
                    <form style="background-color: white;">
                    <table id="example" class="display table-striped table-bordered"  >
                        <thead>
                            <tr>
                                <td>RUT</td>
                                <td>NOMBRE</td>
                                <td>APELLIDO PATERNO</td>
                                <td>APELLIDO MATERNO</td>
                                <td>CONTRATACION</td>
                                <td>VALOR HORA</td>
                                <td>ESPECIALIDAD</td>
                                <td>EDITAR</td>
                                <td>ELIMINAR</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row = $listaAbo->fetch_assoc()) { ?>
                                <tr>
                                    <td><?php echo $row['rutAbogado']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['nombreAbogado']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['apellidoPatAbogado']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['apellidoMatAbogado']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['fechaContratacionAbogado']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['ValorHoraAbogado']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['Especialidad_idEspecialidad']; ?>
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
                                <td>CONTRATACION</td>
                                <td>VALOR HORA</td>
                                <td>ESPECIALIDAD</td>
                                <td>EDITAR</td>
                                <td>ELIMINAR</td>
                            </tr>
                        </tfoot>
                    </table>
                               
                        <button type="button" class="btn btn-success btn-lg btn-block " id="open" >Agregar Nuevo Abogado</button>
                            
                </form>
                    
                </fieldset>
                    <div id="popup" style="display: none; position: absolute">
                        <div class="content-popup">
                            <div class="close"><a href="#" id="close"><img src="images/close.png"/></a></div>
                            <div>
                                <?php include './RegistraAbogado.php';?>
                            </div>
                        </div>
                    </div>
                    <div class="popup-overlay"></div>
            </div>
        </div>
                    <?php } ?>
        
        
    </body>
</html>

