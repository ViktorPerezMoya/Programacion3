<?php
session_start();
if(empty($_SESSION['id_user'])){
    header("Location: http://localhost/ejemplo/clase28_8/login.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Bienvenido!</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="estilos.css"/>
        <script type="text/javascript" src="jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="funciones.js"/></script>
    <script type="text/javascript" src="usuarios.js"/></script>
    </head>
    <body>
        <div class="menu">
            <nav>
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Usuarios</a>
                        <ul>
                            <li><a href="listar_usuarios.php">Listar</a></li>
                            <li><a href="#">Nuevo</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Articulos</a>
                        <ul>
                            <li><a href="lista_articulos.php">Listar</a></li>
                            <li><a href="#">Nuevo</a></li>
                        </ul>
                    </li>
                    <li><a href="back/logout_back.php">Cerrar sesion</a></li>
                </ul>
            </nav>
        </div>
        <div class="contenedor">
            <h1>Lista de Usuarios</h1>
            <div class="dvtabla" id="dvtabla">
                
            </div>
        </div>
    </body>
</html>