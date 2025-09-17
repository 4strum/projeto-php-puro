<?php

//verifica se o usuario está logado
session_start();
function verificaLogin()
{
    if (!isset($_SESSION["user_id"])) {
        $_SESSION['msg'] = "Você precisa estar logado para acessar essa página.";
        header("Location: ../public/pages/login.php");
        exit;
    }
}
