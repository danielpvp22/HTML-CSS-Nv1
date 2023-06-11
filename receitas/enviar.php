<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pega as informações do formulário
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $rua = $_POST["rua"];
    $numero = $_POST["numero"];
    $complemento = $_POST["complemento"];
    $cidade = $_POST["cidade"];
    $estado = $_POST["estado"];
    $cep = $_POST["cep"];
    
    // Formata o email a ser enviado
    $to = "danielpvp22@gmail.com";
    $subject = "Novo cadastro";
    $message = "Nome: $nome\n";
    $message .= "Email: $email\n";
    $message .= "Rua: $rua\n";
    $message .= "Número: $numero\n";
    $message .= "Complemento: $complemento\n";
    $message .= "Cidade: $cidade\n";
    $message .= "Estado: $estado\n";
    $message .= "CEP: $cep\n";
    $headers = "From: $email";
    
    // Envia o email
    if(mail($to, $subject, $message, $headers)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Ocorreu um erro ao enviar a mensagem. Por favor, tente novamente mais tarde.";
    }
}

?>