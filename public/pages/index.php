<?php
$title = "Inicio";
ob_start(); // começa a capturar o conteúdo
?>
    <h1>Bem-vindo ao sistema!</h1>
    <p>Aqui você pode gerenciar seus agendamentos.</p>
<?php
$content = ob_get_clean(); // guarda o conteúdo na variável
include "layout.php"; // inclui o layout com título e conteúdo
