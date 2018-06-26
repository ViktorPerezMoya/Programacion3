<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Victor pED</title>
    </head>
    <body>
        <?php
//        $date = null;
//        $date = date_create('2018-01-01');
//        $date = date_format($date, 'Y-m-d H:i:s');
        $var ="DAFSD";
        switch ($var){
            
            case "auto":
                echo 'esto es un auto';
                break;
            case "camion":
                echo 'esto es un camion';
                break;
            case "camioneta":
                echo 'esto es un camioneta';
                break;
            default :
                echo 'USAS TUS PIES';
                break;
        }
        ?>
    </body>
</html>
