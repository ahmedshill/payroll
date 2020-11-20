<?php
/*if (isset($_POST['send_email']))
{*/

    $mail_to = $_POST['mail_to'];
    $mail_sub = $_POST['mail_sub'];
    $mail_msg = $_POST['mail_msg'];
    require 'PHPMailer-master/PHPMailerAutoload.php';
    $mail = new PHPMailer();
    $mail ->IsSmtp();
    $mail ->SMTPDebug = 0;
    $mail ->SMTPAuth = true;
    $mail ->SMTPSecure = 'ssl';
    $mail ->Host = "smtp.gmail.com";
    $mail ->Port = 465; // or 587
    $mail ->IsHTML(true);
    $mail ->Username = "yourmail@gmail.com";
    $mail ->Password = "yourpassword";
    $mail ->SetFrom("yourmail@gmail.com");
    $mail ->Subject = $mail_sub;
    $mail ->Body = $mail_msg;
    $mail ->AddAddress($mail_to);

    if(!$mail->Send())
    {
        echo "Mail Not Sent";
    }
    else
    {
        echo "Mail Sent";
    }









