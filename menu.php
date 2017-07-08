

<?php
if (isset($_SESSION["USR"])) {
    $oUsu = $_SESSION["USR"];
    if ($oUsu->perfil_idPerfil == 1) {
        ?> 
        <div class="list-group">     
                    <h2 style="text-align: center" class="list-group-item"><i class="fa fa-university fa-lg"></i>Menu Gerente<i class="fa fa-university fa-lg"></i></h2>
                    <i  class="list-group-item"  aria-hidden="true"><hr></i>
                    <a style="text-align: center" class="list-group-item" href="ConsultaCliente.php"><i class="fa fa-user-circle fa-2x" aria-hidden="true"></i> Clientes</a>
                    <a style="text-align: center" class="list-group-item" href="ConsultaAbogado.php"><i class="fa fa-gavel fa-2x" aria-hidden="true"></i> Abogados</a>
                    <a style="text-align: center" class="list-group-item" href="ConsultaAtencion.php"><i class="fa fa-address-book fa-2x" aria-hidden="true"></i> Atenciones</a>
                    <i class="list-group-item"  aria-hidden="true"><hr></i>
                    <a style="text-align: center" class="list-group-item" href="#"><i aria-hidden="true" class="fa fa-pie-chart fa-2x"></i> Estadisticas</a>
                    <i class="list-group-item"  aria-hidden="true"><hr></i>
                    <a style="text-align: center" class="list-group-item" href="<?=URL?>controlador/cierrasesion.php"><i aria-hidden="true" class="fa fa-sign-out fa-2x"></i> Cerrar Sesion</a>
                </div>
        
    <?php } 
    
    if ($oUsu->perfil_idPerfil == 2) {
        ?> 
                <div class="list-group">     
            <h3 style="text-align: center" class="list-group-item"><i class="fa fa-university fa-lg"></i>Menu Administrador<i class="fa fa-university fa-lg"></i></h3>
            <i  class="list-group-item"  aria-hidden="true"><hr></i>
            <a style="text-align: center" class="list-group-item" href="MantenedorCliente.php"><i class="fa fa-user-circle fa-2x" aria-hidden="true"></i> Clientes</a>
            <a style="text-align: center" class="list-group-item" href="MantenedorAbogado.php"><i class="fa fa-gavel fa-2x" aria-hidden="true"></i> Abogados</a>
            <a style="text-align: center" class="list-group-item" href="MantenedorUsuario.php"><i class="fa fa-address-book fa-2x" aria-hidden="true"></i> Usuarios</a>
            <i class="list-group-item"  aria-hidden="true"><hr></i>
            <a style="text-align: center" class="list-group-item" href="<?= URL ?>controlador/cierrasesion.php"><i aria-hidden="true" class="fa fa-sign-out fa-2x"></i> Cerrar Sesion</a>
        </div>
    <?php } 
    
    if ($oUsu->perfil_idPerfil == 3) {
        ?> 
       
        
        <div class="list-group">     
                    <h2 style="text-align: center" class="list-group-item"><i class="fa fa-university fa-lg"></i>Menu Secretaria<i class="fa fa-university fa-lg"></i></h2>
                    <i  class="list-group-item"  aria-hidden="true"><hr></i>
                    <a style="text-align: center" class="list-group-item" href="ConsultaCliente.php"><i class="fa fa-user-circle fa-2x" aria-hidden="true"></i> Clientes</a>
                    <a style="text-align: center" class="list-group-item" href="ConsultaAbogado.php"><i class="fa fa-gavel fa-2x" aria-hidden="true"></i> Abogados</a>
                    <a style="text-align: center" class="list-group-item" href="ConsultaAtencion.php"><i class="fa fa-address-book fa-2x" aria-hidden="true"></i> Atenciones</a>
                    <i class="list-group-item"  aria-hidden="true"><hr></i>
                    <!--<a style="text-align: center" class="list-group-item" href="#"><i aria-hidden="true" class="fa fa-book fa-2x"></i> Agenda</a>-->
                    <i class="list-group-item"  aria-hidden="true"><hr></i>
                    <a style="text-align: center" class="list-group-item" href="<?=URL?>controlador/cierrasesion.php"><i aria-hidden="true" class="fa fa-sign-out fa-2x"></i> Cerrar Sesion</a>
                </div>
    <?php } 
    
    if ($oUsu->perfil_idPerfil == 4) {
        ?> 
        <div class="list-group">     
                    <h2 style="text-align: center" class="list-group-item"><i class="fa fa-university fa-lg"></i>Menu Cliente<i class="fa fa-university fa-lg"></i></h2>
                    <i  class="list-group-item"  aria-hidden="true"><hr></i>

                    <a style="text-align: center" class="list-group-item" href="AtencionesCliente.php"><i class="fa fa-address-book fa-2x" aria-hidden="true"></i> Mis Atenciones</a>
                    <i class="list-group-item"  aria-hidden="true"><hr></i>
                    <a style="text-align: center" class="list-group-item" href="<?=URL?>controlador/cierrasesion.php"><i aria-hidden="true" class="fa fa-sign-out fa-2x"></i> Cerrar Sesion</a>
                </div>
    <?php } 
    
    
}

