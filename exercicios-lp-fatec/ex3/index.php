<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
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
            <a class="nav-link disabled" aria-disabled="true">Exercício 3</a>
        </li>
    </ul>

    <div class="d-flex flex-column align-items-center pt-5">
        <h2>Exercício 3: Cálculo de média</h2>
        <form class="row g-3 mt-4" method="post" action="index.php">
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Nota 1</label>
                <input type="number" class="form-control" name="nota1" id="nota1">
            </div>
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Nota 2</label>
                <input type="number" class="form-control" name="nota2" id="nota2">
            </div>
            <div class="col-12 d-flex justify-content-center">
                <button type="submit" class="btn btn-primary" value="Calcular">Calcular</button>
            </div>
        </form>
    </div>


    <?php

        $nota1 = $_POST['nota1'];
        $nota2 = $_POST['nota2'];

        if(($nota1 >=0 && $nota1 <=10) && ($nota2 >=0 && $nota2 <=10)) {
            $media = ($nota1 + $nota2) / 2;
            echo "<div class='alert alert-info text-center container mt-5' role='alert'>A média é igual a $media</div>";
        }
        else echo "<div class='alert alert-danger text-center container mt-5' role='alert'>Nota inválida (deve ser de 0 a 10).</div>";

    ?>
</body>
</html>