<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? "Sistema de Agendamento" ?></title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/script.js" defer></script>
</head>
<body>
    <!-- Navbar -->
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Início</a></li>
                <li><a href="clientes.php">Clientes</a></li>
                <li><a href="agendamentos.php">Agendamentos</a></li>
                <li><a href="logout.php">Sair</a></li>
            </ul>
        </nav>
    </header>

    <!-- Conteúdo da página -->
    <main>
        <?= $content ?? "" ?>
    </main>

    <!-- Rodapé -->
    <footer>
        <p>© <?= date("Y") ?> - Sistema de Agendamento</p>
    </footer>
</body>
</html>
