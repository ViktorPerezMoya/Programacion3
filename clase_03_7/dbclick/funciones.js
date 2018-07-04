var x;
x=$(document);
x.ready(inicializarEventos);

function inicializarEventos()
{
  var x;
  x=$("#recuadro");
  //dblclick es el evento que que se dispara al hacer un doble
  //click sobre algun elemento en este caso el div recuadro
  x.dblclick(dobleClic);
  x = $("#dvmostrar");
  x.dblclick(mostrarDiv);
}

function dobleClic()
{
  var x;
  x=$(this);
  x.hide();
  $("#dvmostrar").css({"width":"100%","height":"100%"});
  console.log("oculto");
}

function mostrarDiv(){
  var x;
  x=$("#recuadro");
  x.show();
  console.log("mostrado");
}
