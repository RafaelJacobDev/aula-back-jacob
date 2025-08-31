<?php
$salario = filter_input(INPUT_GET, "salario", filter: FILTER_VALIDATE_FLOAT);

$salariominimo = 1293.20;

$quantosminimos = $salario/$salariominimo;

$inteiro = floor($quantosminimos);

$resto_decimal = $quantosminimos - $inteiro;
$resto_reais = round($resto_decimal * $salariominimo, 2);


$mensagem = "Você recebe {$inteiro} salário(s) mínimo(s) e R$" . number_format($resto_reais, 2) . " reais.";

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Resultado da Verificação</title>
  <link rel="stylesheet" href="./../css/estilo.css">
 
</head>
<body>
  <main>
    <h1>Resultado</h1>
    
    <div class="resultado <?= $classe_css; ?>">
      <?= $mensagem; ?>
    </div>

    <a href="../index.html" class="back-link">Voltar</a>
  </main>
</body>
</html>