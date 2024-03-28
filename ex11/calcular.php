<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Resultado da Operação</title>
</head>
<body>

<?php
    $valor1 = $_POST["valor1"];
    $operador = $_POST["operador"];
    $valor2 = $_POST["valor2"];

    switch ($operador) {
        case '+':
            $resultado = $valor1 + $valor2;
            break;
        case '-':
            $resultado = $valor1 - $valor2;
            break;
        case '/':
            // Verifica se o segundo valor é zero para evitar divisão por zero
            if ($valor2 != 0) {
                $resultado = $valor1 / $valor2;
            } else {
                echo "<h2>Erro!</h2>";
                echo "<p>Divisão por zero não é permitida.</p>";
                exit(); // Sai do script PHP para evitar a exibição do resultado inválido
            }
            break;
        case '*':
            $resultado = $valor1 * $valor2;
            break;
        default:
            echo "<h2>Erro!</h2>";
            echo "<p>Operador inválido.</p>";
            exit(); 
    }

    echo "<h2>Resultado da Operação</h2>";
    echo "<p>$valor1 $operador $valor2 = $resultado</p>";
?>

</body>
</html>
