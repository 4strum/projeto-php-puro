<?php
$title = "Login";
ob_start(); // começa a capturar o conteúdo
?>

<?php
session_start();
if (isset($_SESSION['msg'])) {
    echo "<p style='color: green;'>" . $_SESSION['msg'] . "</p>";
    unset($_SESSION['msg']); // limpa a mensagem para não aparecer de novo

}
?>

<H1>Tela para logar no sistema</H1>

<form method="POST" action="../../src/processa_login.php">
    <label>Email:</label>
    <input type="email" name="email" required>

    <label>Senha:</label>
    <input type="password" name="senha" required>

    <button type="submit">Entrar</button>
</form>



<?php
$content = ob_get_clean(); // guarda o conteúdo na variável
include "layout.php"; // inclui o layout com título e conteúdo
