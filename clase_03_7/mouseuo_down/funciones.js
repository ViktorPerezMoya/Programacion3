var x;
//toma todo el documento y es representado con x
x=$(document);
//cuando el documento esta cargado se ejecuta inicializarEventos 
x.ready(inicializarEventos);

function inicializarEventos()
{
  var x;
  //ahora x representa a todas las celsas
  x=$("td");
  //cuando se presione el click del mouse  en la 
  //selda se ejecutara presionaMouse
  x.mousedown(presionaMouse);
  //cuando se presione el click del mouse  en la 
  //selda se ejecutara sueltaMouse
  x.mouseup(sueltaMouse);
}


function presionaMouse()
{
  //se cabia el fondo de la celda
  $(this).css({
      "background-color":"#ff0",
      "color":"red",
      "width":"300px"
  });
}

function sueltaMouse()
{
  //se cabia el fondo de la celda
  $(this).css({
      "background-color":"#fff",
      "color":"black",
      "width":"auto"
  });
}
