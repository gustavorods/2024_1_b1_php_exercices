<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<body>
    <?php
    $valor = $_POST["numValor"];

    for($i; $i < 10; $i++) {
        $resultado = $valor * $i;
        echo "$valor * $i = " . $resultado;
        echo "<br/>";
    }
    ?>
</body>
</html>