<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $data = $_POST["data"];
    $hora = $_POST["hora"];
    $pais = $_POST["pais"];

    if (!empty($data) && !empty($hora) && !empty($pais)) {

        // Junta data e hora
        $dataHora = $data . " " . $hora;

        // Fuso original (Brasil)
        $fusoOrigem = new DateTimeZone("America/Sao_Paulo");

        // Cria objeto DateTime
        $date = new DateTime($dataHora, $fusoOrigem);

        // Converte para o fuso escolhido
        $date->setTimezone(new DateTimeZone($pais));

        // Formata para exibição
        $resultado = $date->format("d/m/Y H:i");

    } else {
        $erro = "Preencha todos os campos.";
    }

} else {
    header("Location: atividade.php");
    exit();
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado da Conversão</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Resultado da Conversão</h2>

    <?php if (isset($erro)) { ?>
        <p><?php echo $erro; ?></p>
    <?php } else { ?>
        <p><strong>Data e hora convertida:</strong></p>
        <p style="font-size:18px; margin-top:10px;">
            <?php echo $resultado; ?>
        </p>
    <?php } ?>

    <br>
    <a href="atividade.php">
        <button>Voltar</button>
    </a>
</div>

</body>
</html>
