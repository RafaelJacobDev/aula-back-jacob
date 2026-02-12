<?php
// Configuração da conexão com MySQL local
$host = "localhost";
$usuario = "root";      // padrão no XAMPP/WAMP
$senha = "";            // senha padrão (em branco no XAMPP)
$banco = "meu_banco";   // altere para o nome do seu banco

$conn = new mysqli($host, $usuario, $senha, $banco);

// Verifica erro na conexão
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}
?>
