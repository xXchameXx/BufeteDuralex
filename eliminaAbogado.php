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
    </head>
    <body>
        <?php
        if (isset($_SESSION["USR"])) {
            ?>
          
        <fieldset><legend>Seguro que desea eliminar</legend>                 
            <form  action="controlador/elimnarAbogado.php" method="post" >
                <div class="form-group">
                        <label >Rut</label>
                        <input type="text" class="form-control" name="txtRut2" placeholder="Rut">
                        
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Eliminar Abogado</button>
                    </div>			
            </form>
			
     </fieldset>

        <?php } ?>
    </body>
</html>

