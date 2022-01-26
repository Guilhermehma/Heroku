<?php



?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Site Heroku</title>
</head>
<body id="body1">
        <div class="container">
            <div class="field">
                <input type="text" name="nome" id="nome" placeholder="Escreva seu nome">
                <label for="nome">Nome:</label>
            </div>
    
            <div class="field">
                <input type="email" name="email" id="email" placeholder="Escreva seu email">
                <label for="email">Email:</label>
            </div>
    
            <div class="field">
                <input type="text" name="cpfOuCnpj" id="cpfOuCnpj" placeholder="Escreva seu CPF ou CNPJ">
                <label for="cpfOuCnpj">CPF:</label>
            </div>
    
            <div class="field2">
                <label for="genero">Gênero:</label>
                <br>
                <br>
                <select name="genero" id="genero">
                    <option value="MASCULINO">Masculino</option>
                    <option value="FEMININO">Feminino</option>
                </select>
            </div>
    
            <div class="center">
                <a href="http://127.0.0.1:5500/heroku/page.php" target="_blank"><button class="button2">Entrar</button></a>
            </div>
        </div>
    </form>
</body>
</html>