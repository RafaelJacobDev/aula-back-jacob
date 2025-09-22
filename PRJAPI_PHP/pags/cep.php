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
        } else {
            echo "<h2> Endereço encontrado </h2>";
            echo "<input type='text' value='{$dados['logradouro']}' disabled> <br>";
            echo "<input type='text' value='{$dados['complemento']}'disabled> <br>";
            echo "<input type='text' value='{$dados['bairro']}'disabled> <br>";
            echo "<input type='text' value='{$dados['localidade']}'disabled> <br>";
            echo "<input type='text' value='{$dados['estado']}'disabled> <br>";
        }
    }

    echo "<p>{$mensagem}</P>";
?>