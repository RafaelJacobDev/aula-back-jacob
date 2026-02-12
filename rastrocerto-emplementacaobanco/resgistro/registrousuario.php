<?php
// Importa o arquivo que faz a conexão com o banco de dados
require './conexaobanco.php';

// Variável que vai guardar mensagens (ex: erro)
$mensagem = "";

// Verifica se o formulário foi enviado (método POST)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Pega o nome digitado e remove espaços extras
    $nome = trim($_POST['nome']);

    // Pega o e-mail digitado e remove espaços extras
    $email = trim($_POST['email']);

    // Criptografa a senha para salvar com segurança
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
    
    $datanascimento = trim($_POST['datadenascimento']);

    $cidade = trim($_POST['cidade']);

    $estado = trim($_POST['estado']);
    
    $cpf = trim($_POST['cpf']);
    

    try {
        // Comando SQL para inserir um novo usuário no banco de dados
        $sql = "INSERT INTO DadosUsuarios (nomeUsuario, cpf, dataNascimento, estado, email, senha) 
                VALUES (:nome, :cpf, :dataNascimento, :estado, :email, :senha)";

        // Prepara o SQL antes de executar
        $stmt = $pdo->prepare($sql);

        // Executa o comando com os valores digitados
        $stmt->execute([
            ':nomeUsuario'  => $nome,
            ':cpf'  => $cpf,
            ':dataNacimento'  => $datanascimento,
            ':cidade'  => $cidade,
            ':estado'  => $estado,
            ':email' => $email,
            ':senha' => $senha,
        ]);

        // Depois de cadastrar, volta para o painel
        header("Location: index.php");
        exit;

    } catch (PDOException $e) {
        // Caso aconteça algum erro, mostra a mensagem
        $mensagem = "<p class='erro'>Erro ao cadastrar: " . $e->getMessage() . "</p>";
    }
}
?>