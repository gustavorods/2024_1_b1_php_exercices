<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Resultado</title>
</head>
<body>

<?php
    $numero = $_POST["numero"];

    // Verifica se o número é par ou ímpar
    if ($numero % 2 == 0) {
        echo "<h2>Resultado</h2>";
        echo "<p>O número $numero é par.</p>";
    } else {
        echo "<h2>Resultado</h2>";
        echo "<p>O número $numero é ímpar.</p>";
    }
?>

</body>
</html>
