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
    <div class="d-flex flex-column align-items-center pt-5">
        <h2>Exercício 1: Imprimir valores</h2>
        <form class="row g-3 mt-4" method="post" action="">
            <div class="col-md-12">
                <label for="inputEmail4" class="form-label">Informe um valor maior que 0</label>
                <input type="number" class="form-control" name="valorFinal" id="valorFinal">
            </div>
            <div class="col-12 d-flex justify-content-center">
                <button type="submit" class="btn btn-primary" value="Imprima">Imprima</button>
            </div>
        </form>
    </div>

    <div class="text-center mt-5 d-flex flex-wrap justify-content-center">
        <?php

            $vf = $_POST['valorFinal'];
            $i = 0;

            while ($i <= $vf) {
                echo"<p class='alert alert-info text-center d-inline mx-1' role='alert'>$i</p>";
                
                $i++;
            }

        ?>
    </div>
</body>
</html>