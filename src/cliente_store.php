<?php


session_start();
require_once "conexao.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];

    try {
        $qry = $pdo->prepare("INSERT INTO clientes (nome, email, telefone, endereco) VALUES (?, ?, ?, ?)");
        $qry->execute([$nome, $email, $telefone, $endereco]);

        $_SESSION['msg'] = "Cliente cadastrado com sucesso!";
        header("Location: ../public/pages/index.php");
        exit();
    } catch (PDOException $e) {
        die("Erro ao cadastrar cliente: " . $e->getMessage());
    }
} else {
    $_SESSION['msg'] = "Método inválido.";
    header("Location: ../public/pages/index.php");
    exit();
}