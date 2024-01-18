<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <?php 
        $valor = $_GET["numero"];
        $antecessor = $valor - 1 ;
        $sucessor = $valor + 1 ;

    ?>

    <h2>
        O valor escolhido foi <strong><?=$valor?></strong> 
        <br>
        Seu antecessor é <strong><?=$antecessor?></strong> 
        <br>
        Seu sucessor é <strong><?=$sucessor?></strong>
    </h2>

    <a href="javascript:history.go(-1)">Voltar</a>
</body>
</html>