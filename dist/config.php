<?php
// Configuração do banco de dados
$host = 'localhost';     // O servidor do banco de dados (normalmente 'localhost')
$dbname = 'connecta';    // Nome do banco de dados
$username = 'root';      // Nome de usuário do MySQL
$password = 'admin';     // Senha do MySQL

// Criação da conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>
