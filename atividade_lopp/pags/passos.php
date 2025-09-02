<?php

$valorinicial = filter_input(INPUT_GET, "valorinicial", FILTER_VALIDATE_INT);

$valorfinal = filter_input(INPUT_GET, "valorfinal", FILTER_VALIDATE_INT);

$passos = filter_input(INPUT_GET, "passos", FILTER_VALIDATE_INT);

$resultadoContagem = "";

if ($valorinicial == false ||  $valorfinal == false || $passos == false || $valorinicial < 0 || $valorfinal > 50 || $valorfinal < $valorinicial || $passos > $valorfinal) {
    $mensagem = "Valores inválidos";
} else {
    $mensagem = "Contagem iniciando em $valorinicial e terminando em $valorfinal (incrementos de $passos)";

    $resultadoContagem = "";
    $contador = $valorinicial;

    $primeiroNumero = true;

    while ($contador <= $valorfinal) {
        $proximoContador = $contador + $passos;
        $ultimoNumero = ($proximoContador > $valorfinal);

        if ($primeiroNumero) {
            $resultadoContagem .= "<li>$contador - Número inicial</li>";
            $primeiroNumero = false;
        } elseif ($ultimoNumero) {
            $resultadoContagem .= "<li>$contador - Número final</li>";
        } else {
            $resultadoContagem .= "<li>$contador</li>";
        }

        $contador = $contador + $passos;
    }
}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contagem</title>
    <link rel="stylesheet" href="./../css/estilo.css">
</head>

<body>
     <div class="main">
        <h1>Contagem com While</h1>
        <div class="coluna">
            <p class="mensagem"><?= $mensagem; ?></p>
            <ul class="mensagem">
                <?= $resultadoContagem; ?>
            </ul>
        </div>

        <a href="../index.html" class="back-link">Voltar</a>
    </div>
</body>

</html>