<?php
date_default_timezone_set("America/Sao_Paulo");
header('Content-Type: text/html; charset=utf-8');
require("phpmailer/class.phpmailer.php"); // ADICIONA O SCRIPT DE ENVIO DE E-MAILS
$nome=$_POST['nome'];
$email=$_POST['email'];
$address=$email;
$fone=$_POST['fone'];
$cidade=$_POST['cidade'];
$estado=$_POST['estado'];
$endereco=$_POST['endereco'];
$assunto= $_POST['assunto'];
$mensagem=$_POST['mensagem'];
$server = $_SERVER['SERVER_NAME'];
$mail = new PHPMailer(); // INICIA A CLASSE PHPMAILER
$mail->IsSMTP(); //ESSA OPÇÃO HABILITA O ENVIO DE SMTP
$mail->Host = "smtp.gmail.com"; //SERVIDOR DE SMTP, USE smtp.SeuDominio.com OU smtp.hostsys.com.br
$mail->SMTPAuth = true; //ATIVA O SMTP AUTENTICADO
$mail->Username = "formulariocontato01@gmail.com"; //EMAIL PARA SMTP AUTENTICADO (pode ser qualquer conta de email do seu domínio)
$mail->Password = "ContatoSite2019"; //SENHA DO EMAIL PARA SMTP AUTENTICADO
$mail->SetFrom($address); //E-MAIL DO REMETENTE
$mail->FromName = utf8_decode($nome); //NOME DO REMETENTE
$mail->AddAddress("teste@hotmail.com","Teste"); //E-MAIL DO DESINAT�?RIO, NOME DO DESINAT�?RIO --> AS VARI�?VEIS ALI PODEM FAZER REFERÊNCIA A DADOS VINDO DE $_GET OU $_POST, OU AINDA DO BANCO DE DADOS
$mail->WordWrap = 50 ; // ATIVAR QUEBRA DE LINHA
$mail->IsHTML(true); //ATIVA MENSAGEM NO FORMATO HTML
$mail->Subject = utf8_decode("$assunto"); //Assunto DA MENSAGEM
//INCLUIR TEMPLATE
$msg .="
Mensagem sobre: $assunto:<br/>
$server   \n <br/> \n
Mensagem enviada em ".date("d/m/Y")." - ".date ("H:i:s").", os dados seguem abaixo: <br/> \n
<b> Nome:</b> $nome <br/> \n
<b> Endereço:</b> $endereco <br/> \n
<b> Fone:</b> $fone <br/> \n
<b> Email do Cliente:</b> <a href='mailto:$email' target='_blank'>$email</a><br/> \n
<b> Cidade:</b> $cidade - <b>Estado:</b> $estado <br/> \n
<b>Mensagem</b>: $mensagem <br/> \n
";
$mail->Body = "".utf8_decode($msg).""; //MENSAGEM NO FORMATO HTML, PODE SER TEXTO OU IMAGEM
$mail->SetLanguage("Pt", "libs/"); // ajusto a lingua a ser utilizadda
$mail->SMTP_PORT = "587"; // ajusto a porta de smt a ser utilizada. Neste caso, a 587 que o GMail utiliza
$mail->SMTPSecure = "tls"; // ajusto o tipo de comunicação a ser utilizada, no caso, a TLS do GMail
$mail->Send() ;