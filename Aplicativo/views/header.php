<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LearnFlow</title>
    <link rel="stylesheet" href="assets/css/styles.css">

</head>
<body>
    <nav class="navbar">
        <div class="container nav-content">
            <h1 class="nav-title">LearnFlow</h1>
            <div>
                <a href="index.php?page=home" class="nav-link">Home</a>
                <?php if (isset($_SESSION['user'])): ?>
                    <a href="index.php?page=perfil" class="nav-link">Meu Perfil</a>
                    <a href="index.php?page=logout" class="btn-logout">Sair</a>
                <?php else: ?>
                    <a href="index.php?page=login" class="btn-primary" style="display: inline-block; width: auto;">Login</a>
                <?php endif; ?>
            </div>
        </div>
    </nav>
    <div class="container">