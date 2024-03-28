<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Resultado do Cálculo</title>
</head>
<body>

<?php
    $salario_bruto = $_POST["salario_bruto"];

    $gratificacao = 0.1 * $salario_bruto;

    $imposto_renda = 0.2 * $salario_bruto;

    $salario_liquido = $salario_bruto + $gratificacao - $imposto_renda;

    echo "<h2>Resultado do Cálculo</h2>";
    echo "<p>O salário bruto é: R$ $salario_bruto</p>";
    echo "<p>A gratificação (10% do salário bruto) é: R$ $gratificacao</p>";
    echo "<p>O imposto de renda (20% do salário bruto) é: R$ $imposto_renda</p>";
    echo "<p>O salário líquido é: R$ $salario_liquido</p>";
?>

</body>
</html>
