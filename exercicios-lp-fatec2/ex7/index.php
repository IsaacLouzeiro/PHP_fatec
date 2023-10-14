<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 7</title>
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
            <a class="nav-link disabled" aria-disabled="true">Exercício 7</a>
        </li>
    </ul>

    <div class="d-flex flex-column align-items-center pt-5">
        <h2>Exercício 7: Soma de Números Aleatórios</h2>
        <form class="row g-3 mt-4" method="post" action="">
            <div class="col-md-6">
                Soma inicial: 0
            </div>
            <div class="col-md-6">
                Meta de soma: 1000
            </div>
        </form>
    </div>

    <div class="text-center mt-5 d-flex flex-wrap justify-content-center">
        <?php
            $soma = 0;
            $meta = 1000;

            while ($soma <= $meta) {
                $numero = rand(0, 100);
                $soma += $numero;
                echo "<p class='alert alert-primary text-center d-inline mx-1' role='alert'>Número sorteado: $numero</p>";
                echo "<p class='alert alert-info text-center d-inline mx-1' role='alert'>Soma parcial: $soma</p>";
            }

            echo "<p class='alert alert-success text-center' role='alert'>Soma final ultrapassou 1.000. Encerrando o programa.</p>";
        ?>
    </div>
</body>
</html>
