<?php

$nome = filter_input(INPUT_GET,"nome");

$renda = filter_input(INPUT_GET, "renda", filter: FILTER_VALIDATE_FLOAT);


if ($renda == false || $nome == false) {
    $mensagem = "Valores inválidos";
} else {
    $imposto = $renda * 0.0750 ;
    $mensagem = $nome . " o seu imposto vai ser de " . $imposto;
}




$imposto = ($renda * 0.0750);


?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imposto</title>
    <link rel="stylesheet" href="./../css/estilo.css">
</head>

<body>
    <h1>Resultado do seu imposto</h1>
    <div id="resultado">

        <?= $mensagem; ?>

    </div>
</body>

</html>