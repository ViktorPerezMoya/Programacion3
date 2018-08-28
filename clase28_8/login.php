<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <meta charset="utf-8">
    </head>
    <body>
        <div class="login">
            <form method="post" action="back/login_back.php">
                <fieldset>
                    <legend>Inicio de sesion</legend>
                    <div class="bloque_input">
                        <p>Usuario: </p>
                        <input type="text" maxlength="10" name="username" placeholder="Ingrese nombre de usuario...">
                    </div>
                    <div class="bloque_input">
                        <p>Clave: </p>
                        <input type="password" maxlength="10" name="pass" placeholder="Ingrese clave de usuario...">
                    </div>
                    <input type="submit" value="Ingresar">
                </fieldset>
            </form>
        </div>
    </body>
</html>