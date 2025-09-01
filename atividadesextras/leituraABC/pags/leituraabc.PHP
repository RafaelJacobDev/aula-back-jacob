<?php

$valorA = filter_input(INPUT_GET,"valorA", FILTER_SANITIZE_NUMBER_FLOAT);

$valorB = filter_input(INPUT_GET,"valorB", FILTER_SANITIZE_NUMBER_FLOAT);  

$valorC = filter_input(INPUT_GET,"valorC", FILTER_SANITIZE_NUMBER_FLOAT);

$valorAB = $valorA + $valorB;

if ($valorAB < $valorC == true) {
    $mensagem = "O valor C é maior do que a some de A+B, valor A+B=" . $valorAB . " valor de C= " . $valorC;
} else {
    $mensagem = "A soma de A+B não é menor do que C, valor A+B=" . $valorAB . " valor de C= ". $valorC;
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado da Soma</title>
    <link rel="stylesheet" href="./../css/estilo.css">    
   
</head>
<body>
    <main>
        <h1>Resultado</h1>
        
        <div class="resultado <?php echo $classe_css; ?>">
            <?php echo $mensagem; ?>
        </div>

        <a href="../index.html" class="back-link">Voltar</a>
    </main>
</body>
</html>