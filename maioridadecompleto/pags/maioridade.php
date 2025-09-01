<?php
$nome = filter_input(INPUT_GET, "nome");
$idade = filter_input(INPUT_GET, "idade", FILTER_VALIDATE_INT);


if ($idade < 18) {
    $mensagem = "Negado! Apenas maior de 18 pode ingressar!";
} else {
    $mensagem = "Bem vindo " . $nome;
}

if ($idade <= 11) {
    $mensagem2 = $nome . " com " . $idade . "anos, você é criança";
}
if ($idade >= 12 && $idade <= 17) {
    $mensagem2 = $nome . " com " . $idade . "anos, você é adolecente";
}
if ($idade >= 18 && $idade <= 25) {
    $mensagem2 = $nome . " com " . $idade . "anos, você é jovem";
}
if ($idade >= 26 && $idade <= 60) {
    $mensagem2 = $nome . " com " . $idade . "anos, você é adulto";
}
if ($idade >= 60) {
    $mensagem2 = $nome . " com " . $idade . "anos, você é idoso";
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
           <p> <?= $mensagem2; ?> </P>


        </div>
    </div>
</body>

</html>