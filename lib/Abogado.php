<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Abogado
 *
 * @author xXchameXx
 */
class Abogado {
    var $rutAbogado;
    var $nombreAbogado;
    var $apellidoPatAbogado;
    var $apellidoMatAbogado;
    var $fechaContratacionAbogado;
    var $valorHoraAbogado;
    var $especialidad_idEspecialidad;
    
    public function __construct() {
        
    }
    public function __construct1($rut="",$nom="",$apat="",$amat="",$fca="",$vha="",$eid="") {
        $this -> rutAbogado = $rut;
        $this -> nombreAbogado = $nom;
        $this -> apellidoPatAbogado = $apat;
        $this -> apellidoMatAbogado = $amat;
        $this -> fechaContratacionAbogado = $fca;
        $this -> valorHoraAbogado = $vha;
        $this -> especialidad_idEspecialidad = $eid;
    }
    
    public function listarAbogado(){
        $oConn=new Conexion();
        
        if($oConn->Conectar())
            $db=$oConn->objconn;            
        else
            return false;

        
        
        $sql="SELECT * FROM abogado";
        
        $listadoAbogado=$db->query($sql);
        
       
        return $listadoAbogado;
            
    }
}
