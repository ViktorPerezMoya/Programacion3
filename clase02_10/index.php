<!DOCTYPE html>
<html>
    <head>
        <title>Inicio</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="template/css/bootstrap.css">
        
        <script src="template/js/jquery.js"></script>
        <script src="template/js/popper.js"></script>
        <script src="template/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="jumbotron"><h1>Inicio de Sesión</h1></div>
                <form action="controlador/login_back.php" method="post">
                    <div class="form-group">
                        <label for="user">Nombre de usuario: </label>
                        <input type="text" name="user" id="user" class="form-control" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <label for="pass">Ingrese clave: </label>
                        <input type="password" name="pass" id="pass" class="form-control" placeholder="Password">
                    </div>
                    
                    <input type="submit" value="Iniciar Sesión" class="btn btn-info">
                </form>
            </div>
        </div>
    </body>
</html>