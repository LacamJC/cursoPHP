<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Retroalimentado</title>
    <style>
        body 
        {
            font-size: 1.5em;
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>
<body>
    <?php 
        $v1 = $_GET["v1"] ?? 0;
        $v2 = $_GET["v2"] ?? 0;

        $soma = $v1 + $v2;
    ?>
    <main>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
            <label for="v1">Valor 1</label>
            <input type="number" name="v1" id="v1" value="<?=$v1?>">


            <label for="v2">Valor 2</label>
            <input type="number" name="v2" id="v2" value="<?=$v2?>">

            <input type="submit" value="Enviar">
        </form>

        <h3>Resultado</h3>
        <p>
            O resultado da soma entre <strong><?=$v1?></strong> e <strong><?=$v2?></strong> é igual a <strong><?=$soma?></strong>      
        </p>
    </main>


</body>
</html>