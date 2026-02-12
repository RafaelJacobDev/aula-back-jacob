<?php
$resultado = "";

if (isset($_POST['data_admissao']) && isset($_POST['data_demissao'])) {

    $dataAdmissao = new DateTime($_POST['data_admissao']);
    $dataDemissao = new DateTime($_POST['data_demissao']);

    if ($dataDemissao < $dataAdmissao) {
        $resultado = "A data de demissão não pode ser anterior à admissão.";
    } else {
        $diferenca = $dataAdmissao->diff($dataDemissao);

        $resultado = "Tempo trabalhado: " .
                     $diferenca->y . " anos, " .
                     $diferenca->m . " meses e " .
                     $diferenca->d . " dias.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Tempo de Trabalho</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <h1>Cálculo de Tempo de Trabalho</h1>

        <form method="POST">
            <label>Data de Admissão:</label>
            <input type="date" name="data_admissao" required>

            <label>Data de Demissão:</label>
            <input type="date" name="data_demissao" required>

            <button type="submit">Calcular</button>
        </form>

        <?php if ($resultado != ""): ?>
            <div class="resultado">
                <?php echo $resultado; ?>
            </div>
        <?php endif; ?>
    </div>

</body>
</html>
