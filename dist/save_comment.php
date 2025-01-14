<?php
// Incluir o arquivo de configuração
include('config.php');

// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obter os dados do formulário
    $nome = $conn->real_escape_string($_POST['nome']);
    $comentario = $conn->real_escape_string($_POST['comentario']);

    // Preparar e executar a consulta para salvar o comentário
    $sql = "INSERT INTO comentarios (nome, comentario) VALUES ('$nome', '$comentario')";

    if ($conn->query($sql) === TRUE) {
        // Se o comentário for salvo com sucesso, redirecionar para a página de comentários
        header("Location: index.php"); // Ou a página que você deseja
        exit();
    } else {
        echo "Erro: " . $conn->error;
    }

    // Fechar a conexão
    $conn->close();
} else {
    // Redirecionar para o formulário caso o acesso não seja via POST
    header("Location: index.php");
    exit();
}
?>
