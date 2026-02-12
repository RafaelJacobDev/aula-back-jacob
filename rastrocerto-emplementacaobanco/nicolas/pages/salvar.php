<?php
include "conexao.php";

// ============================
// Dados obrigatórios
// ============================

$tipo  = $_POST["tipo"]  ?? "";
$nome  = $_POST["nome"]  ?? "";
$email = $_POST["email"] ?? "";

// ============================
// Campos opcionais
// ============================

$area_interesse = null;
$disponibilidade = null;
$endereco = null;
$animal = null;
$area_atuacao = null;

// ============================
// Definir campos conforme tipo
// ============================

if ($tipo === "dev") {
    $area_interesse = $_POST["area_interesse"] ?? null;
}

if ($tipo === "lar_temporario") {
    $disponibilidade = $_POST["disponibilidade"] ?? null;
    $endereco = $_POST["endereco"] ?? null;
    $animal = $_POST["animal"] ?? null;
}

if ($tipo === "resgate") {
    $area_atuacao = $_POST["area_atuacao"] ?? null;
}

// ============================
// Validação simples
// ============================

if (empty($nome) || empty($email) || empty($tipo)) {
    die("Preencha os campos obrigatórios.");
}

// ============================
// Prepared Statement
// ============================

$stmt = $conn->prepare("
    INSERT INTO Voluntarios 
    (tipo, nome, email, area_interesse, disponibilidade, endereco, animal, area_atuacao) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?)
");

$stmt->bind_param(
    "ssssssss",
    $tipo,
    $nome,
    $email,
    $area_interesse,
    $disponibilidade,
    $endereco,
    $animal,
    $area_atuacao
);

// ============================
// Executar
// ============================

if ($stmt->execute()) {

    echo "<h2>Cadastro realizado com sucesso!</h2>";
    echo "<a href='index.php'>Voltar</a>";

} else {

    echo "Erro ao cadastrar: " . $stmt->error;
}

// ============================
// Fechar conexões
// ============================

$stmt->close();
$conn->close();
?>
