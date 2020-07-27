<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

use Source\Support\Email;

class SendEmail extends model {
    public function enviar(){

        try{
            $phpMailer = new PHPMailer(); 

            $phpMailer->isSMTP();
            $phpMailer->CharSet = 'utf-8';
            $phpMailer->SMTPAuth = 'true';
            $phpMailer->SMTPSecure = 'ssl';
    
            $phpMailer->Host = SMTP_MAIL['host'];
            $phpMailer->Port = SMTP_MAIL['port'];
            $phpMailer->Username = SMTP_MAIL['user'];
            $phpMailer->Password = SMTP_MAIL['passwd'];
    
            $phpMailer->From = SMTP_MAIL['from_email'];
            $phpMailer->FromName = SMTP_MAIL['from_name'];
    
            $phpMailer->Subject = "Contrato Grupo Coser";
            $phpMailer->Body = "<h1>Testando envio de Email</h1>";
            $phpMailer->AltBody = "Testando envio";
    
            $phpMailer->AddAddress = "nekomataads@gmail.com";
    
            $phpMailer->Send();
            
        }catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";exit;
        }
    }
}