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
