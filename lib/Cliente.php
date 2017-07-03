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
    
      public function __construct2($rut="",$nom="",$apat="",$amat="",$dire="",$tel="") {
        $this -> rutCliente = $rut;
        $this -> nombreCliente = $nom;
        $this -> apellidoPatCliente = $apat;
        $this -> apellidoMatCliente = $amat;
        $this -> direccionCliente = $dire;
        $this -> telefonoCliente = $tel;
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
    
    
      public function eliminarCliente($rut){
        //echo $rut;
        $oConn=new Conexion();
        
        if($oConn->Conectar()){
                $db=$oConn->objconn;        
                $sql="delete from cliente where rutCliente = $rut";
                 //$sql="DELETE FROM abogado WHERE rutAbogado = 22222222";
        //echo $rut;
                //echo $sql;
                $insertCliente=$db->query($sql);  
        }
           
    }
    
    
      public function editarCliente($rut="",$nom="",$apat="",$amat="",$dire="",$tel=""){
        //echo $rut;
        //echo $nom;
        //echo $apat;
        //echo $amat;
        //echo $fca;  
        //echo $vha;
        //echo $eid;  
        $oConn=new Conexion();
        
        if($oConn->Conectar()){
                $db=$oConn->objconn;        
                //$sql="update abogado set rutAbogado = $rut,nombreAbogado=$nom,apellidoPatAbogado=$apat,apellidoMatAbogado=$amat,fechaContratacionAbogado=$fca,valorHoraAbogado=$vha,Especialidad_idEspecialidad=$eid where rutAbogado = $rut";
                 //$sql="Update Clientes Set telefono='$telefono' Where nombre='$nombre'";
                 //$rut="",$nom="",$apat="",$amat="",$fca="",$vha="",$eid="
                 //$sql = "UPDATE `users` SET `id`='$id',`name`='$name',`email`='$email',`nickname`='$nickname',`password`='$password',`salt`='$salt' WHERE `id`='$id'"; 

                //$sql="UPDATE abogado SET nombreAbogado=$nom,apellidoPatAbogado=$apat,apellidoMatAbogado=$amat,ValorHoraAbogado=$vha,Especialidad_idEspecialidad=$eid WHERE abogado.rutAbogado = $rut";
                
                //$sql="UPDATE `abogado` SET `nombreAbogado` = '$nom', `apellidoPatAbogado` = '$apat', `apellidoMatAbogado` = '$amat', `fechaContratacionAbogado` = '2017-03-01' WHERE `abogado`.`rutAbogado` = $rut";
                
               $sql= "UPDATE `cliente` SET `nombreCliente` = '$nom', `apellidoPatCliente` = '$apat', `apellidoMatCliente` = '$amat', `direccionCliente` = '$dire', `telefonoCliente` = '$tel' WHERE `cliente`.`rutCliente` = $rut";
                
                //echo $sql;      
        //echo $rut;
                //echo $sql;
                $insertCliente=$db->query($sql);  
        }
           
    }
    
  
}
