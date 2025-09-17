<?php
require_once 'conexao.php'; // Inclui o arquivo de conexão

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = trim($_POST["nome"]);
    $email = trim($_POST["email"]);
    $senha = $_POST["senha"];

    // Validações básicas
    if (empty($nome) || empty($email) || empty($senha)) {
        die("Preencha todos os campos.");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Email inválido.");
    }

    // Gerar hash da senha
    $hashed_password = password_hash($senha, PASSWORD_DEFAULT);

    // Usar parâmetros para segurança
    $query = $pdo->prepare("INSERT INTO users (nome, email, senha) VALUES (?, ?, ?)");
    $ok = $query->execute([$nome, $email, $hashed_password]);

    if ($ok) {
        $_SESSION['msg'] = "Cadastro realizado com sucesso!";
        header("Location: ../public/pages/login.php");
        exit;
    } else {
        echo "Erro ao cadastrar.";
    }
}
