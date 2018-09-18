<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BD
 *
 * @author ViktorPerez
 */
class BD {
    static function conectaDb()
    {
        try {
            $conn = new PDO('mysql:host=localhost;dbname=bdnet', 'root', '');
            $conn->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
            $conn->exec("set names utf8");
            return $conn;
        } catch(PDOException $e) {
            var_dump("Error grave: ".$e->getMessage());die();
            
        }
        return null;
    }
    
    static function desconectar($conn){
        $conn = null;
    }
}
