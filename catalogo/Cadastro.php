<?php
    if(isset($_POST['submit'])) {    
        include_once('config.php');
        
        $codigo = $_POST['codigo'];
        $modelo = $_POST['modelo'];
        $material = $_POST['material'];
        $genero = $_POST['genero'];
        $formato = $_POST['formato'];
        $preco = $_POST['preco'];
        $imagem = $_POST['imagem'];
        $descricao = $_POST['descricao'];

        $result = mysqli_query($conexao, "INSERT INTO oculos(codigo,modelo,material,genero,formato,preco,imagem,descricao) 
        VALUES ('$codigo','$modelo','$material','$genero','$formato','$preco','$imagem','$descricao')");

        if($result){
            header("Location: cadastro.php?success=1");
            exit;
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Óculos - Ótica Carol</title>
    <link rel="stylesheet" href="style.css">
</head>

<body style="background-color: #002E6D">
    
    <main class="container">
        <section class="destaque">
            <h2>Cadastro de armação</h2>
            <p>Selecione as opções para registrar a nova armação</p>
            <form id="form-cadastro" action="cadastro.php" method="POST">
                <div class="form-grupo">
                    <label for="codigo">Código do Produto:</label>
                    <input type="text" id="codigo" name="codigo" placeholder="Ex: MOD-123" required>
                </div>

                <div class="form-grupo">
                    <label for="modelo">Nome / Modelo:</label>
                    <input type="text" id="modelo" name="modelo" placeholder="Ex: Modelo Alpha" required>
                </div>

                <div class="form-grupo">
                    <label for="material">Material:</label>
                    <input type="text" id="material" name="material" placeholder="Ex: Acetato" required>
                    </select>
                </div>

                <div class="form-grupo">
                    <label for="genero">Gênero:</label>
                    <select id="genero" name="genero" required>
                        <option value="">Selecione</option>
                        <option value="masculino">Masculino</option>
                        <option value="feminino">Feminino</option>
                        <option value="infantil">Infantil</option>
                        <option value="unissex">Unissex</option>
                    </select>
                </div>

                <div class="form-grupo">
                    <label for="formato">Formato:</label>
                    <select id="formato" name="formato" required>
                        <option value="">Selecione</option>
                        <option value="quadrado">Quadrado</option>
                        <option value="redondo">Redondo</option>
                        <option value="pilot">Piloto</option>
                        <option value="retangular">Retangular</option>
                        <option value="gatinho">Gatinho</option>
                        <option value="Irregular">Irregular</option>
                    </select>
                </div>

                <div class="form-grupo">
                    <label for="preco">Preço (R$):</label>
                    <input type="text" id="preco" name="preco" placeholder="Ex: 299.90">
                </div>

                <div class="form-grupo">
                    <label for="imagem">Imagem (URL):</label>
                    <input type="text" id="imagem" name="imagem" placeholder="URL da imagem">
                </div>

                <div class="form-grupo">
                    <label for="descricao">Descrição:</label>
                    <textarea type="text" id="descricao" name="descricao" placeholder="Breve descrição do produto..."></textarea>
                </div>

                <input type="submit" name="submit" id="submit" class="btn-cta" value="Cadastrar Produto">
            </form>

            <?php if(isset($_GET['success'])): ?>
            <p style="margin-top:20px; color:green; font-weight:bold;">
                ✅ Produto cadastrado com sucesso!
            </p>
            <?php endif; ?>
        </section>
    </main>

    <main class="container">
        <section>
 
        </section>
    </main>

    <!-- Rodapé -->
    <footer>
        <div class="container">
            <p>&copy; 2025 Ótica Carol. | Entre em Contato: (81) 9494-5322</p>
        </div>
    </footer>

</body>
</html>