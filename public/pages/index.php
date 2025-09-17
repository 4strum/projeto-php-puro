<?php
$title = "Inicio";
ob_start(); // começa a capturar o conteúdo
?>

<?php
session_start();
if (isset($_SESSION['msg'])) {
    echo "<p style='color: green;'>" . $_SESSION['msg'] . "</p>";
    unset($_SESSION['msg']); // limpa a mensagem para não aparecer de novo
}
?>


<a href="../pages/clientes/create.php">Cadastrar Cliente</a>

<h1>Bem-vindo ao sistema!</h1>
<p>Aqui você pode gerenciar seus agendamentos.</p>

<?php
var_dump($_SESSION);
?>




<?php
$content = ob_get_clean(); // guarda o conteúdo na variável
include "layout.php"; // inclui o layout com título e conteúdo
