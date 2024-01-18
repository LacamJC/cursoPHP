<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Tempo</title>
</head>
<body>
    <?php 
        $segundos =  3600 ; // 60  
        
        $minutos = $segundos / 60;
        $horas = $minutos / 60;
        $dias = $horas / 24;
        $semanas = $dias / 7;

        $segundos = intval($segundos);
        $minutos = intval($minutos);        
        $horas = intval($horas);
        $dias = intval($dias);
        $semanas = intval($semanas);        

        echo "$segundos segundos equivalem a $minutos minutos <br>";
        echo "$minutos minutos equivalem a $horas horas <br>";
        echo "$horas horas equivalem a $dias dias <br>";
        echo "$dias dias equivalem a $semanas semanas";
    
    ?>
</body>
</html>