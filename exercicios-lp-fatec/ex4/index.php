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
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="..">Início</a>
        </li>
        <li class="nav-item">
            <span class="nav-link">/</span>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Exercício 4</a>
        </li>
    </ul>

    <div class="d-flex flex-column align-items-center pt-5">
        <h2>Exercício 4: Cálculo de média</h2>
        <form class="row g-3 mt-4" method="post" action="index.php">
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Nota</label>
                <input type="number" class="form-control" name="nota" id="nota">
            </div>
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Faltas</label>
                <input type="number" class="form-control" name="faltas" id="faltas">
            </div>
            <div class="col-12 d-flex justify-content-center">
                <button type="submit" class="btn btn-primary" value="Calcular">Calcular</button>
            </div>
        </form>
    </div>


    <?php

        $nota = $_POST['nota'];
        $faltas = $_POST['faltas'];

        if($nota >=0 && $nota <=10) {
            if(($faltas <= 20) && ($nota >= 0 && $nota <=3.9)) {
                $conceito = "E";
                echo "<div class='alert alert-info text-center container mt-5' role='alert'>Você recebeu $conceito</div>";
            }
            else if(($faltas >= 20) && ($nota >= 0 && $nota <=3.9)) {
                $conceito = "E";
                echo "<div class='alert alert-info text-center container mt-5' role='alert'>Você recebeu $conceito</div>";
            }
            else if(($faltas <= 20) && ($nota >= 4.0 && $nota <=4.9)) {
                $conceito = "D";
                echo "<div class='alert alert-info text-center container mt-5' role='alert'>Você recebeu $conceito</div>";
            }
            else if(($faltas >= 20) && ($nota >= 4.0 && $nota <=4.9)) {
                $conceito = "E";
                echo "<div class='alert alert-info text-center container mt-5' role='alert'>Você recebeu $conceito</div>";
            }
            else if(($faltas <= 20) && ($nota >= 5.0 && $nota <=7.4)) {
                $conceito = "C";
                echo "<div class='alert alert-info text-center container mt-5' role='alert'>Você recebeu $conceito</div>";
            }
            else if(($faltas >= 20) && ($nota >= 5.0 && $nota <=7.4)) {
                $conceito = "D";
                echo "<div class='alert alert-info text-center container mt-5' role='alert'>Você recebeu $conceito</div>";
            }
            else if(($faltas <= 20) && ($nota >= 7.5 && $nota <=8.9)) {
                $conceito = "B";
                echo "<div class='alert alert-info text-center container mt-5' role='alert'>Você recebeu $conceito</div>";
            }
            else if(($faltas >= 20) && ($nota >= 7.5 && $nota <=8.9)) {
                $conceito = "C";
                echo "<div class='alert alert-info text-center container mt-5' role='alert'>Você recebeu $conceito</div>";
            }
            else if(($faltas <= 20) && ($nota >= 9.0 && $nota <=10)) {
                $conceito = "A";
                echo "<div class='alert alert-info text-center container mt-5' role='alert'>Você recebeu $conceito</div>";
            }
            else if(($faltas >= 20) && ($nota >= 9.0 && $nota <=10)) {
                $conceito = "B";
                echo "<div class='alert alert-info text-center container mt-5' role='alert'>Você recebeu $conceito</div>";
            }
        }
        else echo "<div class='alert alert-danger text-center container mt-5' role='alert'>Nota inválida (deve ser de 0 a 10).</div>";

    ?>
</body>
</html>