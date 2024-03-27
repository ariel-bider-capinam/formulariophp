<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cadastro Permitido</title>
</head>
<body>
<?php
$nome = $_GET['nome'];
$genero = $_GET['genero'];
   echo "<h2>Cadastro Permitido</h2>";
echo "<p>Nome: $nome</p>";
echo "<p>Gênero: $genero</p>";
   echo "<p>Você pode se cadastrar te espero no nosso encontro.</p>";
?>
</body>
</html>
