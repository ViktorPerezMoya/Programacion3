var x;
x=$(document);
x.ready(inicializarEventos);

function inicializarEventos()
{
  var x=$("#text1");
  x.focus(tomaFoco);
  x.blur(pierdeFoco);
  x=$("#text2");
  //focus es el evento que se dispara cuando obtiene el foco del cursor
  x.focus(tomaFoco);
  //blur es el evento que se dispara cuando pierde el foco del cursor
  x.blur(pierdeFoco);
}

function tomaFoco()
{
  var x=$(this);
  x.css("color","#f00");
}

function pierdeFoco()
{
  var x=$(this);
  x.css("color","#00f");
}
