<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Verificação de Cadastro</title>
<style>
body {
    background-color: #f0f0f0; 
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.container {
    background-color: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.titulo {
    color: blue; 
    text-align: center;
}

.pergunta {
    color: blue; 
}
.botao {
    background-color: blue; 
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.botao:hover {
    background-color: darkblue; 
}
</style>
</head>
<body>
<div class="container">
    <h2 class="titulo">Verificação de Cadastro para namorar o ariel</h2>
    <form action="verificar_cadastro.php" method="post">
        <label for="nome" class="pergunta">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>
        
        <label class="pergunta">Gênero:</label><br>
        <input type="radio" id="masculino" name="genero" value="Masculino" required>
        <label for="masculino" class="pergunta">Masculino</label><br>
        
        <input type="radio" id="feminino" name="genero" value="Feminino">
        <label for="feminino" class="pergunta">Feminino</label><br><br>
        
        <label for="idade" class="pergunta">Idade:</label>
        <input type="number" id="idade" name="idade" required><br><br>
        
        <input type="submit" value="Verificar" class="botao">
    </form>
</div>
</body>
</html>

