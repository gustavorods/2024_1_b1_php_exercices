<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Resultado da Soma dos Ímpares</title>
</head>
<body>

<?php
    $inicio = $_POST["inicio"];
    $fim = $_POST["fim"];

    $soma_impares = 0;

    for ($i = $inicio; $i <= $fim; $i++) {
        if ($i % 2 != 0) {
            $soma_impares += $i;
        }
    }

    echo "<h2>Resultado da Soma dos Ímpares</h2>";
    echo "<p>A soma dos números ímpares no intervalo de $inicio a $fim é: $soma_impares</p>";
?>

</body>
</html>
