<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pegando os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    // Definindo o endereço de e-mail para onde a mensagem será enviada
    $para = "seu-email@dominio.com"; // Substitua pelo seu endereço de e-mail
    $assunto = "Novo contato de: $nome";

    // Corpo do e-mail
    $corpo = "Nome: $nome\n";
    $corpo .= "E-mail: $email\n";
    $corpo .= "Mensagem:\n$mensagem";

    // Cabeçalhos do e-mail
    $headers = "From: $email" . "\r\n" . "Reply-To: $email" . "\r\n";

    // Enviar o e-mail
    if (mail($para, $assunto, $corpo, $headers)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Ocorreu um erro ao enviar a mensagem. Tente novamente.";
    }
}
?>
