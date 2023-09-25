<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Parcelamento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        * { padding: 0; margin: 0; box-sizing: border-box; }

        html, body {
            width: 100vw;
            height: 100vh;
        }
    </style>
</head>
<body>
    <div class="d-flex flex-column align-items-center pt-5">
        <h2>Calculadora de Parcelamento</h2>
        <form class="row g-3 mt-4" method="post" action="parcelaProduto.php">
            <div class="col-md-12">
                <label for="valorProduto" class="form-label">Informe o valor do produto</label>
                <input type="number" class="form-control" name="valorProduto" id="valorProduto">
            </div>
            <div class="col-12 d-flex justify-content-center">
                <button type="submit" class="btn btn-primary" value="Calcular">Calcular</button>
            </div>
        </form>
    </div>


    <?php
      $valorProduto = $_POST["valorProduto"];

      $valorComAcrescimo = $valorProduto * 1.16;

      $valorParcela = $valorComAcrescimo / 10;

      echo "<div class='alert alert-info text-center container mt-5' role='alert'> O valor de cada parcela é: R$" . number_format($valorParcela, 2, ",", ".") . "</div>";
      echo "<div class='alert alert-info text-center container' role='alert'> O valor total da compra é: R$" . number_format($valorComAcrescimo, 2, ",", ".") . "</div>";
    ?> 
</body>
</html>