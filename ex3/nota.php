<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas</title>
</head>
<body>
    <?php
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $nota3 = $_POST['nota3'];
    $nota4 = $_POST['nota4'];

    $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

    if($media >= 5) {
        echo "Você foi aprovado com media " . $media;
    }
    else {
        echo "Você foi reprovado com media " . $media;
    }
    ?>
</body>
</html>