<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <?php 
        $valor = $_GET["reais"] ?? 000;
        $reais = doubleval( number_format($valor, 2, ',', '.'));

        $dolar = 4.94;

        $total = $reais / $dolar ;
        $total = number_format($total, 2,'.',',');
    ?>

    <h1><?php echo "Com R\$:$reais você consegue U\$:$total em dollar com a cotação em R\$:$dolar por U\$:01.00"?></h1>
</body>
</html>