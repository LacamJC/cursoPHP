<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de salario minimo</title>
    <style>
        body
        {
            font-size: 1.4em;
        }
    </style>
</head>
<body>
    <pre>
        <?php
            $salario_usuario = doubleval($_GET["salario"] ?? 0);
            $salario_minimo = 1380.00;

            $salario_resto = $salario_usuario % $salario_minimo; // Resto da divisão do salario do usuario pelo salario minimo
            $salario_vezes = intval($salario_usuario / $salario_minimo); // Quantos salarios minimos tem no salario do usuario

            // var_dump($salario_vezes);
            // var_dump($salario_resto);
            // var_dump($salario_usuario);
            // var_dump($salario_minimo);
        ?>
    </pre>

    <form action="<?=$_SERVER['PHP_SELF']?>" method="GET">
        <label for="salario">Informe seu salário</label>
        <input type="number" name="salario" id="salario" step="0.01">

        <input type="submit" value="calcular">

        <p>Considerando que o salario minimo está para R$:1.380,00</p>
    </form>

    <div class="resultado">
        <p>Quem rece R$:<?=number_format($salario_usuario,2,',','.')?> ganha até <?=$salario_vezes?> sálarios mínimos + R$:<?=number_format($salario_resto,2,',','.')?></p>
    </div>
</body>
</html>