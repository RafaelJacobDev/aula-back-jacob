<?php

$mensagem = "";
$cep = filter_input(INPUT_GET, "cepBuscado", FILTER_VALIDATE_INT);

if (!isset($cep) || strlen($cep) != 8) {
    $mensagem = "CEP invalido.";
} else {

    $url = "https://viacep.com.br/ws/{$cep}/json/";

    $options = [
        "http" => [
            "method" => "GET",
            "header" => "Content-Type: application/json"
        ]
    ];
    $context = stream_context_create($options);
    $response = file_get_contents($url, false, $context);
}

if ($response == false) {
    $mensagem = "Erro ao acessar a API ViaCEP." ;
    } else{
        $dados= json_decode($response, true);
        if (isset($dados['erro'])) {
            $mensagem = "CEP não encontrado.";
        } //else {
           // echo "<h2> Endereço encontrado </h2>";
           // echo "<input type='text' value='{$dados['logradouro']}' disabled> <br>";
           //echo "<input type='text' value='{$dados['complemento']}'disabled> <br>";
           // echo "<input type='text' value='{$dados['bairro']}'disabled> <br>";
           // echo "<input type='text' value='{$dados['localidade']}'disabled> <br>";
           //echo "<input type='text' value='{$dados['estado']}'disabled> <br>";
        
    }

    //echo "<p>{$mensagem}</P>";
?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado - Busca CEP</title>
     <link rel="stylesheet" href=".././css/estilo.css">
</head>
<body>
    <div id="cep-buscado">
        <div>
            <label>Logradouro</label>
            <input type="text" value="<?=isset($dados['logradouro']) ? $dados['logradouro'] : $mensagem ?>"disabled>
        </div>
        <div>
            <label>Complemento</label>
            <input type="text" value="<?=isset($dados['complemento']) ? $dados['complemento'] : $mensagem ?>"disabled>
        </div>
        <div>
            <label>Bairro</label>
            <input type="text" value="<?=isset($dados['bairro']) ? $dados['bairro'] : $mensagem ?>"disabled>
        </div>
        <div>
            <label>Localidade</label>
            <input type="text" value="<?=isset($dados['localidade']) ? $dados['localidade'] : $mensagem?>"disabled>
        </div>
        <div>
            <label>Estado</label>
            <input type="text" value="<?=isset($dados['estado']) ? $dados['estado'] : $mensagem?>"disabled>
        </div>

    </div>
</body>
</html>