<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_SPECIAL_CHARS);
    $mensagem = filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_SPECIAL_CHARS);

    $to = "rstdpinheiro1@gmail.com";
    $assunto = "Contato cliente - Site";

    $corpo = "Nome: " . $nome . "\n" .
             "E-mail: " . $email . "\n" .
             "Telefone: " . $telefone . "\n\n" .
             "Mensagem:\n" . $mensagem;

    $cabeca = "From: rostandaraujo3@gmail.com\r\n";
    $cabeca .= "Reply-To: " . $email . "\r\n";
    $cabeca .= "X-Mailer: PHP/" . phpversion();

    if (mail($to, $assunto, $corpo, $cabeca)) {
        echo "E-mail enviado com sucesso!";
    } else {
        echo "Houve um erro ao enviar o e-mail!";
    }

} else {
    echo "Acesso inválido.";
}

?>
