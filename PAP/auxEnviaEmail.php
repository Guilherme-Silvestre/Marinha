<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("./PHPMailer/PHPMailer.php");
include("./PHPMailer/SMTP.php");
include("./PHPMailer/Exception.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function enviaEmail($email, $assunto, $mensagem)
{



	$mail = new PHPMailer(True);
	$mail->IsSMTP();
	$mail->CharSet = 'UTF-8';
	$mail->Host = "smtp.gmail.com"; // Servidor SMTP
	$mail->SMTPSecure = "tls"; // conexão segura com TLS
	$mail->Port = 587;
	$mail->SMTPAuth = true; // Caso o servidor SMTP precise de autenticação
	$mail->Username = "fragagay@gmail.com"; // SMTP username
	$mail->Password = "macaco2002"; // SMTP password
	$mail->From = "Marinha@gmail.com"; // From
	$mail->FromName = "Marinha"; // Nome de quem envia o email
	$mail->AddAddress($email); // Email e nome de quem receberá //Responder
	$mail->WordWrap = 50; // Definir quebra de linha
	$mail->IsHTML = true; // Enviar como HTML
	$mail->Subject = $assunto; // Assunto
	$mail->Body = '<br/>' . $mensagem . '<br/>'; //Corpo da mensagem caso seja HTML
	$mail->AltBody = "$mensagem"; //PlainText, para caso quem receber o email não aceite o corpo HTML



	if (!$mail->Send()) // Envia o email
	{
		echo "Erro no envio da mensagem";
	}
}
