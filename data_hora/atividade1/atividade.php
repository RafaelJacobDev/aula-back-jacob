<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Conversor de Data e Hora</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <h2>Conversor de Data e Hora por País</h2>

        <form action="converter.php" method="POST">
            
            <label for="data">Escolha a data:</label>
            <input type="date" name="data" id="data" required>

            <label for="hora">Escolha a hora:</label>
            <input type="time" name="hora" id="hora" required>

            <label for="pais">Escolha o país:</label>
            <select name="pais" id="pais" required>
                <option value="">Selecione</option>
                <option value="America/Sao_Paulo">Brasil</option>
                <option value="America/New_York">Estados Unidos</option>
                <option value="Europe/London">Reino Unido</option>
                <option value="Asia/Tokyo">Japão</option>
                <option value="Europe/Paris">França</option>
            </select>

            <button type="submit">Converter</button>
        </form>
    </div>

</body>
</html>
