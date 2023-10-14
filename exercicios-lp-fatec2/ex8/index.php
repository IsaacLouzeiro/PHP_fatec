<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 8</title>
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
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="..">Início</a>
        </li>
        <li class="nav-item">
            <span class="nav-link">/</span>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Exercício 8</a>
        </li>
    </ul>

    <div class="d-flex flex-column align-items-center pt-5">
        <h2>Exercício 8: Imprimir intervalo de números</h2>
        <form class="row g-3 mt-4" method="post" action="">
            <div class="col-md-6">
                <label for="valorInicial" class="form-label">Informe o valor inicial</label>
                <input type="number" class="form-control" name="valorInicial" id="valorInicial">
            </div>
            <div class="col-md-6">
                <label for="valorFinal" class="form-label">Informe o valor final</label>
                <input type="number" class="form-control" name="valorFinal" id="valorFinal">
            </div>
            <div class="col-12 d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">Imprimir</button>
            </div>
        </form>
    </div>

    <div class="text-center mt-5 d-flex flex-wrap justify-content-center">
        <?php
          $valorInicial = intval($_POST['valorInicial']);
          $valorFinal = intval($_POST['valorFinal']);

          if ($valorInicial < $valorFinal) {
              for ($i = $valorInicial; $i <= $valorFinal; $i++) {
                  echo "<p class='alert alert-info text-center d-inline mx-1' role='alert'>$i</p>";
              }
          } else {
              for ($i = $valorInicial; $i >= $valorFinal; $i--) {
                  echo "<p class='alert alert-info text-center d-inline mx-1' role='alert'>$i</p>";
              }
          }
        ?>
    </div>
</body>
</html>
