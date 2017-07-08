<?php
include 'librerias.php';
session_start();
include 'controlador/listarAtencionCliente.php';
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
                                <td>ID</td>
                                <td>FECHA Y HORA</td>
                                <td>ESTADO</td>
                                <td>RUT ABOGADO</td>
                                <td>RUT CLIENTE</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row = $listaAte->fetch_assoc()) { ?>
                                <tr>
                                    <td><?php echo $row['idatencion']; ?>
                                    </td>
                                    <td>
                                        <?php $date = date_create($row['FechaHoraAtencion']); echo date_format($date, 'd-m-y H:i'); ?>
                                    </td>
                                    <td>
                                                <?php
                                                if ($row['Estado_idEstado'] == 1) {
                                                    echo "Agendada";
                                                } 
                                                if ($row['Estado_idEstado'] == 2) {
                                                    echo "Confirmada";
                                                } 
                                                if ($row['Estado_idEstado'] == 3) {
                                                    echo "Anulada";
                                                } 
                                                if ($row['Estado_idEstado'] == 4) {
                                                    echo "Perdida";
                                                } 
                                                if ($row['Estado_idEstado'] == 5) {
                                                    echo "Realizada";
                                                } 
                                                ?>
                                    </td>
                                    <td>
                                        <?php echo $row['Abogado_rutAbogado']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['Cliente_rutCliente']; ?>
                                    </td>
                                    
                                </tr>
                            <?php } ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td>ID</td>
                                <td>FECHA Y HORA</td>
                                <td>ESTADO</td>
                                <td>RUT ABOGADO</td>
                                <td>RUT CLIENTE</td>
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