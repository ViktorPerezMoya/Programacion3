<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <style>
            .stilodiv{
                color: #6666ff;
                background-color: grey;
            }
        </style>
    </head>
    <body>
        <button id="boton">Ejecutar accion</button>
        <div id="mydiv" style="background-color: #6666ff;padding: 10px;">
            <input type="text" id="txt"/>
        </div>
        
        <button class="btn_alt" >Poner Alt</button>
        <img src="images.jpg" id="image" />
        <br>
        <button id="btn_window" >Tamaño de pantalla</button>
        <div id="lienzo"></div>
        <script type="text/javascript">
            //var elemento = docuement.getElementById("mydiv");
            $(document).ready(function (){
                //var elemento = $("#txt");
                //$("#txt").val("My texto");
                //$("#mydiv").text("<p>Texto Texto</p>");
                $("#mydiv").html("<p id='parrafo'>Texto Texto</p>");
                $("#parrafo").css({"color":"white","background-color":"tomato"})
                //$("#parrafo").addClass("stilodiv");
                let ocultar = true;
                $("#boton").click(function(){
                    if(ocultar){
                        //$("#mydiv").fadeOut(2000);//"slow, fast
                        //$("#mydiv").hide(1000);
                        $("#mydiv").slideUp(1000);
                        ocultar =  false;
                    }else{
                        //$("#mydiv").fadeIn(2000);
                        //$("#mydiv").show(1000);
                        $("#mydiv").slideDown(1000);
                        ocultar =  true;
                    }
                    console.log(ocultar);
//                    $("#mydiv").animate({
//                       padding: "100px",
//                       backgroundColor:'#aa0000',
//                       color: "#fff"
//                    },5000,function(){
//                        
//                    });
                });
                
                $(".btn_alt").click(function (){
                  $("#image").attr("title","Esta es una imagen");  
                });
                
                $("#btn_window").click(function(){
                    let alto = $(document).height();
                    let ancho = $(document).width();
                    //alert("Tu ventana es de "+ancho+" x "+alto);
//                    $("#lienzo").height(alto);
//                    $("#lienzo").width(ancho);
                    $("#lienzo").css({"backgroundColor":"tomato"});
                    console.log("evento");
                    $("#lienzo").animate({
                        "height": alto,
                        "width": ancho,
                    },5000, function(){
                        
                    });
                });
                
            });
        </script>
    </body>
</html>