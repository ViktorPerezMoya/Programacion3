<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="estilos.css"/>
        <script type="text/javascript" src="jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="funciones.js"/></script>
    </head>
    <body>
        <div class="login">
            <div></div>
            <form method="post" action="" id="form_login">
                <div id="mensajes"></div>
                <fieldset>
                    <legend>Inicio de sesion</legend>
                    <div class="bloque_input">
                        <p>Usuario: </p>
                        <input type="text" maxlength="10" id="username" name="username" placeholder="Ingrese nombre de usuario...">
                    </div>
                    <div class="bloque_input">
                        <p>Clave: </p>
                        <input type="password" maxlength="10" id="pass" name="pass" placeholder="Ingrese clave de usuario...">
                    </div>
                    <input class="submit" id="btn_login" type="submit" value="Ingresar">
                </fieldset>
            </form>
        </div>
    </body>
</html>
