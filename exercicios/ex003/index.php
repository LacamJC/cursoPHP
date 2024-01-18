<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testando</title>
</head>
<body>
    <?php 
        $nome = (string)"João";
        $idade = (integer) 25;
        $peso = (double) 71.25;
        $bool = (bool) false;
        var_dump($nome);
        var_dump($idade);
        var_dump($peso);
        var_dump($bool);
    ?>

    <h1>Olá</h1>
    <p>
        <?php echo"Seja bem bindo $nome, vejo que você tem $idade de idade"?>
    </p>

    <label for="nome">Nome : <input type="text" name="nome" value="<?=$nome?>" id="nome" readonly></label>
    <label for="idade">idade : <input type="text" name="idade" id="idade" value="<?=$idade?>"></label>
    <label for="peso">Peso : <input type="text" name="peso" id="peso" value="<?=$peso?>"></label>
    <label for="bool">Bool : <input type="text" name="bool" id="bool" value="<?=$bool?>"></label>
</body>
</html>