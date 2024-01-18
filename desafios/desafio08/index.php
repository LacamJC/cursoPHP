<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raiz quadrada e raiz cubica</title>
</head>
<body>
    <?php 
        $n = $_GET["n"] ?? 0;

        $raiz_quadrada = sqrt($n);
        $raiz_cubica = $n ** (1/3);

        // var_dump($raiz_quadrada);
        // var_dump($raiz_cubica);
    ?>

    <form action="<?=$_SERVER['PHP_SELF']?>" method="GET">
        <label for="n">Insira um valor</label>
        <input type="number" name="n" id="n">

        <input type="submit" value="calcular">
    </form>

    <div class="resultado">
        <p>A raiz quadrada de <?=$n?> é igual: <?=number_format($raiz_quadrada,3,',','.')?></p>
        <p>A raiz cúbica de <?=$n?> é igual: <?=number_format($raiz_cubica,3,',','.')?></p>
    </div>
</body>
</html>