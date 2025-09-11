<?php

session_start();
require_once 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $email = trim($_POST["email"]);
    $senha = $_POST["senha"];

    $query = $pdo->prepare("SELECT * FROM users WHERE email = ?");
    $query->execute([$email]);
    $user = $query->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($senha, $user["senha"])) {
        //login ok
        $_SESSION['msg'] = "Login feito com sucesso";
        $_SESSION["user_id"] = $user["id"];
        $_SESSION["user_nome"] = $user["nome"];
        header("Location: ../public/pages/index.php");
        exit;
    }else{
        $_SESSION['erro'] = "Email ou senha inválidos.";
        header("Location: ../public/pages/login.php");
        exit;
    }
}
