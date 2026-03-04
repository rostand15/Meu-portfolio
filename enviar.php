<?php

    $nome = addcslashes($_POST('nome'));
    $email = addcslashes($_POST('email'));
    $telefone = addcslashes($_POST('telefone'));

    $to = "rstdpinheiro1@gmail.com";
    $assunto = "Contato cliente";

    $corpo = "Nome: " .$nome. "\n"."E-mail: " .email. "\n". "Telefone: " .$telefone;

    $cabeca = "From rostandaraujo3@gmail.com"."\n"."Reply-to: " .$email. "\n"."X=Mailer:PHP/".phpversion();

    if(mail($to, $assunto, $corpo, $cabeca)){
        echo("E-mail enviado com sucesso!");
    }else{
        echo("Houve um erro ao enviar o email!");
    }


?>