<?php
// Credenciais do banco de dados
$servername = "localhost";
$username = "root";
$password = "admin";
$dbname = "connecta";  // Nome do banco de dados

// Função para testar a latência de uma API externa (ping do site)
function testApiLatency($url) {
    $startTime = microtime(true);
    $response = file_get_contents($url);
    $endTime = microtime(true);
    $latency = $endTime - $startTime;
    return $latency;
}

// Função para testar a latência do banco de dados
function testDbLatency($servername, $username, $password, $dbname) {
    $start_time = microtime(true); // Inicia a contagem do tempo de conexão

    // Criação da conexão
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificação da conexão
    if ($conn->connect_error) {
        $latency = -1; // Se falhar, a latência será -1
    } else {
        $end_time = microtime(true); // Fim do tempo de execução
        $latency = $end_time - $start_time;
    }

    // Fechar a conexão
    $conn->close();
    return $latency;
}

// Realiza o teste de latência e retorna os dados para o frontend
function getLatencies() {
    global $servername, $username, $password, $dbname;

    // Teste de latência do banco de dados
    $dbLatency = testDbLatency($servername, $username, $password, $dbname);

    // Teste de latência do site
    $siteLatency = testApiLatency("https://jsonplaceholder.typicode.com/posts");

    // Retorna os resultados
    return [
        'dbLatency' => $dbLatency,
        'siteLatency' => $siteLatency
    ];
}

// Teste de inserção de comentário
function insertComment($conn, $name, $comment) {
    $sql = "INSERT INTO comentarios (nome, comentario) VALUES ('$name', '$comment')";
    return $conn->query($sql) === TRUE;
}

// Função para realizar todos os testes e exibir no frontend
function getTestResults() {
    global $servername, $username, $password, $dbname;

    // Testar latência do banco de dados e do site
    $latencies = getLatencies();

    // Teste de inserção no banco
    $conn = new mysqli($servername, $username, $password, $dbname);
    $insertionStatus = insertComment($conn, "Teste", "Comentário de teste");
    $conn->close();

    // Testar consulta no banco
    $conn = new mysqli($servername, $username, $password, $dbname);
    $query = "SELECT * FROM comentarios LIMIT 1";
    $result = $conn->query($query);
    $comments = [];
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $comments[] = $row;
        }
    }
    $conn->close();

    // Retorna os dados
    return [
        'latencies' => $latencies,
        'insertionStatus' => $insertionStatus,
        'comments' => $comments
    ];
}

$testResults = getTestResults();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monitoramento de Latência e Testes</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #1a202c;
            color: white;
            text-align: center;
            padding-top: 30px;
        }
        #latencyChartContainer {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #2d3748;
            border-radius: 10px;
        }
        canvas {
            margin-top: 20px;
        }
        .header {
            font-size: 24px;
            margin-bottom: 20px;
        }
        .latency-text {
            font-size: 16px;
            color: #e53e3e;
        }
        .comment-text {
            font-size: 14px;
            color: #90cdf4;
        }
        #testResults {
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div id="latencyChartContainer">
    <h1 class="header">Monitoramento de Latência</h1>

    <div class="latency-text">Banco de Dados e Site</div>

    <!-- Gráfico -->
    <canvas id="latencyChart" width="400" height="200"></canvas>
</div>

<div id="testResults">
    <h2 class="header">Resultados dos Testes</h2>
    <div>
        <p>Conexão com o banco de dados: <?php echo ($testResults['latencies']['dbLatency'] > 0) ? "OK (Latência: " . number_format($testResults['latencies']['dbLatency'], 5) . " segundos)" : "Falhou"; ?></p>
        <p>Latência do site: <?php echo number_format($testResults['latencies']['siteLatency'], 5) . " segundos"; ?></p>
    </div>

    <!-- Inserção de Comentário -->
    <p>Status de Inserção de Comentário: <?php echo $testResults['insertionStatus'] ? "Sucesso!" : "Falhou"; ?></p>

    <!-- Comentários -->
    <h3>Comentários Recentes</h3>
    <ul>
        <?php foreach ($testResults['comments'] as $comment) : ?>
            <li class="comment-text"><?php echo "ID: " . $comment['id'] . " - " . $comment['nome'] . " - " . $comment['comentario']; ?></li>
        <?php endforeach; ?>
    </ul>
</div>

<script>
    // Inicialização dos dados do gráfico
    const labels = [];
    const dbLatencies = [];
    const siteLatencies = [];

    // Função para atualizar os gráficos
    function updateCharts() {
        fetch('')  // Requisição para o mesmo arquivo para pegar os dados de latência
            .then(response => response.json())
            .then(data => {
                const now = new Date().toLocaleTimeString();

                // Limita a quantidade de dados (10 pontos no gráfico)
                if (dbLatencies.length >= 10) {
                    dbLatencies.shift();
                    siteLatencies.shift();
                    labels.shift();
                }

                dbLatencies.push(data.dbLatency);
                siteLatencies.push(data.siteLatency);
                labels.push(now);

                latencyChart.update();
            });
    }

    // Configuração do gráfico para latência do banco de dados e site
    const latencyChart = new Chart(document.getElementById('latencyChart'), {
        type: 'line',
        data: {
            labels: labels,
            datasets: [
                {
                    label: 'Latência do Banco de Dados (ms)',
                    data: dbLatencies,
                    fill: false,
                    borderColor: 'rgba(75, 192, 192, 1)',
                    tension: 0.1,
                    borderWidth: 2
                },
                {
                    label: 'Latência do Site (ms)',
                    data: siteLatencies,
                    fill: false,
                    borderColor: 'rgba(255, 99, 132, 1)',
                    tension: 0.1,
                    borderWidth: 2
                }
            ]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        callback: function(value) {
                            return value + ' ms'; // Exibir a unidade "ms" no eixo Y
                        }
                    }
                }
            }
        }
    });

    // Atualiza o gráfico a cada 5 segundos
    setInterval(updateCharts, 5000);
</script>

</body>
</html>
