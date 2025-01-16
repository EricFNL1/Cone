<?php
// Incluir o arquivo de configuração
include('config.php');

// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obter os dados do formulário
    $nome = $conn->real_escape_string($_POST['nome']);
    $comentario = $conn->real_escape_string($_POST['comentario']);

    // Lista de palavras proibidas
    $palavras_proibidas = [
        'caralho', 'porra', 'merda', 'foda-se', 'cu', 'buceta', 'viado',
        'puto', 'desgraçado', 'imbecil', 'filha da puta', 'otário', 'arrombado',
        'cuzão', 'porra louca', 'piranha', 'safada', 'vadia', 'escroto', 'filha da puta',
        'fuder', 'cacete', 'cu de rato', 'merdinha', 'bosta', 'palhaço', 'retardado', 'cagar',
        'bucetuda', 'maldito'
    ];

    // Verificar se o comentário contém alguma palavra proibida
    foreach ($palavras_proibidas as $palavra) {
        if (stripos($comentario, $palavra) !== false) {
            // Mostrar um alerta usando SweetAlert2
            echo "
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Comentário inapropriado!',
                    text: 'Por favor, evite usar palavras inapropriadas.',
                    confirmButtonText: 'Ok'
                }).then(function() {
                    window.history.back(); // Voltar para a página anterior
                });
            </script>";
            exit();
        }
    }

    // Preparar e executar a consulta para salvar o comentário
    $sql = "INSERT INTO comentarios (nome, comentario) VALUES ('$nome', '$comentario')";

    if ($conn->query($sql) === TRUE) {
        // Se o comentário for salvo com sucesso, redirecionar para a página de comentários
        header("Location: index.php?status=success");
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
