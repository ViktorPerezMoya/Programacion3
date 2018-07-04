<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Clase 03 - 07</title>
        <link rel="StyleSheet" href="estilos.css" type="text/css">
        <script src="jquery.js"></script>
        <script src="scripts.js"></script>
    </head>
    <body>
        <h1>Clase 03/07/2018 <small>css y jquery</small></h1>
        <div class="padre">
            <div>
                <!--
                Consignas:
                Realizar un buscador de palabras, donde al ingresar una palbra en el text usando los metods focus, blur, dbclick, mousedown, mouseup y los metodos vistos anteriormente
                1 - Al hacer click en buscar me marque con background amarillo las palabras buscadas. 
                2 - Que al poner el foco sobre el cuadro de busqueda que cambie el color de fondo de la pagina web
                3 - Al hacer doble click sobre la palabra que el fondo cambie a im tercer color
                4 - Al clicar el boton de busqueda que cambie el color de boton y al soltar el boton retorne al color normal
                
                -->
                <form>
                    <input type="text" id="parametro" value="buscar palabra"/>
                    <input type="submit" class="buscar" id="buscar" value="Buscar">
                </form>
                <div id="parrafos">
                    <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer imperdiet diam a tortor varius pretium. Donec sed tellus nec erat laoreet porta. Phasellus pulvinar lacinia libero, eget tempus quam molestie sed. Donec nec nibh vitae nibh dapibus porta. Donec in laoreet massa. Ut risus ex, consequat a elit convallis, lacinia commodo libero. Vestibulum laoreet, lacus a lacinia blandit, nisl sapien rhoncus erat, vel ultricies sem nibh sit amet elit. Maecenas luctus eleifend quam, sit amet porttitor mauris facilisis a. Donec tincidunt, justo non iaculis varius, ligula velit lobortis ex, non ullamcorper urna ipsum nec mi. Vestibulum lacinia eros et nisl semper elementum. Morbi consectetur venenatis molestie. Donec vulputate, augue ut sagittis porta, augue libero fringilla est, sit amet sollicitudin lectus mi non ligula. Mauris pretium egestas tristique. Cras fringilla tortor vitae urna laoreet euismod. Donec dui eros, finibus at nunc eget, fringilla maximus turpis. Suspendisse efficitur, tortor in tincidunt sollicitudin, ante lectus dapibus libero, ac rhoncus leo purus at arcu.
                    </p>
                    <p>
                    Aenean lectus nulla, ullamcorper in mi sagittis, ultricies consectetur sapien. Ut quis ante tortor. Vivamus venenatis orci dolor, ullamcorper finibus felis tristique ut. Nam eros nulla, laoreet vel porta eu, suscipit eget erat. Aenean a libero nulla. Cras facilisis, mauris a ultricies venenatis, elit ex tincidunt quam, malesuada tincidunt lectus tortor quis mi. Nullam dui lorem, cursus eu elit sit amet, efficitur venenatis sapien. Quisque vitae aliquam ligula. Phasellus porta felis nec hendrerit mattis.
                    </p>
                    <p>
                    Aliquam erat volutpat. Nam ullamcorper sodales mi vel efficitur. Morbi sed purus a leo pharetra aliquet eu et mauris. Mauris dictum luctus dui a suscipit. Donec ultrices mi a orci elementum efficitur vitae id tellus. Mauris vestibulum auctor euismod. Donec consequat metus ut orci finibus posuere.
                    </p>
                    <p>
                    Duis odio eros, rutrum non sollicitudin nec, vestibulum at urna. Sed sed ex et augue rhoncus euismod. Proin pretium non enim eget sollicitudin. Aenean varius sagittis justo. Donec metus lectus, facilisis sit amet metus non, scelerisque porta ante. Pellentesque id aliquet purus. Mauris lacinia dui eu turpis consectetur, at pulvinar tortor suscipit. Integer augue lectus, egestas condimentum cursus lobortis, mattis id felis. Integer tempus auctor tincidunt.
                    </p>
                    <p>
                    Vivamus id eleifend erat. In vel volutpat ex, ac posuere ipsum. In eget ligula nulla. Aliquam at ipsum vestibulum, finibus risus in, maximus est. Suspendisse vehicula vulputate dolor in pretium. Etiam feugiat, ante ut accumsan venenatis, arcu sem elementum lacus, a congue enim quam ut dui. Sed in justo vitae neque iaculis sollicitudin. Mauris nec volutpat purus, at feugiat diam.
                    </p>
                </div>
            </div>
        </div>
    </body>
</html>