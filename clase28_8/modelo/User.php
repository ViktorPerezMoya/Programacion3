<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author ViktorPerez
 */
class User {
    private $usuario;
    private $clave;
    private $nombre_usuario;
    function __construct($usuario, $clave) {
        $this->usuario = $usuario;
        $this->clave = $clave;
    }
    function getUsuario() {
        return $this->usuario;
    }

    function getClave() {
        return $this->clave;
    }

    function getNombre_usuario() {
        return $this->nombre_usuario;
    }

    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    function setClave($clave) {
        $this->clave = $clave;
    }

    function setNombre_usuario($nombre_usuario) {
        $this->nombre_usuario = $nombre_usuario;
    }



}
