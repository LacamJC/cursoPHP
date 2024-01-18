<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aumento proporcional em Produto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body
        {
            font-size: 1.3em;
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
  </head>
  <body>
    <?php 
        $valor_inicial = doubleval($_GET["valor"]) ?? 1;
        $aumento = intval($_GET["range"]) ?? 1;

        
        $valor_final = $valor_inicial + ($aumento/100) * $valor_inicial;

        // var_dump($valor_inicial);
        // var_dump($aumento);
    ?>

    <div class="w-50 m-auto mt-5 mb-5">
        <h2>Aumento em % do valor inicial do Produto</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="GET">
            <div class="mb-3">
                <label for="valor" class="form-label">Valor do produto (R$)</label>
                <input type="number" class="form-control" id="valor" step="0.01" name="valor" value="<?=$valor_inicial?>">
            </div>
            <div class="mb-3">
                <label for="customRange1" class="form-label">O produto ira aumentar <span id="range"></span>%</label>
                <input type="range" class="form-range" id="customRange1" name="range">
                
            </div>

            <button type="submit" class="btn btn-primary">Calcular</button>
        </form>
    </div>

    <p class="w-50 m-auto">
        O produto que originalmente custava <strong>R$: <?=number_format($valor_inicial,2,',','.')?></strong> com um aumento de <strong><?=$aumento?>%</strong> ficara com o valor final de <strong>R$: <?=number_format($valor_final,2,',','.')?></strong>
    </p>

    <script lang="javascript">
        const range = document.getElementById('customRange1');
        document.getElementById('range').innerHTML = range.value;
        range.addEventListener('input', function(){
            console.log(range.value);
            document.getElementById('range').innerHTML = range.value
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>