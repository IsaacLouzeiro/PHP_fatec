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
        <h2>Exercício 2: Imprimir 50 numeros posteriores</h2>
        <form class="row g-3 mt-4" method="post" action="">
            <div class="col-md-12">
                <label for="inputEmail4" class="form-label">Informe um valor maior que 0</label>
                <input type="number" class="form-control" name="valor" id="valor">
            </div>
            <div class="col-12 d-flex justify-content-center">
                <button type="submit" class="btn btn-primary" value="Imprima">Imprima</button>
            </div>
        </form>
    </div>

    <div class="text-center mt-5 d-flex flex-wrap justify-content-center">
        <?php

            $vlr = $_POST['valor'];
            $vlr += 1;
            $cinquenta = $vlr + 50;

            setlocale( LC_ALL, 'pt_BR', 'pt_BR.iso-8859-1', 'pt_BR.utf-8', 'portuguese' ); 
            date_default_timezone_set( 'America/Sao_Paulo' );
            $datahora = strftime( '%Y-%m-%e %T', strtotime('now'));
            for($vlr; $vlr <= $cinquenta; $vlr++) {
                echo"<p class='alert alert-info text-center d-inline mx-1' role='alert'>$vlr <br> $datahora  </p>";
            }
        ?>
    </div>
</body>
</html>