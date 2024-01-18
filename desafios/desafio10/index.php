<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Máquina do Tempo</title>
    <style>
        body
        {
            font-size: 1.4em;
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>
<body>
    <?php 
        $ano_atual = $_GET["ano_atual"] ?? intval(date('Y'));
        $ano_nascimento = $_GET["ano_nascimento"] ?? 2000;

        $idade = $ano_atual - $ano_nascimento;
        // var_dump($ano_atual);
        // echo"$ano_atual\n";
        // echo"$ano_nascimento\n";
        // echo"$idade";

    ?>

    <form action="<?=$_SERVER['PHP_SELF']?>">
        <p>Insira sua data de nascimento levando em consideração que estamos em <strong><?=date('Y')?></strong></p>
        <br>
        <label for="nascimento">Em que ano você nasceu</label>
        <input type="number" name="ano_nascimento" id="nascimento" max="<?=$ano_atual?>" value="<?=$ano_nascimento?>">
        <br>
        <label for="idade">Qual idade você vai ter em</label>
        <input type="number" name="ano_atual" id="" value="<?=$ano_atual?>">

        <input type="submit" value="Calcular">
    </form>

    <p>
        No ano de <?=$ano_atual?> você vai ter <strong><?=$idade?></strong> anos de idade
    </p>
</body>
</html>