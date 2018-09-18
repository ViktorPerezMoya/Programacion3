<?php

require_once '../dao/BD.php';
require_once '../dao/ArticuloDAO.php';
require_once '../modelo/Articulo.php';

function articulos(){
    $artDao = new ArticuloDAO();
    return $artDao->getAll(); 
}