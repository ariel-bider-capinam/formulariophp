<?php
  $nome = $_POST['nome'];
$genero = $_POST['genero'];
  $idade = $_POST['idade'];
if ($idade > 25) {
    header("Location: cadastro_permitido.php?nome=$nome&genero=$genero");
} else {
    header("Location: cadastro_nao_permitido.php?nome=$nome&genero=$genero");
}
exit;
?>


