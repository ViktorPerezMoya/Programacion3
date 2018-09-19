<?php
require_once '../dao/BD.php';
require_once '../dao/ArticuloDAO.php';
require_once '../modelo/Articulo.php';

$accion = $_POST['accion'];

switch ($accion){
    case "crear":
        echo crearArticulo();
        break;
    case "editar":
        echo editarArticulo();
        break;
    case "consultar":
        echo traerTabla();
        break;
    case "eliminar":
        echo borrarArticulo();
        break;
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


function editarArticulo(){
    $descr = $_POST['descripcion'];
    $prec = $_POST['precio'];
    $id = $_POST['id'];
    $art = new Articulo();
    $art->setId($id);
    $art->setPrecio($prec);
    $art->setDescripcion($descr);
    $aDAO = new ArticuloDAO();
    
    return $aDAO->editArticulo($art);
    
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

function borrarArticulo(){
    $id = $_POST['id'];
    
    $aDAO = new ArticuloDAO();
    
    return $aDAO->deleteArticulo($id);
}