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
    
//    public function __construct2($usu="",$pwd="",$perfil="",$abogado="") {
//        $this->user=$usu;
//        $this->clave=$pwd;
//        $this->perfil_idPerfil =$perfil;
//        $this->abogado_rutAbogado =$abogado;
//    }
    
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
}
