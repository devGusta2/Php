
<!-- 
Programador Gustavo Rodrigues 
Data:02/11/2023
Teste de envio de E-mails via PHP
-->
<?php

require_once('src/PHPMailer.php');
require_once('src/SMTP.php');
require_once('src/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail= new PHPMailer(true);

try{
    $mail->SMPTDebug= SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host='smpt.gmail.com';
    $mail->SMTPAuth=true;
    $mail->Username='senderEmail@gmail.com';
    $mail->Password='123';
    $mail->Port=587;

    $mail->setFrom('senderEmail@gmail.com');
    $mail->addAddress('email@gmail.com');

    $mail->isHTML(true);
    $mail->Subject='Teste de Email via gmail';

    $mail->Body='Chegou o email teste De: <b>Loren Impsun Dolor</b>';
    $mail->AltBody='chegou um email!';   

    if($mail->send()){
        echo "email enviado com sucesso!";
    }else{
        echo "Email não enviado!";
    }
}catch(Exception $e){
    echo"Erro ao enviar a mensagem:{$mail->ErrorInfo}";
}

?>
