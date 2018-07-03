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
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>
    </head>
    <body>

        <div id="main" style="background-color: #ccccff; padding: 50px;margin: 10px;">
            <label for="name">Nombre: </label>
            <input type="text" id="nombre"  placeholder="Ingrese su nombre.." v-model="name"/>
            <h1>{{name}}</h1>

            <input type="button" id="btn_enviar" v-on:click="metodoSubmit()" class="boton" value="Enviar"/>
        </div>
        <script>
        new Vue({
            el: '#main',
            data: {
                name: 'Mi nombre',
            },
            methods:{
                metodoSubmit: function(){
                    //console.log("Tu nombre es: "+this.name);
                    axios.post("formulario_back.php",
                    {
                        'name': this.name
                    }).then( response => {
                        console.log("RESPUESTA: "+response.data);
                    });
                }
            }
        });
        </script>
        
        
    </body>
</html>