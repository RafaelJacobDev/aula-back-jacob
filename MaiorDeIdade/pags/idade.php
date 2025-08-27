<?php
$nome = filter_input(INPUT_GET, "nome");
$nascimento = filter_input(INPUT_GET, "nascimento", FILTER_VALIDATE_INT);

$idade =  2025 - $nascimento;

if ($idade >= 18) {
    $mensagem = $nome . " você tem " . $idade . ". Você é maior de idade";
} else {
    $mensagem = $nome . " você tem " . $idade . ". Você é menor de idade";
}
?>



<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idade</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>

<body>
    <h1>Veja sua idade:</h1>
    <div>
        <div id="resultado">

            <?= $mensagem; ?>


        </div>
    </div>
</body>

</html>