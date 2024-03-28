<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Resultado</title>
</head>
<body>

<?php
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $num3 = $_POST["num3"];

    // Encontra o maior número
    $maior_numero = $num1;
    if ($num2 > $maior_numero) {
        $maior_numero = $num2;
    }
    if ($num3 > $maior_numero) {
        $maior_numero = $num3;
    }

    // Encontra o menor número
    $menor_numero = $num1;
    if ($num2 < $menor_numero) {
        $menor_numero = $num2;
    }
    if ($num3 < $menor_numero) {
        $menor_numero = $num3;
    }

    echo "<h2>Resultado</h2>";
    echo "<p>O maior número é: $maior_numero</p>";
    echo "<p>O menor número é: $menor_numero</p>";
?>

</body>
</html>
