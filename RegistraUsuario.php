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
          
        <fieldset><legend>Nuevo Cliente</legend>                 
            <form  action="agregarCliente.php" method="post" >
                <div class="form-group">
                        <label for="exampleInputEmail1">Usuario</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                        <br>
                        <label for="exampleInputEmail1">Clave</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                        
                    </div>			
            </form>
			
     </fieldset>

        <?php } ?>
    </body>
</html>
