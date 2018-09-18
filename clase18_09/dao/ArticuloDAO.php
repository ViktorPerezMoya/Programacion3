<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ArticuloDAO
 *
 * @author ViktorPerez
 */
class ArticuloDAO {
    
    public function getAll(){
        $conn = BD::conectaDb();
        
        $query = "SELECT id, precio, descripcion FROM articulo;";
        $result = $conn->prepare($query);
        $result->execute();
        
        $array_art = array();
        foreach ($result->fetchAll() as $a){
            $articulo = new Articulo();
            $articulo->setId($a['id']);
            $articulo->setDescripcion($a['descripcion']);
            $articulo->setPrecio($a['precio']);
            
            array_push($array_art, $articulo);
        }
        
        BD::desconectar($conn);
        
        return $array_art;;
    }
    
    public function createArticulo($articulo){
        $conn = BD::conectaDb();
        $msg = "";
        
        $query = "INSERT INTO articulo (precio, descripcion) VALUES (:prec, :desc);";
        $result = $conn->prepare($query);
        if($result->execute(array('prec' => $articulo->getPrecio(), 'desc'=>$articulo->getDescripcion()))){
            $msg = "OK";
        }else{
            $msg = "FAIL";
        }
        
        
        BD::desconectar($conn);
        
        return $msg;
    }
    
}
