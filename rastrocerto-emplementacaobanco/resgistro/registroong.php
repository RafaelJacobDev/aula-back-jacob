<?php
// Importa o arquivo que faz a conexão com o banco de dados
require './conexabanco.php';

// Variável que vai guardar mensagens (ex: erro)
$mensagem = "";

// Verifica se o formulário foi enviado (método POST)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Pega o nome digitado e remove espaços extras
    $nomeEmpresa = trim($_POST['nomeEmpresa']);

    // Pega o e-mail digitado e remove espaços extras
    $email = trim($_POST['email']);

    // Criptografa a senha para salvar com segurança
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
    
    $nomeFantasia = trim($_POST['nomeFantasia']);

    $cnpj = trim($_POST['cnpj']);

    $redeSocial = trim($_POST['redeSocial']);

    $responsavelOng = trim($_POST['responsavelOng']);

    $caracteristicas = trim($_POST['caracteristicas']);

    $cep = trim($_POST['cep']);

    $logradouro = trim($_POST['logradouro']);
    
    $numero = trim($_POST['numero']);

    $cidade = trim($_POST['cidade']);

    $estado = trim($_POST['estado']);

    $complemento = trim($_POST['complemento']);
      
    
    try {
        // Comando SQL para inserir um novo usuário no banco de dados
        $sql = "INSERT INTO DadosOng (nomeEmpresa, cnpj, nomeFantasia, email, redeSocial, senha, responsavelOng, caracteristicas, cep, logradouro, numero, cidade, estado, complemento) 
                VALUES (:nomeEmpresa, :cnpj, :nomeFantasia, :email, :redeSocial, :senha, :responsavelOng, :caracteristicas, :cep, :logradouro, :numero, :cidade, :estado, :complemento)";

        // Prepara o SQL antes de executar
        $stmt = $pdo->prepare($sql);

        // Executa o comando com os valores digitados
        $stmt->execute([
            ':nomeEmpresa'  => $nomeEmpresa,
            ':cnpj'  => $cnpj,
            ':nomeFantasia'  => $nomeFantasia,
            ':email'  => $email,
            ':redeSocial'  => $redeSocial,
            ':senha' => $senha,
            ':responsavelOng' => $responsavelOng,
            ':caracteristicas' => $caracteristicas,
            ':cep' => $cep,
            ':logradouro' => $logradouro,
            ':numero' => $numero,
            ':cidade' => $cidade,
            ':estado' => $estado,
            ':complemento' => $complemento,
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