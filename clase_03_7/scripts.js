$(document).ready(function(){
    $("form").submit(function(evt){
        evt.preventDefault();
    });
    
    $("#buscar").click(function(){
        console.log("ejecuta logica");
    });
    
});