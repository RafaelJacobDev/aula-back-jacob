<?php
$ladoA = filter_input(INPUT_GET,"valorA", FILTER_SANITIZE_NUMBER_FLOAT);
$ladoB = filter_input(INPUT_GET,"valorB", FILTER_SANITIZE_NUMBER_FLOAT);
$ladoC = filter_input(INPUT_GET,"valorC" , FILTER_SANITIZE_NUMBER_FLOAT);

if ($ladoA == $ladoB && $ladoB == $ladoC) {
    $mensagem = "O seu triangulo é um triângulo equilátero já que todos os lados são iguais.";
} elseif ($ladoA != $ladoB && $ladoB != $ladoC && $ladoA != $ladoC) {
    $mensagem = "O seu triangulo é um triangulo escaleno já que todos os lados são diferentes.";
} else {
    $mensagem = "O seu triangulo é um triangulo isósceles já que pelo menos dois lados são iguais.";
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado da classificação</title>
    <link rel="stylesheet" href="./../css/estilo.css">
</head>
<body>
    <main>
        <h1>Resultado</h1>
        <div class="resultado <?php echo $classe_css; ?>">
            <?= $mensagem; ?>
        </div>
        <a href="../index.html" class="back-link">Voltar</a>
    </main>
</body>
</html>