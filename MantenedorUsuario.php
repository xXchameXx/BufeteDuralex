<!DOCTYPE html>
<?php
include 'librerias.php';
session_start();
include 'controlador/listarUsuario.php';
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
                <fieldset><legend>Mantenedor Usuarios</legend>
                    <form style="background-color: white;" action="<?= URL ?>controlador/valida.php" method="post">
                    <table id="example" class="display table-striped table-bordered"  >
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>USER</td>
                                <td>CLAVE</td>
                                <td>PERFIL</td>
                                <td>CLIENTE</td>
                                <td>ABOGADO</td>
                                <td>EDITAR</td>
                                <td>ELIMINAR</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row = $listaUsu->fetch_assoc()) { ?>
                                <tr>
                                    <td><?php echo $row['idUsuario']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['user']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['clave']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['Perfil_idPerfil']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['Cliente_rutCliente']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['Abogado_rutAbogado']; ?>
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
                                <td>ID</td>
                                <td>USER</td>
                                <td>CLAVE</td>
                                <td>PERFIL</td>
                                <td>CLIENTE</td>
                                <td>ABOGADO</td>
                                <td>EDITAR</td>
                                <td>ELIMINAR</td>
                            </tr>
                        </tfoot>
                    </table>
                               
                        <button type="button" class="btn btn-success btn-lg btn-block " id="open" >Agregar Nuevo Usuario</button>
                            
                </form>
                    
                </fieldset>
                    <div id="popup" style="display: none; position: absolute">
                        <div class="content-popup">
                            <div class="close"><a href="#" id="close"><img src="images/close.png"/></a></div>
                            <div>
                                <?php include './RegistraUsuario.php';?>
                            </div>
                        </div>
                    </div>
                    <div class="popup-overlay"></div>
            </div>
        </div>
                    <?php } ?>
        
        
    </body>
</html>
