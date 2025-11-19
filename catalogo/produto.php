<?php
include_once("config.php");

// Verifica se o código foi enviado na URL
if (!isset($_GET['codigo'])) {
    die("Produto não encontrado.");
}

$codigo = $_GET['codigo'];

// Consulta o produto pelo código (PK)
$sql = "SELECT * FROM oculos WHERE codigo = '$codigo' LIMIT 1";
$result = $conexao->query($sql);

if ($result->num_rows == 0) {
    die("Produto não encontrado.");
}

$produto = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $produto['modelo'] ?> - Detalhes</title>
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
    <section class="detalhes-produto">
        <div class="galeria-fotos">
            <img src="<?= $produto['imagem'] ?>" 
                 alt="<?= $produto['modelo'] ?>" 
                 class="foto-principal">
        </div>

        <div class="info-produto">
            <h2><?= $produto['modelo'] ?></h2>

            <p class="codigo">
                Código do Produto: <?= $produto['codigo'] ?>
            </p>

            <p class="descricao">
                <?= $produto['descricao'] !== "" ? $produto['descricao'] : "Sem descrição disponível." ?>
            </p>

            <h3>
                Preço: 
                <span class="preco-grande">
                    R$
                    <?= $produto['preco'] !== "" 
                        ? number_format($produto['preco'], 2, ',', '.') 
                        : "—" ?>
                </span>
            </h3>
            
            <div class="caracteristicas">
                <h4>Características Técnicas:</h4>
                <ul>
                    <li><strong>Material:</strong> <?= $produto['material'] ?></li>
                    <li><strong>Formato:</strong> <?= $produto['formato'] ?></li>
                    <li><strong>Gênero:</strong> <?= $produto['genero'] ?></li>
                </ul>
            </div>
            
            <a href="contato.php" class="btn-cta">
                Solicitar Orçamento / WhatsApp
            </a>
            <p class="aviso-estoque">Consulte disponibilidade na loja.</p>

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