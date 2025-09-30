<?php

function darBoasVindas()
{
    $hora = time();
    echo "Hello World Function, {$hora}";
}

function calcularMedia($arrayNotas)
{
    return array_sum($arrayNotas) / count($arrayNotas);
}

function verificarAprovacao($umaMedia)
{
    return $umaMedia >= 7 ? true : false;

    // if ($umaMedia>=7) {
    //     return true;
    //} else {
    //     return false;
    // }

}

$nome = trim($_GET['nome']);
$notas = $_GET['notas'];

calcularMedia($notas);
verificarAprovacao($media);

//$mensagemBoasVindas = "Olá, {$nome}! Sua média é: {$media}";
//if ($media >= 7) {
//    $mensagemResultado = "Parabéns, você foi aprovado!";
//} else {
//    $mensagemResultado =  "Infelizmente, você foi reprovado.";
//}

//darBoasVindas();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Performance do Aluno</title>
    <link rel="stylesheet" href="./../css/style.css">
</head>

<body>
    <main class="container">
        <h1>Performance do Aluno</h1>
        <p><?= $mensagemBoasVindas ?></p>
        <p id="<?= $media >= 7 ? "aprovado" : "reprovado"; ?>"><?= $mensagemResultado ?></p>
    </main>
</body>

</html>