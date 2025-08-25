<?php



$base = filter_input(INPUT_GET, "base", filter: FILTER_VALIDATE_FLOAT);

$altura = filter_input(INPUT_GET, "altura", filter: FILTER_VALIDATE_FLOAT);


if ($base == false ||  $altura == false) {
    $mensagem = "Valores inválidos";
} else {
    $area = $base * $altura / 2;
    $mensagem = "<p> base => " . $_GET["base"] . "</p>" .
        "<p> altura => " . $_GET["altura"] . "</p>" .
        "O valor do area é " . $area;
}




$area = ($base * $altura) / 2;


?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área</title>
    <link rel="stylesheet" href="./../css/estilo.css">
</head>

<body>
    <h1>Resultado da área do triangulo</h1>
    <div id="resultado">

        <?= $mensagem; ?>

    </div>
</body>

</html>