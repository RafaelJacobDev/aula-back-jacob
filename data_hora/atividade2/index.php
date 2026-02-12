<?php
$resultado = "";

if (isset($_POST['data_nascimento'])) {
    $dataNascimento = $_POST['data_nascimento'];
    
    $dataAtual = new DateTime();
    $dataNasc = new DateTime($dataNascimento);
    $diferenca = $dataAtual->diff($dataNasc);

    $resultado = "Você tem " . 
                 $diferenca->y . " anos, " . 
                 $diferenca->m . " meses e " . 
                 $diferenca->d . " dias.";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de Idade</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <h1>Calculadora de Idade</h1>

        <form method="POST">
            <label for="data_nascimento">Digite sua data de nascimento:</label>
            <input type="date" name="data_nascimento" required>
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
