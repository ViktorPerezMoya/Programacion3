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
            <h1>Lista de Articulos</h1>
            <div class="dvtabla">
<?php
        $conn = mysqli_connect('localhost', 'root', '', 'bdnet', '3306');
        if (!$conn) {
            die('Could not connect to MySQL: ' . mysqli_connect_error());
        }
        mysqli_query($conn, 'SET NAMES \'utf8\'');
        //inicio de consulta

        echo '<table>';
        echo '<thead>';
        echo '<tr>';
        echo '<th>id</th>';
        echo '<th>precio</th>';
        echo '<th>descripcion</th>';
        echo '<th>acciones</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
        $result = mysqli_query($conn, 'SELECT id, precio, descripcion FROM articulo');
        while (($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) != NULL) {
            echo '<tr>';
            echo '<td>' . $row['id'] . '</td>';
            echo '<td>' . $row['precio'] . '</td>';
            echo '<td>' . $row['descripcion'] . '</td>';
            echo '<td> <a href="#">Editar</a> <a href="#">Borrar</a></td>';
            echo '</tr>';
        }
        mysqli_free_result($result);
        echo '</tbody>';
        echo '</table>';

        //fin de consulta
        mysqli_close($conn);
?>
        </div>
        </div>
    </body>
</html>