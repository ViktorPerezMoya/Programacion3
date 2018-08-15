<!DOCTYPE html>
<html>
    <head>
        <title>Imagenes en css</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            .imagen{
                position: relative;
                width: auto;
                height: 200px;
                left: 0px;
                z-index: 2;
            }
            .imagen:hover{
                z-index: 3;
            }
            .imagen2{
                margin-top: -100px;
                position: relative;
                top: 0;
                height: 200px;
                width: auto;
                left: 15px;
                z-index: 2;
            }
            .imagen2:hover{
                z-index: 4;
            }
            .contenedor{
                background-image: url(img/cielo.png);
                background-size: 200px auto;
                /*background-color: black;*/
                margin-top: 100px;
                margin-left: 10%;
                width: 300px;
            }
        </style>
    </head>
    <body>
        <div class="contenedor">
            <img src="img/mario.png" class="imagen">
            <img src="img/luigi.png" class="imagen2">
        </div>
    </body>
</html>


