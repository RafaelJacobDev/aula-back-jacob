<?php

$valorinicial = filter_input(INPUT_GET, "valorinicial", FILTER_SANITIZE_NUMBER_INT);

$valorfinal = filter_input(INPUT_GET, "valorfinal", FILTER_SANITIZE_NUMBER_INT);

$passos = filter_input(INPUT_GET, "passos", FILTER_SANITIZE_NUMBER_INT);

if ($valorinicial == false ||  $valorfinal == false || $passos == false) {
    $resultadoContagem = "Valores inválidos";
} else {
    while ($valorinicial <= $valorfinal) {
        $resultadoContagem = $valorinicial . "<li> $passos </li>";
        //$resultadoContagem .= "<li> $contador </li>";

        $resultadoContagem = $valorinicial + $passos;
        //$contador += 2;
    }
}
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contagem de 0 a 20</title>
    <link rel="stylesheet" href="./../css/estilo.css">
</head>

<body>
    <h1> Contagem com While </h1>
    <ul>
        <p><?= $resultadoContagem; ?></p>
    </ul>
</body>

</html>