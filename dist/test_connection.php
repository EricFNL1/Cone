<?php
// Credenciais do banco de dados
$servername = "localhost";
$username = "root";
$password = "admin";
$dbname = "connecta";  // O nome do seu banco de dados

// Criação da conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificação da conexão
if ($conn->connect_error) {
    // Caso haja erro na conexão, mostra o erro
    die("Connection failed: " . $conn->connect_error);
} else {
    // Caso a conexão seja bem-sucedida, mostra uma mensagem
    echo "Conexão bem-sucedida ao banco de dados!";
}

// Fechar a conexão
$conn->close();
?>
