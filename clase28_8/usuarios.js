$(document).ready(function(){
    var request = $.ajax({
        url: "http://localhost/ejemplo/clase28_8/back/listar_usuarios_back.php",// link al que conectaremos
        method: "get",
        type: "html"
    });
    
    request.done(function(msg){
        $("#dvtabla").html(msg);
    });
    request.fail(function( jqXHR, textStatus ) {
        alert( "Error: " + textStatus );
    });
});