<?php


$celsius = filter_input(INPUT_GET, "celsius", filter: FILTER_VALIDATE_FLOAT);


if ($celsius == false) {
    $mensagem = "Valores inválidos";
} else {
    $Fahrenheit = ( $celsius * 1.8 ) + 32;
    $mensagem = "A temperatura em Fahrenheit é " . $Fahrenheit ;
}




$Fahrenheit = $celsius * 1.8 + 32;


?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor para Fahrenheit</title>
    <link rel="stylesheet" href="./../css/estilo.css">
</head>

<body>
    <h1>Conversor para Fahrenheit</h1>
    <div id="resultado">

        <?= $mensagem; ?>

    </div>
</body>

</html>