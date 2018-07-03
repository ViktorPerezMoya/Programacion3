var x;
var aux;
x=$(document);
x.ready(inicializarEventos);

function inicializarEventos()
{
  var x;
  x=$("a");
  //x.mouseover(entraMouse);
  //x.mouseout(saleMouse);
  x.hover(entraMouse, saleMouse);
}


function entraMouse()
{
   aux = $(this).text();
   $(this).text("UN TEXTO");
  $(this).css("background-color","#ff0");
}

function saleMouse()
{
    $(this).text(aux);
  $(this).css("background-color","#fff");
}
