<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ótica Carol - Contato</title>
    <link rel="stylesheet" href="style.css">
    <style>
        header h1 {
            color: white;
            font-size: 2rem;
        }
        header h1 .destaque {
            color: yellow;
        }

        .contato-section {
            background-color: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            max-width: 700px;
            margin: 40px auto;
            text-align: center;
        }

        .contato-opcao {
            margin: 20px 0;
        }

        .contato-opcao h3 {
            color: var(--cor-primaria);
            margin-bottom: 5px;
        }

        .contato-opcao p {
            margin: 0;
            color: var(--cor-texto-suave);
            font-size: 1.1em;
        }

        .btn-contato {
            display: inline-block;
            background-color: var(--cor-secundaria);
            color: var(--cor-primaria);
            font-weight: bold;
            padding: 12px 20px;
            border-radius: 30px;
            text-decoration: none;
            transition: background-color 0.3s, transform 0.2s;
            margin-top: 10px;
        }

        .btn-contato:hover {
            background-color: white;
            color: var(--cor-secundaria);
            transform: translateY(-2px);
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header>
        <div class="container">
            <h1><img src="logo.png"></h1>
            <nav>
                <a href="index.php">Início</a>
                <a href="catalogo.php">Catálogo</a>
            </nav>
        </div>
    </header>

    <!-- Banner -->
    <section class="banner-destaque container">
        <h2>Fale Conosco</h2>
        <p>Escolha a melhor forma de entrar em contato com a nossa equipe.</p>
    </section>

    <!-- Opções de Contato -->
    <main>
        <div class="contato-section">
            <div class="contato-opcao">
                <h3>📱 WhatsApp</h3>
                <p>(81) 9494-5322</p>
                <a href="https://wa.me/558194945322" class="btn-contato" target="_blank">
                    Iniciar Conversa
                </a>
            </div>

            <div class="contato-opcao">
                <h3>📸 Instagram</h3>
                <p>@oticascarolsuper</p>
                <a href="https://www.instagram.com/oticascarolsuper?igsh=MXh0cXplYzhreXpiNw==" class="btn-contato">Ir para o Instagram</a>
            </div>
        </div>
    </main>

    <!-- Rodapé -->
    <footer>
        <div class="container">
            <p>&copy; 2025 Ótica Carol. | Entre em Contato: (81) 9494-5322</p>
        </div>
    </footer>

</body>
</html>