<!DOCTYPE html>
<html>
    <head>
        <title>Formulario</title>
        <meta charset="UTF-8"/>
        <style>
            #nombre{
                font-family: cursive;
            }
            .boton{
                background-color: #6666ff;
                padding: 10px;
                border-radius: 5px;
                color: white;
            }
            label{
                font-family: cursive;
            }
        </style>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    </head>
    <body>
        <!--
        <form action="formulario_back.php" method="post" style="background-color: #ccccff; padding: 50px;margin: 10px;">
            <label for="name">Nombre: </label>
            <input type="text" name="name" id="nombre" placeholder="Ingrese su nombre.."/>
                
            <input type="submit" class="boton" value="Enviar"/>
        </form>
        -->

        <div style="background-color: #ccccff; padding: 50px;margin: 10px;">
            <label for="name">Nombre: </label>
            <input type="text" name="name" id="nombre" placeholder="Ingrese su nombre.."/>

            <input type="button" id="btn_enviar" class="boton" value="Enviar"/>
        </div>
        <script>
            $(document).ready(function () {//si el documento estalisto ejecutara esta funcion
                $("#btn_enviar").click(function () {
                    var nombre = $("#nombre").val();
                    
                    var request = $.ajax({//enviar datos a la pagina formulario_back.php
                        method: "POST",
                        url: "formulario_back.php",
                        data: {
                            name: nombre,
                        },
                        dataType: "html"
                    });
                    
                    request.done(function (result){
                        alert(result);
                        console.log("RESPUESTA: "+result);
                    });

                });
            });
        </script>
    </body>
</html>