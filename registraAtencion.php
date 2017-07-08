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
     

     
    </head>
    <body>
        <?php
        if (isset($_SESSION["USR"])) {
            ?>
          
        <fieldset><legend>Nueva Atención</legend>                 
            <form  action="controlador/agregarAtencion.php" method="post" >
                <div class="form-group">
                        <label >Fecha Atencion</label>
                        <input type="date" class="form-control" name="txtFechaAten" >
                        <br>
                        <label >Estado</label>
                        <select class="form-control" name="ddlEstado">
                            <option value="1">Agendada</option>
                            <option value="2">Confirmada</option>
                            <option value="3">Anulada</option>
                            <option value="4">Perdida</option>
                            <option value="5">Realizada</option>
                        </select>
                        <br>
                        <label >Rut Abogado</label>
                        <input type="text" class="form-control" name="txtRutAbo" placeholder="Rut">
                        <br>
                        <label >Rut Cliente</label>
                        <input type="text" class="form-control" name="txtRutCli" placeholder="Rut">
                        
                        <br>
                        <br>
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Guardar Atencion</button>
                    </div>			
            </form>
			
     </fieldset>

        <?php } ?>
    </body>
</html>
