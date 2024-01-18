<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cad PHP</title>
</head>
<body>
    <h1>Olá seja bem vindo</h1>

    <?php 
        // var_dump($_GET);

        $nome = $_GET["nome"] ?? "Indefinido";
        $sobrenome = $_GET["sobrenome"] ?? "Indefinido";
        $apelido = $_GET["apelido"] ?? "Indefinido";
    ?>

    <p>
        <?php 
            echo "Olá $nome \"$apelido\" $sobrenome"
        ?>
    </p>

    <a href="javascript:history.go(-1)">Voltar para a página anterior</a>
</body>
</html>