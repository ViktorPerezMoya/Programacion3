/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function(){
    Notification.requestPermission();//pido permiso para las notificaciones
    
    var is_nuevo = true;
    var articulo_actual = null;//para cuando tenga que editar
    $("#new_articulo").click(function (){
        $("#title_modal").text("Nuevo Articulo");
        is_nuevo = true;
    });
    
    $("#btn_guardar_art").click(function (){
        var articulo = new Object();
        
        if(is_nuevo){
            articulo.descripcion = $("#txtdescripcion").val();
            articulo.precio = $("#txtprecio").val();
            
            guardarArticulo(articulo);
        }else {
            articulo_actual.descripcion = $("#txtdescripcion").val();
            articulo_actual.precio = $("#txtprecio").val();
            
            editarArticulo(articulo_actual);
            console.log(articulo_actual);
        }
    });
    
    $(".btn_delete").click(function(){
        var fila = $(this).parents('tr');
        var id = fila.find("td[id=id_art]").text();
        borrarArticulo(id);
    });
    
    $(".btn_edit").click(function(){
        is_nuevo = false;
        
        var fila = $(this).parents('tr');
        articulo_actual = new Object();
        articulo_actual.id = fila.find("th[id=id_art]").text();
        articulo_actual.descripcion = fila.find("td[id=desc]").text();
        articulo_actual.precio = $.trim(fila.find("td[id=prec]").text().split("$")[1]);
        
        $("#txtdescripcion").val(articulo_actual.descripcion);
        $("#txtprecio").val(articulo_actual.precio);
        
        $("#articuloModal").modal("show");
        
    });
});

function borrarArticulo(id){
    var request = $.ajax({
        url: "../controlador/articulos_back.php",
        method: "POST",
        data: {id: id, accion: "eliminar"},
        dataType: "html"
    });
    
    request.done(function(msg){
        console.log(msg);
        if(msg == "OK"){
             notificar("Éxito!",{icon: "../template/img/bien.jpg", body:"El articulo se ha eliminado"});
             $('#articuloModal').modal('hide');
             cargarTabla();
         }else{
             notificar("Error!",{icon: "../template/img/mal.jpg", body:"Ocurrio un fallo: "+msg});
         }
    });
    request.fail(function( jqXHR, textStatus ) {
      alert( "Request failed: " + textStatus );
    });
}

function guardarArticulo(articulo){
    
      var request = $.ajax({
        url: "../controlador/articulos_back.php",
        method: "POST",
        data: { descripcion : articulo.descripcion, precio: articulo.precio, accion: "crear" },
        dataType: "html",
      });

      request.done(function( msg ) {
         console.log(msg);
         if(msg == "OK"){
             notificar("Éxito!",{icon: "../template/img/bien.jpg", body:"El articulo se guardo correctamente"});
             //alert("GUARDADO!");
             $('#articuloModal').modal('hide');
             $("#txtdescripcion").val("");
             $("#txtprecio").val("");
             cargarTabla();
         }else{
             notificar("Error!",{icon: "../template/img/mal.jpg", body:"Ocurrio un fallo"});
             alert("ERROR!");
         }
      });

      request.fail(function( jqXHR, textStatus ) {
        alert( "Request failed: " + textStatus );
      });
      
}


function editarArticulo(articulo){
    
      var request = $.ajax({
        url: "../controlador/articulos_back.php",
        method: "POST",
        data: { descripcion : articulo.descripcion, precio: articulo.precio, id: articulo.id, accion: "editar" },
        dataType: "html",
      });

      request.done(function( msg ) {
         console.log(msg);
         if(msg == "OK"){
             notificar("Éxito!",{icon: "../template/img/bien.jpg", body:"Cambios guardados correctamente"});
             //alert("GUARDADO!");
             $('#articuloModal').modal('hide');
             $("#txtdescripcion").val("");
             $("#txtprecio").val("");
             cargarTabla();
             articulo=null;
         }else{
             notificar("Error!",{icon: "../template/img/mal.jpg", body:"Ocurrio un fallo"});
             alert("ERROR!");
         }
      });

      request.fail(function( jqXHR, textStatus ) {
        alert( "Request failed: " + textStatus );
      });
      
}



function cargarTabla(){
    var request = $.ajax({
        url: "../controlador/articulos_back.php",
        method: "POST",
        data: {accion: "consultar" },
        dataType: "html"
      });

      request.done(function( msg ) {
         $("#tbl_body").html(msg);
      });

      request.fail(function( jqXHR, textStatus ) {
        alert( "Request failed: " + textStatus );
      });
}

    function notificar(titulo, opciones){
        if(Notification) {

                if (Notification.permission == "granted"){

                    var n = new Notification(titulo, opciones);
                    setTimeout( function() { n.close() }, 5000);

                }

                else if(Notification.permission == "default") {
                    alert("Primero da los permisos de notificación");
                }

                else {
                    alert("Bloqueaste los permisos de notificación");
                }
            }else {
                alert("Tu navegador no es compatible con API Notification");
            }
    }