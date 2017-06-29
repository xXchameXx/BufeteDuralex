

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
        <h1>Menu Administrador</h1>
        <br>
        <h1>Mantenedores</h1>
        <br>
        <a href="MantenedorCliente.php"><i class="fa fa-home fa-2x">Clientes</i></a>
        <br>
        <a href="MantenedorAbogado.php"><i class="fa fa-home fa-2x">abogados</i></a>
        <br>
        <a href="MantenedorUsuario.php"><i class="fa fa-home fa-2x">usuarios</i></a>
        <br>
        <a href="<?=URL?>controlador/cierrasesion.php"><i class="fa fa-home fa-2x">Cerrar Sesion</i></a>
    <?php } 
    
    if ($oUsu->perfil_idPerfil == 3) {
        ?> 
        <h1>Menu Secretaria</h1>
        <h1>Consultas</h1>
        <a href="#"><i class="fa fa-home fa-2x">Clientes</i></a>
        <a href="#"><i class="fa fa-home fa-2x">Abogados</i></a>
        <a href="#"><i class="fa fa-home fa-2x">Atenciones</i></a>
        <br>

        <a href="#"><i class="fa fa-home fa-2x">Agenda</i></a>
    <?php } 
    
    if ($oUsu->perfil_idPerfil == 4) {
        ?> 
        <h1>Menu Cliente</h1>
        <br>
        <a href="#"><i class="fa fa-home fa-2x">Mis atenciones</i></a>
        <br>
    <?php } 
    
    
}

