<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Atencion
 *
 * @author xXchameXx
 */
class Atencion {

    var $idAtencion;
    var $fechaHoraAtencion;
    var $idEstado;
    var $rutAbogado;
    var $rutCliente;

    public function getIdAtencion() {
        return $this->idAtencion;
    }

    public function getFechaHoraAtencion() {
        return $this->fechaHoraAtencion;
    }

    public function getIdEstado() {
        return $this->idEstado;
    }

    public function getRutAbogado() {
        return $this->rutAbogado;
    }

    public function getRutCliente() {
        return $this->rutCliente;
    }

    public function setIdAtencion($_idAtencion) {
        $this->idAtencion = $_idAtencion;
    }

    public function setFechaHoraAtencion($_fechaHoraAtencion) {
        $this->fechaHoraAtencion = $_fechaHoraAtencion;
    }

    public function setIdEstado($_idEstado) {
        $this->idEstado = $_idEstado;
    }

    public function setRutAbogado($_rutAbogado) {
        $this->rutAbogado = $_rutAbogado;
    }

    public function setRutCliente($_rutCliente) {
        $this->rutCliente = $_rutCliente;
    }

    public function __construct() {
        
    }

    public function __construct1($idate = "", $fecha = "", $idest = "", $ruta = "", $rutc = "") {
        $this->idAtencion = $idate;
        $this->fechaHoraAtencion = $fecha;
        $this->idEstado = $idest;
        $this->rutAbogado = $ruta;
        $this->rutCliente = $rutc;
    }

    public function listarAtenciones() {
        $oConn = new Conexion();

        if ($oConn->Conectar())
            $db = $oConn->objconn;
        else
            return false;



        $sql = "SELECT * FROM atencion";

        $listadoAtencion = $db->query($sql);


        return $listadoAtencion;
    }
    public function listarXCliente($rutc = "") {
        $oConn = new Conexion();

        if ($oConn->Conectar())
            $db = $oConn->objconn;
        else
            return false;



        $sql = "SELECT * FROM atencion WHERE Cliente_rutCliente = $rutc";

        $listadoAtencionCliente = $db->query($sql);


        return $listadoAtencionCliente;
    }

    public function agregarAtencion($fecha = "", $idest = "", $ruta = "", $rutc = "") {
        $oConn = new Conexion();

        if ($oConn->Conectar()) {
            $db = $oConn->objconn;
            $sql = "insert into atencion (FechaHoraAtencion, Estado_idEstado, Abogado_rutAbogado, Cliente_rutCliente) values ('$fecha','$idest','$ruta','$rutc')";

            $insertAtencion = $db->query($sql);
        }
    }

}
