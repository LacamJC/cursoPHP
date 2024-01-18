<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sandbox PHP</title>
</head>
<body>
    <?php 
        $nome = "João";
        const ESTADO = "São Paulo";
        $dia = date('d');
        $mes = date('m');
        $ano = date('Y');
    ?>

    <p><?php echo"Olá $nome, vejo que voce mora em " . ESTADO . " no dia $dia do $mes do ano de $ano"?></p>
</body>
</html>