<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Resultado do Cálculo</title>
</head>
<body>

<?php
    $nota1 = $_POST["nota1"];
    $nota2 = $_POST["nota2"];
    $nota3 = $_POST["nota3"];
    $nota4 = $_POST["nota4"];

    $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

    if ($media >= 6) {
        $descricao = "Aprovado";
    } elseif ($media < 3) {
        $descricao = "Retido";
    } else {
        $descricao = "Exame";
    }

    echo "<h2>Resultado do Cálculo</h2>";
    echo "<p>A média aritmética é: $media</p>";
    echo "<p>Descrição: $descricao</p>";
?>

</body>
</html>
