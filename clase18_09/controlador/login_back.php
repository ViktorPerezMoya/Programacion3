<?php
$user = $_POST['user'];
$pass = $_POST['pass'];

require_once '../dao/BD.php';
require_once '../dao/UsarioDAO.php';
require_once '../modelo/Usuario.php';

$userDao = new UsuarioDAO();
$usuario = $userDao->getUser($user, $pass);

if(!empty($usuario)){
    session_start();
    $_SESSION['id_user'] = $usuario->getId();
    $_SESSION['nombre_user'] = $usuario->getNombre();
    header('Location: ../vista/home.php');
}else{
    header('Location: ../index.php');
}