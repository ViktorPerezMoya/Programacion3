$(document).ready(function(){
    $("#mensajes").hide();
    $("#form_login").submit(function(e){
        e.preventDefault();
        var user = $("#username").val();
        var pass = $("#pass").val();
        
        var request = $.ajax({
            url: "http://localhost/ejemplo/clase28_8/back/login_back.php",
            method: "post",
            data: {
                username:user,
                pass: pass
            },
            type: "html"
        });
        
        request.done(function(msg){
            console.log(msg);
            if(msg == 'OK'){
                window.location.href = 'http://localhost/ejemplo/clase28_8/index.php';
            }else{
                $("#mensajes").html("<p>Usuario o contraseña incorrectos.</p>");
                $("#mensajes").show();
            }
            
        });
    });
});