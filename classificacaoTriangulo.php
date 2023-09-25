<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classificação de Triângulos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        * { padding: 0; margin: 0; box-sizing: border-box; }

        html, body {
            width: 100vw;
            height: 100vh;
            text-align: center;
        }

        img {
          width: 250px;
        }
    </style>
</head>
<body>
    <div class="d-flex flex-column align-items-center pt-5 text-start">
        <h2>Classificação de Triângulos</h2>
        <form class="row g-3 mt-4" method="post" action="classificacaoTriangulo.php">
            <div class="col-md-12">
                <label for="lado1" class="form-label">Lado 1: </label>
                <input type="number" class="form-control" name="lado1" id="lado1">
            </div>
            <div class="col-md-12">
                <label for="lado2" class="form-label">Lado 2: </label>
                <input type="number" class="form-control" name="lado2" id="lado2">
            </div>
            <div class="col-md-12">
                <label for="lado3" class="form-label">Lado 3: </label>
                <input type="number" class="form-control" name="lado3" id="lado3">
            </div>
            <div class="col-12 d-flex justify-content-center">
                <button type="submit" class="btn btn-primary" value="Calcular">Calcular</button>
            </div>
        </form>
    </div>

    <?php
      $lado1 = $_POST["lado1"];
      $lado2 = $_POST["lado2"];
      $lado3 = $_POST["lado3"];

      if ($lado1 == $lado2 && $lado2 == $lado3) {
          echo "<div class='alert alert-info text-center container mt-5' role='alert'> Este é um triângulo equilátero.</div>";
          echo "<img src='triangulo-equilatero.webp' alt='Triângulo Equilátero'>";
      } elseif ($lado1 == $lado2 || $lado2 == $lado3 || $lado1 == $lado3) {
          echo "<div class='alert alert-info text-center container mt-5' role='alert'> Este é um triângulo isósceles.</div>";
          echo "<img src='triangulo-isosceles.webp' alt='Triângulo Isósceles'>";
      } else {
          echo "<div class='alert alert-info text-center container mt-5' role='alert'> Este é um triângulo escaleno.</div>";
          echo "<img src='triangulo-escaleno.webp' alt='Triângulo Escaleno'>";
      }
    ?>

</body>
</html>