<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $valor1 = $_POST['valorA'];
    $valor2 = $_POST['valorB'];

    $reserva = $valor1;
    $valor1 = $valor2;
    $valor2 = $reserva;

    echo "<h2>Sem trocar: </h2>";
    echo "<br/>";
    echo "ValorA = " . $reserva . " / ValorB = " . $valor1;
    echo "<br/>";
 
    echo "<h2>Com troca: </h2>";
    echo "<br/>";
    echo "ValorA = " . $valor1 . " / ValorB = " . $reserva; 
    ?>
</body>
</html>