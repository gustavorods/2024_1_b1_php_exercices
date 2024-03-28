<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Números Ímpares em Ordem Decrescente</title>
</head>
<body>

<?php
    $numero1 = $_POST["numero1"];
    $numero2 = $_POST["numero2"];

    // Determina o maior e o menor número
    $maior_numero = max($numero1, $numero2);
    $menor_numero = min($numero1, $numero2);

    // Exibe os números ímpares em ordem decrescente
    echo "<h2>Números Ímpares em Ordem Decrescente</h2>";
    echo "<p>Entre $menor_numero e $maior_numero:</p>";
    echo "<ul>";
    for ($i = $maior_numero; $i >= $menor_numero; $i--) {
        if ($i % 2 != 0) {
            echo "<li>$i</li>";
        }
    }
    echo "</ul>";
?>

</body>
</html>
