<?php
if ($_SERVER['QUERY_STRING'] === '') {
if (isset($_POST['nome'],$_POST['endereco'], $_POST['email'], $_POST['fone'],$_POST['cidade'],$_POST['estado'],$_POST['assunto'], $_POST['mensagem'])) 
{
$js = ' window.onload = alert("Mensagem não enviada.");
window.location = "fcontato.php";';
}  else {
if (!empty($_POST['email'])) {
$js = ' window.onload = alert("Mensagem não enviada.\n Formulário adulterado!!");
window.location = "fcontato.php";';
}
else {
include ('./class/MAIL.class.php');
$js = 'window.onload = alert("Sua mensagem foi enviada com sucesso!\n Muito obrigado, em breve entraremos em fcontato");
 window.location = "fcontato.php";';
}
}
}
 else {
$js = ' 
window.onload = alert("Mensagem não enviada.\n O Formulário não foi preenchido por completo!!");
window.location = "fcontato.php";
';
}
?>
<html>
<head>
<title>Obrigado Pela Preferência</title>
</head>
<body>
<script>
<?php echo $js;?>
</script>
</body>
</html>