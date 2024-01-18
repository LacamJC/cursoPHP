<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anatomia da divisão</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>

    <?php 
        $dividendo = $_GET["dividendo"] ?? 1;
        $divisor = $_GET["divisor"] ?? 1;

        $resultado = $dividendo / $divisor;
        $resto = $dividendo % $divisor
    ?>

    <form action="<?=$_SERVER['PHP_SELF']?>" method="GET" style="width:300px; margin:150px auto;">
        <!-- <label for="dividendo">Dividendo</label>
        <input type="number" name="dividendo" id="dividendo">

        <label for="divisor">Divisor</label>
        <input type="number" name="divisor" id="divisor"> -->

        <input type="number" name="dividendo" id="" style="width: 50px;"> dividido por <input type="number" name="divisor" id="" style="width: 50px;">

        <input type="submit" value="Calcular">
    </form>


    <!-- <h2>Resultado da divisão</h2>
    <h3>Dividendo: <?=$dividendo?></h3>
    <h3>Divisor: <?=$divisor?></h3>
    <h3>Resultado: <?=$resultado?></h3>
    <h3>Resto da divisao: <?=$resto?></h3> -->

    <h1 class="text-center mb-3">Estrutura da divisão</h1>
    <div class="calculo row m-auto" style="height: 200px;width: 200px;" >
        <div class="dividendo  col-6" style=" display:flex;justify-content:center;align-items:center; font-size:1.5em;" ><?=$dividendo?></div>
        <div class="divisor  col-6" style=" display:flex;justify-content:center;align-items:center; font-size:1.5em; border-left:3px solid black" ><?=$divisor?></div>
        <div class="resto  col-6" style=" display:flex;justify-content:center;align-items:center; font-size:1.5em;" ><?=$resto?></div>
        <div class="resultado  col-6" style=" display:flex;justify-content:center;align-items:center; font-size:1.5em; border-left:3px solid black;border-top:3px solid black;" ><?=number_format($resultado,2,',','.')?></div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>