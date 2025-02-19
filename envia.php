<?php

    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $telefone = addslashes($_POST['telefone']);
    $mensagem = addslashes($_POST['mensagem']);

    $recebedor = "gabriellrezende@gmail.com";
    $assunto = "Coleta de dados - Contato";

    $corpo = "Nome: ".$nome."email: ".$email."telefone: ".$telefone."mensagem: ".$mensagem;

    $cabeca = "From: gabriellrezende@gmail.com"."Replay-to".$email."X=Mailer:PHP/".phpversion();

    if(mail($recebedor, $assunto, $corpo, $cabeca)){
        echo("E-mail enviado com sucesso");
    }else{
        echo("Houve um erro ao enviar o E-mail!");
    }
    
?>