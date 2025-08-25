<?php

/*
Para rodar uma aplicação php

1- Inicializar o servidor Apache (xampp)
2- colocar a pasta do projeto na pasta htcodocs dentro do XAMPP
3- Acessar o localhost com o brawnser acrescido da pasta do seu projeto
*/

//echo $_POST;
//echo $_GET;

//var_dump($_POST);
//var_dump($_GET);   

$lado1 = filter_input(INPUT_GET, "lado1", filter: FILTER_VALIDATE_FLOAT);

$lado2 = filter_input(INPUT_GET, "lado2", filter: FILTER_VALIDATE_FLOAT);

$lado3 = filter_input(INPUT_GET, "lado3", filter: FILTER_VALIDATE_FLOAT);

if ($lado1 == false ||  $lado2 == false || $lado3 == false) {
    $mensagem = "Valores inválidos";
} else {
    $perimetro = $lado1 + $lado2 + $lado3;
    $mensagem = "<p> Lado 1 => " . $_GET["lado1"] . "</p>" .
        "<p> Lado 2 => " . $_GET["lado2"] . "</p>" .
        "<p> Lado 3 => " . $_GET["lado3"] . "</p>" .
        "O valor do perimetro é " . $perimetro;
}




$perimetro = $lado1 + $lado2 + $lado3;



/*
operadores aritméticos - PHP

+adição, - subtração, * multiplicação, / divisão, % modulo, ** potenciação 
*/

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>perimetro</title>
    <link rel="stylesheet" href="./../css/estilo.css">
</head>

<body>
    <h1>Resultado do perimetro do triangulo</h1>
    <div id="resultado">

        <?= $mensagem; ?>

    </div>
</body>

</html>