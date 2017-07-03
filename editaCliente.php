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
          
        <fieldset><legend>Editar Cliente</legend>                 
           <form  action="controlador/editarCliente.php" method="post" >
                <div class="form-group">
                        <label >Rut</label>
                        <input type="text" class="form-control" name="txtRut" placeholder="Rut">
                        <br>
                        <label >Nombre</label>
                        <input type="text" class="form-control" name="txtNombre" placeholder="Nombre">
                        <br>
                        <label >Apellido Paterno</label>
                        <input type="text" class="form-control" name="txtApellidoPat" placeholder="Apellido Paterno">
                        <br>
                        <label >Apellido Materno</label>
                        <input type="text" class="form-control" name="txtApellidoMat" placeholder="Apellido Materno">
                        <br>
                        <label >Direccion</label>
                        <input type="text" class="form-control" name="txDireccion" placeholder="Direccion">
                        <br>
                        <label >Telefono</label>
                        <input type="text" class="form-control" name="txtTelefono" placeholder="Telefono">
                        <br>
                        <label >Tipo Persona</label>
                        <select class="form-control" name="ddlTipoPersona">
                            <option value="1">Natural</option>
                            <option value="2">Juridica</option>
                        </select>
                        <br>
                        <br>
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Guardar Cliente</button>
                    </div>			
            </form>
			
     </fieldset>

        <?php } ?>
    </body>
</html>
