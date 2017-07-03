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
    
    
      public function __construct2($rut="") {
        $this -> rutAbogado = $rut;

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
    public function convertDateToMsSQL($date)
{
	if($this->validateDateEs($date))
	{
		$values=preg_split('/(\/|-)/',$date);
		$values[0]=(strlen($values[0])==2?$values[0]:"0".$values[0]);
		$values[1]=(strlen($values[1])==2?$values[1]:"0".$values[1]);
		$values[2]=(strlen($values[2])==4?$values[2]:substr(date("Y"),0,2).$values[4]);
		return $values[2].$values[1].$values[0];
	}
	return "";
}
 
/**
	* Funcion para validar una fecha en formato dd/mm/yyyy
	*/
public function validateDateEs($date)
{
	$pattern="/^(0?[1-9]|[12][0-9]|[3][01])[\/|-](0?[1-9]|[1][12])[\/|-]((19|20)?[0-9]{2})$/";
	if(preg_match($pattern,$date))
		return true;
	return false;
}
    
    public function agregarAbogado($rut="",$nom="",$apat="",$amat="",$fca="",$vha="",$eid=""){
        $oConn=new Conexion();
        
        if($oConn->Conectar()){
                $db=$oConn->objconn;        
                $sql="insert into abogado (rutAbogado,nombreAbogado,apellidoPatAbogado,apellidoMatAbogado,fechaContratacionAbogado,ValorHoraAbogado,Especialidad_idEspecialidad) values ('$rut','$nom','$apat','$amat','$fca','$vha','$eid')";
        
                $insertCliente=$db->query($sql);  
        }
           
    }
    
    public function eliminarAbogado($rut){
        //echo $rut;
        $oConn=new Conexion();
        
        if($oConn->Conectar()){
                $db=$oConn->objconn;        
                $sql="delete from abogado where rutAbogado = $rut";
                 //$sql="DELETE FROM abogado WHERE rutAbogado = 22222222";
        //echo $rut;
                //echo $sql;
                $insertCliente=$db->query($sql);  
        }
           
    }
    
    
      public function editarAbogado($rut="",$nom="",$apat="",$amat="",$fca="",$vha="",$eid=""){
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
                
                $sql="UPDATE `abogado` SET `nombreAbogado` = '$nom', `apellidoPatAbogado` = '$apat', `apellidoMatAbogado` = '$amat', `fechaContratacionAbogado` = '2017-03-01' WHERE `abogado`.`rutAbogado` = $rut";
                
                //echo $sql;      
        //echo $rut;
                //echo $sql;
                $insertCliente=$db->query($sql);  
        }
           
    }
    
    
}
