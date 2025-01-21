<?php
// Credenciais do banco de dados
$servername = "localhost";
$username = "root";
$password = "admin";
$dbname = "connecta";  // O nome do seu banco de dados

// Função para testar a conexão com o banco de dados
function testarConexaoBanco($servername, $username, $password, $dbname) {
    $start_time = microtime(true); // Inicia a contagem do tempo de conexão

    // Criação da conexão
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificação da conexão
    if ($conn->connect_error) {
        $end_time = microtime(true); // Fim do tempo de execução
        $latency = $end_time - $start_time;
        echo "Conexão falhou: " . $conn->connect_error . " (Tempo: " . $latency . " segundos)<br>";
    } else {
        $end_time = microtime(true); // Fim do tempo de execução
        $latency = $end_time - $start_time;
        echo "Conexão bem-sucedida ao banco de dados! Latência: " . $latency . " segundos.<br>";
    }

    // Fechar a conexão
    $conn->close();
}

// Função para testar a inserção no banco de dados
function testarInsercao($conn) {
    $nome = "Teste";
    $comentario = "Comentário de teste";
    
    $sql = "INSERT INTO comentarios (nome, comentario) VALUES ('$nome', '$comentario')";

    if ($conn->query($sql) === TRUE) {
        echo "Inserção bem-sucedida de dados na tabela de comentários!<br>";
    } else {
        echo "Erro na inserção: " . $conn->error . "<br>";
    }
}

// Função para testar a consulta de dados
function testarConsulta($conn) {
    $sql = "SELECT * FROM comentarios LIMIT 1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "Consulta bem-sucedida! Aqui estão os dados:<br>"; 
        while($row = $result->fetch_assoc()) {
            echo "ID: " . $row['id'] . " - Nome: " . $row['nome'] . " - Comentário: " . $row['comentario'] . "<br>";
        }
    } else {
        echo "Nenhum comentário encontrado.<br>";
    }
}

// Função para testar a latência de uma API externa
function testApiLatency($url) {
    $startTime = microtime(true);
    $response = file_get_contents($url);
    $endTime = microtime(true);
    $latency = $endTime - $startTime;
    return $latency;
}

// Função de teste geral (para verificar vários aspectos)
function realizarTestes() {
    global $servername, $username, $password, $dbname;

    // Testando conexão e latência com o banco de dados
    testarConexaoBanco($servername, $username, $password, $dbname);

    // Teste de latência da API externa
    $apiUrl = "https://jsonplaceholder.typicode.com/posts";
    $apiLatency = testApiLatency($apiUrl);
    echo "Latência da API externa: " . number_format($apiLatency, 5) . " segundos.<br>";

    // Testando operações do banco de dados
    $conn = new mysqli($servername, $username, $password, $dbname);
    testarInsercao($conn);
    testarConsulta($conn);
}

// Realizando os testes
realizarTestes();
?>
