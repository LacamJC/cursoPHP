<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data e hora em PHP</title>
</head>
<body>
    <h1>Exemplos</h1>
    <p style="font-size: 1.2em;">
        <?php 
            echo"Olá hoje é " . date("d/M/Y");
        ?>

        <?php 
            date_default_timezone_set("America/Sao_Paulo");
            echo"Hora atual " . date("G:i:s"). " SP";
        ?>

        Lembrese que a hora é baseada na Timezone do Servidor e não do Computador
    </p>
</body>
</html>