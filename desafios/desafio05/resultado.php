<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <?php 
        $real = $_GET["real"]; 
        // $real = doubleval($real);

        // $real = number_format($real, 3,'.',',');
        // $inteiro = intval($real);
        
        $partes = explode('.', $real);

        $inteiro = $partes[0] ?? 0;
        $fracionario = $partes[1] ?? 0;
        // $fracionari
        var_dump($real);
        var_dump($inteiro);
        var_dump($fracionario);
        // var_dump($inteiro);
        var_dump($partes)
    ?>

    <h2><?php echo "O número $real, tem como parte inteira $inteiro e como parte fracionaria $fracionario"?></h2>

    <a href="javascript:history.go(-1)">Voltar</a>
</body>
</html>