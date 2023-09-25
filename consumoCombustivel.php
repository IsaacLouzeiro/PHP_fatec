<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Consumo de Combustível</title>
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
        <h2>Calculadora de Consumo de Combustível</h2>
        <form class="row g-3 mt-4" method="post" action="consumoCombustivel.php">
            <div class="col-md-12">
                <label for="distanciaPercorrida" class="form-label">Distância Percorrida (km): </label>
                <input type="number" class="form-control" name="distanciaPercorrida" id="distanciaPercorrida">
            </div>
            <div class="col-md-12">
                <label for="quantidadeCombustivel" class="form-label">Quantidade de Combustível Consumida (litros): </label>
                <input type="number" class="form-control" name="quantidadeCombustivel" id="quantidadeCombustivel">
            </div>
            <div class="col-12 d-flex justify-content-center">
                <button type="submit" class="btn btn-primary" value="Calcular">Calcular</button>
            </div>
        </form>
    </div>

    <?php
      $distanciaPercorrida = $_POST["distanciaPercorrida"];
      $quantidadeCombustivel = $_POST["quantidadeCombustivel"];

      $consumoMedio = $distanciaPercorrida / $quantidadeCombustivel;

      echo "<div class='alert alert-info text-center container mt-5' role='alert'> O consumo médio de combustível é: " . number_format($consumoMedio, 2) . " km/l</div>";
    ?>

</body>
</html>