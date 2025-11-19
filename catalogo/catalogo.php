<?php
    include_once("config.php");

    $busca = isset($_GET['busca']) ? $_GET['busca'] : "";

    if ($busca !== "") {
    $sql = "SELECT * FROM oculos 
            WHERE codigo LIKE '%$busca%'
            ORDER BY codigo ASC";
    } else {
    $sql = "SELECT * FROM oculos ORDER BY codigo ASC";
    }

    $result = $conexao->query($sql);
?>
<!DOCTYPE html> 
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo Completo - Ótica Carol</title>
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
<h2>Catálogo de Armações</h2>

<section class="filtros-busca">
    <form method="GET" action="catalogo.php" class="busca-form">
    <input 
        type="text" 
        name="busca" 
        placeholder="Buscar por código..." 
        value="<?= isset($_GET['busca']) ? $_GET['busca'] : '' ?>"
    >
</form>

</section>

<section class="catalogo-produtos">
    <h2>Novidades em Destaque</h2>

    <div class="produtos-grid">

    <?php while($produto = mysqli_fetch_assoc($result)): ?>

        <div class="produto-card"
             data-material="<?= strtolower($produto['material']) ?>"
             data-genero="<?= strtolower($produto['genero']) ?>"
             data-formato="<?= strtolower($produto['formato']) ?>"
             data-busca="<?= strtolower($produto['codigo'] . ' ' . $produto['modelo']) ?>"
        >
            <img src="<?= $produto['imagem'] ?>" alt="<?= $produto['modelo'] ?>">
            <h3><?= $produto['modelo'] ?></h3>

            <p class="preco">R$ 
                <?= $produto['preco'] !== "" ? number_format($produto['preco'], 2, ',', '.') : "—" ?>
            </p>

            <a href="produto.php?codigo=<?= urlencode($produto['codigo']) ?>" class="btn-detalhes">
                Ver Detalhes
            </a>
        </div>

    <?php endwhile; ?>

    </div>
</section>
</main>

<footer>
    <div class="container">
        <p>&copy; 2025 Ótica Carol. | Entre em Contato: (81) 9494-5322</p>
    </div>
</footer>

</body>
</html>