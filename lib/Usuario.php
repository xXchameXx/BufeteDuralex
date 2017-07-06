<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Usuario{
    var $idUsuario;
    var $user;
    var $clave;
    var $perfil_idPerfil;
    var $cliente_rutCliente;
    var $abogado_rutAbogado;
    
    
    
    public function __construct($usu="",$pwd="") {
        $this->user=$usu;
        $this->clave=$pwd;
    }
    public function __construct1() {
        
    }
    
    public function __construct2($usu="",$pwd="",$perfil="",$cliente="",$abogado="") {
        $this->user=$usu;
        $this->clave=$pwd;
        $this->perfil_idPerfil =$perfil;
        $this->cliente_rutCliente =$cliente;
        $this->abogado_rutAbogado =$abogado;
    }
    
    public function VerificaAcceso(){
        $oConn=new Conexion();
        
        if($oConn->Conectar())
            $db=$oConn->objconn;            
        else
            return false;

        $clavemd5=md5($this->clave);
        
        $sql="SELECT * FROM usuario"
             ." WHERE user='$this->user' and clave='$clavemd5'";
        
        $resultado=$db->query($sql);
        
       
        if($resultado->num_rows>=1){
            $row = $resultado->fetch_row();
            $this->idUsuario=$row[0];
            $this->user=$row[1];
            $this->perfil_idPerfil=$row[3];
            $this->cliente_rutCliente=$row[4];
            $this->abogado_rutAbogado=$row[5];
            return true;
        }
        else{
            return false;
        }
            
    }
    public function listarUsuario(){
        $oConn=new Conexion();
        
        if($oConn->Conectar())
            $db=$oConn->objconn;            
        else
            return false;

        
        
        $sql="SELECT * FROM usuario";
        
        $listadoUsuario=$db->query($sql);
        
       
        return $listadoUsuario;
            
    }
    
    public function agregarUsuario($id="",$usu="",$pwd="",$perfil="",$cliente="",$abogado=""){
        $oConn=new Conexion();
        
        if($oConn->Conectar()){
                $db=$oConn->objconn;        
                $sql="insert into usuario (idUsuario,user,clave,Perfil_idPerfil,Cliente_rutCliente,Abogado_rutAbogado) values ('$id','$usu','$pwd','$perfil','$cliente','$abogado')";
        
                $insertUsuario=$db->query($sql);  
        }
           
    }
}
