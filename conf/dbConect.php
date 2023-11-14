<?php
// Configurações de conexão com o banco de dados
$servername = "dev.pedro.com";
$username = "root";
$password = "";
$dbname = "db_mercadores";

// Conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

$conn->query("SET SESSION wait_timeout = 600");
?>