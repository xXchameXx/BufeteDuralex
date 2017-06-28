<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cliente
 *
 * @author xXchameXx
 */
class Cliente {
    var $rutCliente;
    var $nombreCliente;
    var $apellidoPatCliente;
    var $apellidoMatCliente;
    var $direccionCliente;
    var $telefonoCliente;
    var $tipoPersona_idTipoPersona;
    
    public function __construct() {
        
    }
    public function __construct1($rut="",$nom="",$apat="",$amat="",$dire="",$tel="",$tipop="") {
        $this -> rutCliente = $rut;
        $this -> nombreCliente = $nom;
        $this -> apellidoPatCliente = $apat;
        $this -> apellidoMatCliente = $amat;
        $this -> direccionCliente = $dire;
        $this -> telefonoCliente = $tel;
        $this -> tipoPersona_idTipoPersona = $tipop;
    }
    
    public function listarCliente(){
        $oConn=new Conexion();
        
        if($oConn->Conectar())
            $db=$oConn->objconn;            
        else
            return false;

        
        
        $sql="SELECT * FROM cliente";
        
        $listadoCliente=$db->query($sql);
        
       
        return $listadoCliente;
            
    }
    public function agregarCliente($rut="",$nom="",$apat="",$amat="",$dire="",$tel="",$tipop=""){
        $oConn=new Conexion();
        
        if($oConn->Conectar()){
                $db=$oConn->objconn;        
                $sql="insert into cliente (rutCliente,nombreCliente,apellidoPatCliente,apellidoMatCliente,direccionCliente,telefonoCliente,TipoPersona_idTipoPersona) values ('$rut','$nom','$apat','$amat','$dire','$tel','$tipop')";
        
                $insertCliente=$db->query($sql);  
        }
           
    }
  
}
