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
echo '<th>username</th>';
echo '<th>nombre</th>';
echo '<th>acciones</th>';
echo '</tr>';
echo '</thead>';
$result = mysqli_query($conn, 'SELECT id, username, nombre FROM usuario');
while (($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) != NULL) {
    echo '<tr>';
    echo '<td>' . $row['id'] . '</td>';
    echo '<td>' . $row['username'] . '</td>';
    echo '<td>' . $row['nombre'] . '</td>';
    echo '<td> <a href="#">Editar</a> <a href="#">Borrar</a></td>';
    echo '</tr>';
}
mysqli_free_result($result);
echo '</table>';
//fin de consulta
mysqli_close($conn);
