<?php
include '../util/Email.php';
include '../library/phpmailer/PHPMailer.php';

$util_mail = new Email();
$array_mails = [
    [
        'name' => "Victor Perez Moya",
        'mail' => "victor.ariel.perez@gmail.com"
    ],
    [
        'name' => "Ariel Moya",
        'mail' => "victor@perezmoya.com.ar"
    ]
];

$asunto = "Bienvenida";
$mensaje = '<h1>Bienvenido</h1>'
        . '<p>Este es un mensaje de prueba</p>';
$path_file = "../files/archivo.txt";
$util_mail->enviarMails($array_mails, $asunto, $mensaje, $path_file);
echo '<h1>Mensajes enviados</h1>'
. '<p><a href="http://localhost/ejemplo/clase02_10/vista/home.php"> Volver</a></p>';