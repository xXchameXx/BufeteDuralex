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
        
        
    </head>
    <body>
        <?php
            if(isset($_SESSION["USR"])){
        ?>
        <div id="contenedor">
                

            <div id="header"></div>
            <div id="menulateral"><?php include('menu.php');?></div>
            <div id="contenido">
                <fieldset>
                    <legend>Consulta Abogado 
                        <!--<input class="btn btn-danger" type="button" name="btnEliminar" value="Eliminar" id="elimina">-->
                    </legend>
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
                                                <?php
                                                if ($row['Especialidad_idEspecialidad'] == 1) {
                                                    echo "Civil";
                                                }
                                                if ($row['Especialidad_idEspecialidad'] == 2) {
                                                    echo "Penal";
                                                }
                                                if ($row['Especialidad_idEspecialidad'] == 3) {
                                                    echo "Procesal";
                                                }
                                                if ($row['Especialidad_idEspecialidad'] == 4) {
                                                    echo "Publico";
                                                }
                                                if ($row['Especialidad_idEspecialidad'] == 5) {
                                                    echo "Comercial";
                                                }
                                                if ($row['Especialidad_idEspecialidad'] == 6) {
                                                    echo "Economico";
                                                }
                                                if ($row['Especialidad_idEspecialidad'] == 7) {
                                                    echo "Tributario";
                                                }
                                                if ($row['Especialidad_idEspecialidad'] == 8) {
                                                    echo "Laboral";
                                                }
                                                ?>                                        
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



