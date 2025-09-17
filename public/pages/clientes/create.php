<?php
$title = "Inicio";
ob_start(); // começa a capturar o conteúdo
?>





<h1>Cadastro</h1>

<form action="../../../src/cliente_store.php" method="POST">
    <input type="text" name="nome" placeholder="Nome">
    <input type="text" name="email" placeholder="Email">
    <input type="text" name="telefone" placeholder="Telefone">
    <input type="text" name="endereco" placeholder="Endereço">
    <input type="submit" value="Cadastrar">
</form>










<?php
$content = ob_get_clean(); // guarda o conteúdo na variável
include "../layout.php"; // inclui o layout com título e conteúdo
