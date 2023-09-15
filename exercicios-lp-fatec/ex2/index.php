<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
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
            <a class="nav-link disabled" aria-disabled="true">Exercício 2</a>
        </li>
    </ul>

    <div class="d-flex flex-column align-items-center pt-5">
        <h2>Exercício 2: Reajuste salarial</h2>
        <form class="row g-3 mt-4" method="post" action="index.php">
            <div class="col-md-12">
                <label for="inputEmail4" class="form-label">Informe o salário bruto</label>
                <input type="number" class="form-control" name="salario" id="salario">
            </div>
            <div class="col-12 d-flex justify-content-center">
                <button type="submit" class="btn btn-primary" value="Calcular">Calcular</button>
            </div>
        </form>
    </div>


    <?php

        $salario = $_POST['salario'];

        if($salario <= 300) {
            $salario = $salario + $salario * 0.5;
            echo "<div class='alert alert-info text-center container mt-5' role='alert'>O salário com reajuste é = $salario</div>";
        }
        else {
            $salario = $salario + $salario * 0.3;
            echo "<div class='alert alert-info text-center container mt-5' role='alert'>O salário com reajuste é = $salario</div>";
        }

    ?>
</body>
</html>