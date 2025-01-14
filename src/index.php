<?php
// Incluir o arquivo de configuração
include('config.php');

// Consulta ao banco de dados para obter os comentários
$sql = "SELECT nome, comentario FROM comentarios ORDER BY id DESC";
$result = $conn->query($sql);

// Exibir os comentários dinamicamente no carrossel
if ($result->num_rows > 0) {
    $active = true; // Para definir qual item será o ativo no carrossel
    while($row = $result->fetch_assoc()) {
        // Se for o primeiro comentário, ele será o ativo
        $activeClass = $active ? 'active' : '';
        echo "<div class='carousel-item $activeClass'>
                <div class='block p-4'>
                    <p>\"{$row['comentario']}\"</p>
                    <h4 class='mt-4 font-semibold'>— {$row['nome']}</h4>
                </div>
              </div>";
        $active = false; // Após o primeiro comentário, os outros não serão ativos
    }
} else {
    echo "<p class='text-center text-gray-500'>Nenhum comentário encontrado.</p>";
}

// Fechar a conexão
$conn->close();
?>
