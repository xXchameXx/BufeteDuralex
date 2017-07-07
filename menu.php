

<?php
if (isset($_SESSION["USR"])) {
    $oUsu = $_SESSION["USR"];
    if ($oUsu->perfil_idPerfil == 1) {
        ?> 
        <h1>Menu Gerente</h1>
        <br>
        <h1>Consultas</h1>
        <a href="#"><i class="fa fa-home fa-2x">Clientes</i></a>
        <br>
        <a href="#"><i class="fa fa-home fa-2x">Abogados</i></a>
        <br>
        <a href="#"><i class="fa fa-home fa-2x">Atenciones</i></a>
        <br>
        <h1>Consultas estadisticas</h1>
        <br>
        <a href="#"><i class="fa fa-home fa-2x">estadisticas</i></a>
        
    <?php } 
    
    if ($oUsu->perfil_idPerfil == 2) {
        ?> 
         <div class="list-group">     
                    <h2 style="text-align: center" class="list-group-item"><i class="fa fa-university fa-lg"></i>Menu Secretaria<i class="fa fa-university fa-lg"></i></h2>
                    <i  class="list-group-item"  aria-hidden="true"><hr></i>
                    <a style="text-align: center" class="list-group-item" href="MantenedorCliente.php"><i class="fa fa-user-circle fa-2x" aria-hidden="true"></i> Clientes</a>
                    <a style="text-align: center" class="list-group-item" href="MantenedorAbogado.php"><i class="fa fa-gavel fa-2x" aria-hidden="true"></i> Abogados</a>
                    <a style="text-align: center" class="list-group-item" href="MantenedorUsuario.php"><i class="fa fa-address-book fa-2x" aria-hidden="true"></i> Usuarios</a>
                    <i class="list-group-item"  aria-hidden="true"><hr></i>
                    <a style="text-align: center" class="list-group-item" href="<?=URL?>controlador/cierrasesion.php"><i aria-hidden="true" class="fa fa-sign-out fa-2x"></i> Cerrar Sesion</a>
                </div>
    <?php } 
    
    if ($oUsu->perfil_idPerfil == 3) {
        ?> 
       
        
        <div class="list-group">     
                    <h2 style="text-align: center" class="list-group-item"><i class="fa fa-university fa-lg"></i>Menu Secretaria<i class="fa fa-university fa-lg"></i></h2>
                    <i  class="list-group-item"  aria-hidden="true"><hr></i>
                    <a style="text-align: center" class="list-group-item" href="ConsultaCliente.php"><i class="fa fa-user-circle fa-2x" aria-hidden="true"></i> Clientes</a>
                    <a style="text-align: center" class="list-group-item" href="ConsultaAbogado.php"><i class="fa fa-gavel fa-2x" aria-hidden="true"></i> Abogados</a>
                    <a style="text-align: center" class="list-group-item" href="ConsultaAtenciones.php"><i class="fa fa-address-book fa-2x" aria-hidden="true"></i> Atenciones</a>
                    <i class="list-group-item"  aria-hidden="true"><hr></i>
                    <a style="text-align: center" class="list-group-item" href="#"><i aria-hidden="true" class="fa fa-book fa-2x"></i> Agenda</a>
                </div>
    <?php } 
    
    if ($oUsu->perfil_idPerfil == 4) {
        ?> 
        <h1>Menu Cliente</h1>
        <br>
        <a href="#"><i class="fa fa-home fa-2x">Mis atenciones</i></a>
        <br>
    <?php } 
    
    
}

