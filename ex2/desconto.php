<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desconto</title>
</head>
<body>
    <?php
    $ValorProduto = $_POST["numValorProduto"];
    $Desconto = $_POST["numDesconto"];
    $ValorFinal = 0;

    $ValorFinal = $ValorProduto - ($ValorProduto * $Desconto / 100);

    echo "Valor do produto normal: R$" . $ValorProduto . "<br/>";
    echo "Valor do produto com deconto: R$" . $ValorFinal; 
    ?>
</body>
</html>