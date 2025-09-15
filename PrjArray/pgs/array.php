<?php
$aluno1 = trim($_GET["aluno1"]);
$aluno2 = trim($_GET["aluno2"]);
$aluno3 = trim($_GET["aluno3"]);
$aluno4 = trim($_GET["aluno4"]);
$aluno5 = trim($_GET["aluno5"]);
$aluno6 = trim($_GET["aluno6"]);
$aluno7 = trim($_GET["aluno7"]);

$mensagem="";
$mensagem2="";

if ($aluno1 == null || $aluno2 == null || $aluno3 == null || $aluno4 == null|| $aluno5 == null|| $aluno6 == null|| $aluno7 == null) {
    echo "Valores vazios";
} else if (strlen($aluno1) < 2 || strlen($aluno2) < 2 || strlen($aluno3) < 2|| strlen($aluno4) < 2|| strlen($aluno5) < 2|| strlen($aluno6) < 2|| strlen($aluno7) < 2) {
    echo "Um nome precisa de no mínimo dois caracteres";
} else {
    $alunos = [$aluno1, $aluno2, $aluno3, $aluno4, $aluno5, $aluno6, $aluno7]; //criação de array vazio 
    $professores = array("Pardal", "Tibúrcio", "Girafales", "Juquinha"); //criação de array populado
    //quando usa a palavra array usa () quando quer fazer sem escrever usa []
    var_dump($alunos);
    //var_dump($professores);
    $alunos = array_values(array_unique($alunos));

    var_dump($alunos);

    for ($i=0; $i <count($alunos) ; $i++) { 
        $mensagem .="<li>".$alunos[$i]."</li>";
    }

   for ($a=0; $a <count($professores) ; $a++) { 
        $mensagem2 .="<li>".$professores[$a]."</li>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lista escola</title>
</head>
<body>
    <hi>lista escola</hi>
    <h2>lista aluno</h2>
    <ul>
       <?= $mensagem ?>
    </ul>
    <h2>lista professor</h2>
    <ul>
        <?= $mensagem2 ?>
    </ul>
</body>
</html>