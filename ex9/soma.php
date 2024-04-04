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
    $maiorNumero = 0;
    $menorNumero = 0;

    // Fazendo a verificação de maior número
    if($inicio > $fim) {
        $maiorNumero = $inicio;
        $menorNumero = $fim;
    } else {
        $maiorNumero = $fim;
        $menorNumero = $inicio;
    }

    for ($i = $menorNumero; $i <= $maiorNumero; $i++) {
        if ($i % 2 != 0) {
            $soma_impares += $i;
        }
    }

    echo "<h2>Resultado da Soma dos Ímpares</h2>";
    echo "<p>A soma dos números ímpares no intervalo de $inicio a $fim é: $soma_impares</p>";
?>

</body>
</html>
