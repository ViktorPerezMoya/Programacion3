$(document).ready(function(){
    $("form").submit(function(evt){
        evt.preventDefault();
    });
    
    $("#parametro").focus(function(){
        $(this).attr("value","");
    });
    
    $("#parametro").blur(function (){
        $(this).attr("value","Buscar palabra...");
    });
    
    $("#buscar").mousedown(function(){
        //$(this).
    });
    
    
    $("#buscar").click(function(){
        var array = $("p").toArray();
        var palabra = $("#parametro").val();
        var html = "";
        
        for(var i = 0; i < array.length; i++){
            var stemp = array[i].innerHTML;
            stemp = stemp.replace('<span class="encontrado">',"");
            stemp = stemp.replace("</span>","");
            console.log(stemp);
            html += "<p>"+stemp.replace(palabra,"<span class='encontrado'>"+palabra+"</span>")+"</p>";
        }
        
        $("#parrafos").html(html);
    });
    
});