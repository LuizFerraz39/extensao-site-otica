</div>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ótica Carol - Catálogo de Armações</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <div class="container">
            <h1><img src="logo.png"></h1>
            <nav>
                <a href="index.php">Início</a>
                <a href="catalogo.php">Catálogo</a>
            </nav>
        </div>
    </header>

    <main class="container">
        <section class="banner-destaque">
            <h2>Seu Estilo Começa Aqui</h2>
            <p>Armações modernas para todas as idades, do clássico ao despojado.</p>
            <a href="catalogo.php" class="btn-cta">Ver Catálogo Completo</a>
        </section>

        <section class="vitrine">
            <h2>Novidades em Destaque</h2>
            <?php
            include_once("config.php");

            $sql = "SELECT * FROM oculos ORDER BY data_cadastro DESC LIMIT 3";
            $result = mysqli_query($conexao, $sql);
            ?>

            <div class="produtos-grid">
            <?php while($oculos = mysqli_fetch_assoc($result)): ?>
                <div class="produto-card">
                    <img src="<?php echo $oculos['imagem']; ?>" alt="<?php echo $oculos['modelo']; ?>">
                    <h3><?php echo $oculos['modelo']; ?></h3>
                    <p class="preco">R$ <?php echo $oculos['preco']; ?></p>

                    <a href="produto.php?codigo=<?php echo $oculos['codigo']; ?>" 
                        class="btn-detalhes">Ver Detalhes</a>
                </div>
            <?php endwhile; ?>
        </section>
    </main>

    <footer id="contato">
        <div class="container">
            <p>&copy; 2025 Ótica Carol. | Entre em Contato: (81) 9494-5322</p>
        </div>
    </footer>

</body>
</html>