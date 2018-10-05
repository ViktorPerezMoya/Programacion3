<?php
require '../library/phpmailer/SMTP.php';
require '../library/phpmailer/POP3.php';
require '../library/phpmailer/Exception.php';
require '../library/phpmailer/OAuth.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Email
 *
 * @author ViktorPerez
 */
class Email {
    
    function __construct() {
        
    }
    
    public function enviarMails($mails = array(),$asunto, $mensaje, $path_file = null){
        if(sizeof($mails) > 0){
            foreach ($mails as $mail_to){
                $this->enviar($mail_to, $asunto,$mensaje,$path_file);
            }
        }
    }
    
    private function enviar($email_to = null, $asunto, $mensaje, $path_file = null ) {
        if (sizeof($email_to) > 0) {
//creamos una instancía de la clase phpmailer
            try{
            $mail = new \PHPMailer\PHPMailer\PHPMailer();

            $mail->IsHTML(true); // si es html o txt
            $mail->CharSet = 'UTF-8';
            $mail->IsSMTP();
            $mail->Port = 587;
            $mail->Host = "mail.perezmoya.com.ar"; //smpt de nuestro correo
            $mail->SMTPAuth = true; //por si necesita auentificación
            $mail->Username = "admin@perezmoya.com.ar";
            $mail->Password = "perezmoya2018";
            $mail->From = "admin@perezmoya.com.ar";
            $mail->FromName = $email_to['name'];
            $mail->Subject = $asunto;
            $mail->AddAddress($email_to['mail']); //el email al que vá

            $mail->Body = $mensaje; //cogemos el cuerpo completo

            if(!empty($path_file)){
                $mail->AddAttachment($path_file); //si queremos envíar archivos
            }
            //envíamos el email al usuario
            $mail->Send();
            } catch (PHPMailer\PHPMailer\Exception $e){
                $e->getTrace();
            }
        }
    }

}
