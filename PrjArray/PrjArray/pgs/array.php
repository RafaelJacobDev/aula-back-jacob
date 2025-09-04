<?php
$aluno1 = trim($_GET["aluno1"]);
$aluno2 = trim($_GET["aluno2"]);
$aluno3 = trim($_GET["aluno3"]);

$mensagem="";

if ($aluno1 == null || $aluno2 == null || $aluno3 == null) {
    echo "Valores vazios";
} else if (strlen($aluno1) < 2 || strlen($aluno2) < 2 || strlen($aluno3) < 2) {
    echo "Um nome precisa de no mínimo dois caracteres";
} else {
    $alunos = [$aluno1, $aluno2, $aluno3]; //criação de array vazio 
    $professores = array("Pardal", "Tibúrcio", "Girafales", "Juquinha"); //criação de array populado
    //quando usa a palavra array usa () quando quer fazer sem escrever usa []
    //var_dump($alunos);
    //var_dump($professores);
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