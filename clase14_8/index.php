<!DOCTYPE html>
<html>
    <!-- cabecera de la pagina -->
    <head>
        <title>Css</title>
        <style>
            /* comentario */
            .body{/*selector tipo clase*/
                background-color: tomato;
                width: 100px;
                height: 100px;
                float: right;
            }
            #body{ /* selector por id de elemento html */
                font-family: cursive;
                border-radius: 5px;
                background-color: #aad8ab;
                width: 100px;
                height: 100px;
                
            }
            
            body{ /* selector por tipo de elemento html */
                background-color: #e183ee;
            }
            
            @media(max-width: 500px){
                .body{
                    background-color: blue;
                }
            }
        </style>
    </head>
    <!-- cuerpo de la pagina -->
    <body>
        <div class="body">
            
        </div>
        <div id="body">
            <p>HOLA CSS</p>
        </div>
        <p class="body">Lorem impsum</p>
    </body>
</html>