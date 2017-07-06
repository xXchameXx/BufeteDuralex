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
        
        
    </head>
    <body>
        <?php
            if(isset($_SESSION["USR"])){
        ?>
        <div id="contenedor">
                

            <div id="header"></div>
            <div id="menulateral"><?php include('menu.php');?></div>
            <div id="contenido">
                <fieldset><legend>Consulta Cliente</legend>
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
                            </tr>
                        </tfoot>
                    </table>
                               
                        <button type="button" class="btn btn-success btn-lg btn-block " id="open" >Volver</button>
                            
                </form>
                    
                </fieldset>
                    
                    
            </div>
        </div>
                    <?php } ?>
        
        
    </body>
</html>

