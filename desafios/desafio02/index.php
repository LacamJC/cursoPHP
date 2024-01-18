<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de número aleatorio</title>
</head>
<body>
    <?php 
        $numero = rand(0, 100);
        // echo $numero;
    ?>

    <form action="index.php" method="get">
        <h1>Clique no botao para gerar um valor aleatorio</h1>
        <p>Valor aleatorio entre 0 e 100</p>
        <h2>Valor gerado : <?=$numero?></h2>

        <input type="submit" value="Gerar">
    </form>
</body>
</html>