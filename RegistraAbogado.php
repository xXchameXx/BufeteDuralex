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
          
        <fieldset><legend>Nuevo Abogado</legend>                 
            <form  action="controlador/agregarAbogado.php" method="post" >
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
                        <label >Fecha Contrato</label>
                        <input type="date" class="form-control" name="txtFecha" >
                        <br>
                        <label >Valor Hora</label>
                        <input type="number" class="form-control" name="txtValor" placeholder="Valor Hora">
                        <br>
                        <label >Especialidad</label>
                        <select class="form-control" name="ddlEspecialidad">
                            <option value="1">Civil</option>
                            <option value="2">Penal</option>
                            <option value="3">Procesal</option>
                            <option value="4">Publico</option>
                            <option value="5">Comercial</option>
                            <option value="6">Economico</option>
                            <option value="7">Tributario</option>
                            <option value="8">Laboral</option>
                        </select>
                        <br>
                        <br>
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Guardar Abogado</button>
                    </div>			
            </form>
			
     </fieldset>

        <?php } ?>
    </body>
</html>
