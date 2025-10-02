<?php
function validarEntradas($nome, $notas)
{
    if (!isset($nome) && count($notas) == 0 || (!preg_match('/^[A-Za-z\s]+$/', $nome)) && (!is_numeric($notas))) {
        return false;
    } else {
        return true;
    }

    // ^ e $ → início e fim da string (pra não deixar sobrar nada fora do padrão).

    //\p{L} → qualquer letra (inclui acentos, ç, etc).

    //\s → espaço.

    //+ → precisa ter pelo menos 1 caractere válido.

    //u → para tratar corretamente caracteres UTF-8 (acentos).

}

function darBoasVindas()
{
    date_default_timezone_set('America/Sao_Paulo');
    $hora = date("H:i:s"); //?
    echo "Bem vindo, {$hora}";
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
function passouMedia($aprovacao)
{
    return $mensagemAprovacao = $aprovacao == true ? "Você passou de ano" : "Você reprovou de ano";

    //if ($aprovacao=true) {
    //   $mensagemAprovacao= "Você passou de ano";
    //} else{
    //    $mensagemAprovacao= "Você reprovou de ano";
    //}
    //return $mensagemAprovacao;
}
$nome = trim($_GET['nome']);
$notas = $_GET['notas'];
if (validarEntradas($nome, $notas) == true) {
} else {
    header('location: ../index.html');
}
$mensagemAprovacao = "";
$media = calcularMedia($notas);
$aprovacao = verificarAprovacao($media);
$passouMedia = passouMedia($aprovacao);
$media = number_format($media, 2, ',', '.');
$mensagem = "Olá, {$nome}! Sua média é: {$media}";
$mensagem2 = $passouMedia;


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
        <p><?=darBoasVindas()?></p>
        <p><?= $mensagem ?></p>
        <p id="<?= $aprovacao == true ? "aprovado" : "reprovado"; ?>"><?= $mensagem2 ?></p>

    </main>
</body>

</html>