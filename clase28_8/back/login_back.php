<?php
$username = $_POST['username'];
$password = $_POST['pass'];
$existe = false;//con esta variable determinaremos si continuar a la siguiente vista o volver al login
//realizamos la conexion a la base de datos
$conn = mysqli_connect('localhost', 'root', '', 'bdnet', '3306');
if (!$conn) {
    die('Could not connect to MySQL: ' . mysqli_connect_error());
}
// Establece el conjunto de caracteres predeterminado
mysqli_query($conn, 'SET NAMES \'utf8\'');
//nuestro codigo
//declaramos la consulta sql
$result = mysqli_query($conn, "SELECT id, nombre FROM usuario WHERE username = '$username' AND password = '$password';");
//var_dump($result);die();
//mysqli_fetch_array nos devolvera la un conjunto de filas pero solo accederemos a la primera si es que existen
if (($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) != NULL) {
    ////inicia o reanuda una sesion
    session_start();
    //guardamlos el nombre de usuario y id
    $_SESSION['id_user'] = $row['id'];
    $_SESSION['nombre_user'] = $row['nombre'];
    $existe = true;
}
//liberamos la memoria
mysqli_free_result($result);

if($existe){
    echo 'OK';
}else{
    echo 'FAIL';
}

//fin de nuestro codigo
mysqli_close($conn);