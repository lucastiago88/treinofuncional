<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['phone']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo json_encode(array('status'=>false,'message'=>"No arguments Provided!"));
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
	
// Create the email and send the message
$to = 'contato@carlinhostreinofuncional.com.br'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Formulário de Contato do Website:  $name";
$email_body = "Você recebeu uma nova mensagem do formulário de contato do seu site.\n\n"."Aqui estão os detalhes:\n\nNome: $name\n\nEmail: $email_address\n\nTelefone: $phone\n\nMensagem:\n$message";
$headers = "From: noreply@carlinhostreinofuncional.com.br\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";	
if(!mail($to,$email_subject,$email_body,$headers, "-rnoreply@carlinhostreinofuncional.com.br")){
   $headers .= "Return-Path: " . $emailsender . "\n"; // Se "não for Postfix"
   mail($to,$email_subject,$email_body,$headers);
   echo json_encode(array('status'=>true,'message'=>"E-mail Enviado!"));
}else{
   echo json_encode(array('status'=>true,'message'=>"E-mail Enviado!"));   
}	
?>