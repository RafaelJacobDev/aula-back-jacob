<?php

$numero = filter_input(INPUT_GET, "numero", filter: FILTER_VALIDATE_FLOAT);

$resultado = $numero % 2;

if ($resultado == 0) {
    $mensagem = "O número é par";
} else {
    $mensagem = "O número é ímpar";
}
if ($resultado < 0) {
    $mensagem_2 = "O seu número é positivo";
} else {
    $mensagem_2 = "O seu número é negativo";
}



?>





<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Resultado da Verificação</title>
    <link rel="stylesheet" href="../css/estilo.css">

</head>

<body>
    <main>
        <h1>Resultado</h1>

        <div class="resultado <?php echo $classe_css; ?>">
            <?= $mensagem; ?>
            <p><?= $mensagem_2; ?></p>
            <p>O seu número é <?= $numero; ?> </p>


        </div>

        <a href="../index.html" class="back-link">Voltar</a>
    </main>
</body>

</html>