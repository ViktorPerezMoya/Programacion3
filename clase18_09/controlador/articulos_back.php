<?php
require_once '../dao/BD.php';
require_once '../dao/ArticuloDAO.php';
require_once '../modelo/Articulo.php';

$accion = $_POST['accion'];
if($accion == "crear"){
    echo crearArticulo();
}else if($accion == "consultar"){
    echo traerTabla();
}

function crearArticulo(){
    $descr = $_POST['descripcion'];
    $prec = $_POST['precio'];
    $art = new Articulo();
    $art->setPrecio($prec);
    $art->setDescripcion($descr);
    $aDAO = new ArticuloDAO();
    
    return $aDAO->createArticulo($art);
    
}

function traerTabla(){
    $artDao = new ArticuloDAO();
    $array = $artDao->getAll(); 
    $htmlTabla = "";
    foreach ($array as $a){
        $htmlTabla.= '<tr>';
        $htmlTabla.= '<th>'.$a->getId().'</th>';
        $htmlTabla.= '<td>'.$a->getDescripcion().'</td>';
        $htmlTabla.= '<td>'.$a->getPrecio().'</td>';
        $htmlTabla.= '<td><button type="button" class="btn btn-primary">Editar</button><button type="button" class="btn btn-danger">Borrar</button></td>';
        $htmlTabla.= '</tr>';
    }
    return $htmlTabla;
}