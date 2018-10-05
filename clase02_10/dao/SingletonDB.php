<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SingletonDB
 *
 * @author ViktorPerez
 */
class SingletonDB {
    //put your code here
    private static $conn = null;
    
    private function __construct() {
        
    }


    public static function getInstancia()
    {
        try {
            if(empty(self::$conn)){
                self::$conn = new PDO('mysql:host=localhost;dbname=bdnet', 'root', '');
                self::$conn->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
                self::$conn->exec("set names utf8");
            }
        } catch(PDOException $e) {
            var_dump("Error grave: ".$e->getMessage());die();
            
        }
        return self::$conn;
    }
}
