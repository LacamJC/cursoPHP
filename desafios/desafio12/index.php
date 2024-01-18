<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Tempo</title>
</head>
<body>
    <?php 
        
        $segundos = isset($_GET["segundos"]) ? (int)$_GET["segundos"] : 0; 
        $sobras = $segundos;   
    ?>

    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="">Tempo em segundos</label>
        <input type="number" name="segundos" id="">

        <input type="submit" value="Calcular">
    </form>

    <p>
        <?php 
                    $semanas = (int) ($sobras / 604800);
                    $sobras = $sobras % 604800;
            
                    $dias = (int) ($sobras / 86400);
                    $sobras = $sobras % 86400;
            
                    $horas = (int) ($sobras / 3600);
                    $sobras = $sobras % 3600;
            
                    $minutos = (int) ($sobras / 60);
                    $sobras = $sobras % 60;
            

            // echo "<br>Segundos : $segundos";
            echo "<br>Semanas: $semanas";
            echo "<br>Dias : $dias";
            echo "<br>Horas : $horas";
            echo "<br>Minutos : $minutos";

        ?>
    </p>
</body>
</html>