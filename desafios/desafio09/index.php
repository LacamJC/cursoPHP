<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media aritmetica simples e ponderada</title>
</head>
<body>
    <?php 
        $valor1 = $_GET["valor1"];
        $valor2 = $_GET["valor2"];

    
        $peso_valor1 = $_GET["peso_valor1"] ;
        $peso_valor2 = $_GET["peso_valor2"];
    

        $media_simples = ($valor1 + $valor2) / 2; // valor1 + valo2 / soma dos valores 
        $media_ponderada = (($valor1 * $peso_valor1) + ($valor2 * $peso_valor2)) / ($peso_valor1 + $peso_valor2); // (valor1 * peso1) + (valor2 * peso2) / peso1 + peso2
    
    ?>

    <form action="<?=$_SERVER['PHP_SELF']?>" method="GET">
        <label for="valor1">Primeiro valor</label>
        <input type="number" name="valor1" id="valor1">

        <label for="peso_valor1">Peso valor 1</label>
        <input type="number" name="peso_valor1" id="peso_valor1">


        <label for="valor2">Segundo valor</label>
        <input type="number" name="valor2" id="valor2">

        <label for="peso_valor2">Peso valor 2</label>
        <input type="number" name="peso_valor2" id="peso_valor2">

        <input type="submit" value="Calcular">
    </form> 

    <p>
        <?php 
            echo"Média Aritmética Simples: " . number_format($media_simples,2,',','.');
            echo"<br>Média Aritmética Simples Ponderada:" . number_format($media_ponderada,2,',','.');
        ?>
    </p>
</body>
</html>