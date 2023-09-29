<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4</title>
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
        <h2>Exercício 4: Soma dos valores pares</h2>
        <form class="row g-3 mt-4" method="post" action="">
            <div class="col-md-6">
                Valor inicial: 10
            </div>
            <div class="col-md-6">
                Valor final: <br>500
            </div>
        </form>
    </div>

    <div class="text-center mt-5 d-flex flex-wrap justify-content-center">
        <?php
            $somaValores = 0;
            for($i=10; $i <= 500; $i += 2) {
                $somaValores += $i;
            }

            echo"<p class='alert alert-info text-center d-inline mx-1' role='alert'>A soma dos valores pares de 10 a 500 é igual a $somaValores.</p>";

        ?>
    </div>
</body>
</html>