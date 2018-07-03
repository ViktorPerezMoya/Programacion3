var x;
var y;
$(document).ready(function(){
    $("body").css("margin","0");
    $("#azul").css({
        "background-color": "blue",
        "width":"200px",
        "height":"200px",
        "marginTop":"100px",
        "marginLeft":"100px",
        "float":"left"
    });
    
    
    $("#rojo").css({
        "background-color": "red",
        "float":"right",
        "width":"200px",
        "height":"400px",
        "marginTop":"100px",
        "marginRight":"200px",
    });
        
            
    $("#azul").mousemove(function(event){
        x = event.clientX;
        y = event.clientY;
        $("p").text("div AZUL: X="+event.clientX+ " y="+event.clientY);
        $("p").css({"color":"blue"});
    });

    $("#rojo").mousemove(function(event){
        x = event.clientX;
        y = event.clientY;
        $("p").text("div ROJO: X="+event.clientX+ " y="+event.clientY);
        $("p").css({"color":"red"});
    });

    $("#azul").mouseout(function (){
        $("p").text("DAFSD").css("color","white");
    });
    $("#azul").click(function(){
        alert("AZUL: X="+x+" Y="+y);
    });

    $("#rojo").mouseout(function (){
        $("p").text("FASDF").css("color","white");
    });
    $("#rojo").click(function(){
        alert("ROJO: X="+x+" Y="+y);
    });
    
    
});


