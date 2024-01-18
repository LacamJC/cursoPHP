<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa eletronico</title>
</head>
<body>
    <?php 
        $sacar = $_GET['sacar'] ?? 0;
        $sobras = $sacar;




    
    ?>

    <form action="<?=$_SERVER['PHP_SELF']?>" method="GET">
            <label for="sacar">Quanto deseja sacar</label>
            <input type="number" name="sacar" id="sacar" step="5">

            <input type="submit" value="Calcular">
    </form>

    <?php 
    
    $notas_100 = intval($sobras/100); // NOTAS DE 100

    $sobras -= $notas_100 * 100;



    $notas_50  =  intval($sobras/50); // NOTAS DE 50

        $sobras -= $notas_50 * 50;


    $notas_10 = intval($sobras/10);

        $sobras -= $notas_10 * 10;

    $notas_5 = intval($sobras/5);

        $sobras -= $notas_5 * 5;



    echo "VALOR INICIAL : $sacar <br>Notas de 100: " . intval($notas_100) . "<br>Notas de 50: " . intval($notas_50) ."<br>Notas de 10: ". intval($notas_10) . "<br>Notas de 5: " . intval($notas_5)
    ?>
</body>
</html>