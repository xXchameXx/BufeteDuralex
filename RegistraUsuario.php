<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
         <?php
        if (isset($_SESSION["USR"])) {
            ?>
          
        <fieldset><legend>Nuevo Usuario</legend>                 
                <form  action="controlador/agregarUsuario.php" method="POST" >
                    <div class="form-group">
                        <label >Usuario</label>
                        <input type="text" class="form-control" name="txtUser"  placeholder="User">
                        <br>
                        <label >Clave</label>
                        <input type="password" class="form-control" name="txtClave"  placeholder="Clave">
                        <br>
                        <label >Perfil</label>
                        <select class="form-control" name="ddlPerfil">
                            <option value="1">Gerente</option>
                            <option value="2">Administrador</option>
                            <option value="3">Secretaria</option>
                            <option value="4">Cliente</option>
                        </select>
                        <br>
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Guardar Usuario</button>

                    </div>			
                </form>

            </fieldset>

        <?php } ?>
    </body>
</html>
