<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Resultado da Calculadora</title>
</head>
<body>

<?php
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $num3 = $_POST["num3"];

    $soma_quadrados = $num1*$num1 + $num2*$num2 + $num3*$num3;

    echo "<h2>Resultado da Calculadora</h2>";
    echo "<p>A soma dos quadrados dos números $num1, $num2 e $num3 é: $soma_quadrados</p>";
?>

</body>
</html>
