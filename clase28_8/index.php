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
    </head>
    <body>
        <div class="welcome">
            <h1>Bienvenido <?= $_SESSION['nombre_user'] ?></h1>
        </div>
        <a href="back/logout_back.php">Cerrar sesion</a>
    </body>
</html>