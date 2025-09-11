<?php
$title = "Registrar";
ob_start(); // começa a capturar o conteúdo
?>
    <h1>Tela para se registrar no sistema</h1>

    <form method="POST" action="../../src/processa_register.php">
        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome">
        <label for="email">Email: </label>
        <input type="text" name="email" id="email">
        <label for="senha">Senha: </label>
        <input type="password" name="senha" id="senha">
        <button type="submit">cadastrar</button>

    </form>

    


<?php
$content = ob_get_clean(); // guarda o conteúdo na variável
include "layout.php"; // inclui o layout com título e conteúdo
