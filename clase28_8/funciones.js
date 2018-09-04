$(document).ready(function(){
    $("#mensajes").hide();//oculto el div de mensajes
    $("#form_login").submit(function(e){//evento submit del formulario
        e.preventDefault();//bloqueamos el evento por defecto al hacer clic en submit
        //tomamos el valor del usuario y password
        var user = $("#username").val();
        var pass = $("#pass").val();
        
        var request = $.ajax({
            url: "http://localhost/ejemplo/clase28_8/back/login_back.php",// link al que conectaremos
            method: "post",
            data: {//parametros a enviar por post
                username:user,
                pass: pass
            },
            type: "html"
        });
        
        request.done(function(msg){//en caso de conexion exitosa devuelve un mensaje
            console.log(msg);//mostramos por consola
            //Si el mensaje es ok redirecciona al index, sino muestra el cuadro de mensajes
            if(msg == 'OK'){
                window.location.href = 'http://localhost/ejemplo/clase28_8/index.php';
            }else{
                $("#mensajes").html("<p>Usuario o contraseña incorrectos.</p>");
                $("#mensajes").show();//muestra el div mensajes
            }
            
        });
    });
});