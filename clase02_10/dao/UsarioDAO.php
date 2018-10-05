<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserDAO
 *
 * @author ViktorPerez
 */
class UsuarioDAO {
    //put your code here
    
    public function getUser($user,$pass){
        $conn = BD::conectaDb();
        
        $query = "SELECT id, username, password, nombre FROM usuario WHERE username = :usr AND password = :psw LIMIT 1;";
        $result = $conn->prepare($query);
        $result->execute(array("usr"=>$user, "psw"=>$pass));
        $usuario = null;
        foreach ($result->fetchAll() as $r){
            $usuario = new Usuario();
            $usuario->setId($r['id']);
            $usuario->setNombre($r['nombre']);
            $usuario->setPassword($r['password']);
            $usuario->setUsername($r['username']);
            
        }
        
        BD::desconectar($conn);
        
        return $usuario;
    }
    
}
