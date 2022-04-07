<?php

if(isset($_POST['email']) && !empty($_POST['email'])){

$nome = $_POST['nome'];
$CPF_CNPJ = $_POST['CPF/CNPJ'];
$email =$_POST['email'];
$telefone = $_POST['telefone'];
$mensagem = $_POST['message'];
$voltar = "./index.html";

$to = "oseias_deluca@outlook.com";
$subject = "Contato - ZionSign";
$body = "<strong>Nome:</strong>".$nome."<br>".
        "<strong>CPF/CNPJ:</strong>".$CPF_CNPJ."<br>".
        "<strong>Email:</strong>".$email."<br>".
        "<strong>Telefone:</strong>".$telefone."<br>".
        "<strong>Mensagem:</strong>".$mensagem;

        
$header =   "Content-Type:text/html; charset=UTF-8"."\n".
            "From: SITE - ZION SIGN"."\n".
            "Reply-to:".$email."\n".
            "x=Mailer:PHP/".phpversion();

if (mail($to, $subject, $body, $header)){

}else{
    echo("E-mail não enviado!");
};

};
?>

<script>alert('Orçamento enviado com sucesso! Em breve responderemos sua mensagem.');</script>
<meta http-equiv="refresh" content="0; url=index.html">