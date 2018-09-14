<?php

require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/SMTP.php';

class Mail
{
    protected $mail;

    public function __construct()
    {
        $this->mail = new PHPMailer\PHPMailer\PHPMailer(true);
    }

    public function sendEmail($email, $token)
    {
        $this->mail->isSMTP();
        $this->mail->Host = 'smtp.gmail.com';
        $this->mail->Port = 587;
        $this->mail->SMTPSecure = 'tls';  
        $this->mail->SMTPAuth = true; 
        $this->mail->Username = 'supermart.atma16@gmail.com';
        $this->mail->Password = 'supermartatmajaya16';
        
        $this->mail->setFrom('supermart.atma16@gmail.com','Super Mart Verification');
        $this->mail->addAddress($email);

        $this->mail->isHTML(true); 
        $this->mail->Subject = 'Validate your SuperMart Account';
        $this->mail->Body    = '
            Please Click on Link Below to activate your account:<br><br>
            <a href="http://localhost:81/SUPERMART-PAW/HighFidelity/konfirm.php?email=' . $email . '&kode=' . $token . '">
            Click Here to Activate your account</a>';
        if ($this->mail->send()) {
            return true;
        } else {
            return false;
        }
    }
}