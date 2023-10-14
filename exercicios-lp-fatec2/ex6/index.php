<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 6</title>
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
            <a class="nav-link disabled" aria-disabled="true">Exercício 6</a>
        </li>
    </ul>

    <div class="d-flex flex-column align-items-center pt-5">
        <h2>Exercício 6: Números em Ordem Decrescente</h2>
        <form class="row g-3 mt-4" method="post" action="">
            <div class="col-md-6">
                Valor inicial: 500
            </div>
            <div class="col-md-6">
                Valor final: 10
            </div>
        </form>
    </div>

    <div class="text-center mt-5 d-flex flex-wrap justify-content-center">
        <?php
            for ($i = 500; $i >= 10; $i--) {
                echo "<p class='alert alert-primary text-center d-inline mx-1' role='alert'>$i</p>";
            }
        ?>
    </div>
</body>
</html>
