<?php

// Passando os dados obtidos pelo formulário para as variáveis abaixo
$nomeremetente     = $_POST['nomeremetente'];
$emailremetente    = trim($_POST['emailremetente']);
$emaildestinatario = 'contato@studio97b.com.br'; // Digite seu e-mail aqui, lembrando que o e-mail deve estar em seu servidor web
$ddd      	   	   = $_POST['ddd'];
$telefone      	   = $_POST['telefone'];
$assunto          = $_POST['assunto'];
$outros          = $_POST['outros'];
$mensagem          = $_POST['mensagem'];
 
 
/* Montando a mensagem a ser enviada no corpo do e-mail. */
$mensagemHTML = '<P>FORMULARIO PREENCHIDO NO SITE WWW.STUDIO97B.COM.BR</P>
<p><b>Nome:</b> '.$nomeremetente.'
<p><b>E-Mail:</b> '.$emailremetente.'
<p><b>DDD:</b> '.$ddd.'
<p><b>Telefone:</b> '.$telefone.'
<p><b>Assunto:</b> '.$assunto.'
<p><b>Mensagem:</b> '.$mensagem.'</p>
<hr>';


// O remetente deve ser um e-mail do seu domínio conforme determina a RFC 822.
// O return-path deve ser ser o mesmo e-mail do remetente.
$headers = "MIME-Version: 1.1\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: $nomeremetente\r\n"; // remetente
$headers .= "Return-Path: contato@studio97b.com.br\r\n"; // return-path
$envio = mail("contato@studio97b.com.br", $assunto, $mensagemHTML, $headers); // Digite seu e-mail aqui, lembrando que o e-mail deve estar em seu servidor web
 
 if($envio)
echo "<script>location.href='sucesso.html'</script>"; // Página que será redirecionada

?>
