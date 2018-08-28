<?php
//inicia o reanuda una sesion
session_start();
//borramos la sesion
session_destroy();
//redirigimos al index y si esta borrada se redirigira al login
header("Location: http://localhost/ejemplo/clase28_8/index.php");
