<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
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
            <a class="nav-link disabled" aria-disabled="true">Exercício 1</a>
        </li>
    </ul>

    <div class="d-flex flex-column align-items-center pt-5">
        <h2>Exercício 1: Comparação de valores</h2>
        <form class="row g-3 mt-4" method="post" action="index.php">
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Valor A</label>
                <input type="number" class="form-control" name="valueA" id="valueA">
            </div>
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Valor C</label>
                <input type="number" class="form-control" name="valueC" id="valueC">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Valor B</label>
                <input type="number" class="form-control" name="valueB" id="valueB">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Valor D</label>
                <input type="number" class="form-control" name="valueD" id="valueD">
            </div>
            <div class="col-12 d-flex justify-content-center">
                <button type="submit" class="btn btn-primary" value="Calcular">Calcular</button>
            </div>
        </form>
    </div>


    <?php

        $valueA = $_POST['valueA'];
        $valueB = $_POST['valueB'];
        $valueC = $_POST['valueC'];
        $valueD = $_POST['valueD'];

        $soma = $valueA + $valueC;
        $multiplicacao = $valueB * $valueD;

        if($soma == $multiplicacao) echo "<div class='alert alert-info text-center container mt-5' role='alert'>$valueA + $valueC = $valueB x $valueD</div>";
        else if($soma > $multiplicacao) echo "<div class='alert alert-info text-center container mt-5' role='alert'>$valueA + $valueC > $valueB x $valueD</div>";
        else echo "<div class='alert alert-info text-center container mt-5' role='alert'>$valueA + $valueC < $valueB x $valueD</div>";

    ?>
</body>
</html>