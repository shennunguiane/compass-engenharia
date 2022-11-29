<?php
$nome = $_POST['nome'];
$vistante_email = $_POST['email'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];

$email_from = 'compasseng@gmail.com';

$email_assunto = 'Nova submissão';

$email_body = "User Name: $nome.\n" .
    "User Email: $vistante_email.\n" .
    "Subject: $assunto.\n" .
    "User Message: $mensagem.\n";

$to = 'shennnyfrancisco@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= " Reply-To: $vistante_email\r\n";

mail($to, $email_assunto, $email_body, $headers);

header("Location: contacto.html");
?>