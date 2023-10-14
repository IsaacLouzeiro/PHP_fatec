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
        <h2>Exercício 6: Classificação de Produtos</h2>
        <form class="row g-3 mt-4" method="post" action="index.php">
            <div class="col-md-12">
                <p>Escolha a classificação de 1 a 5</p>
                <label for="inputEmail4" class="form-label">Informe o código da classificação</label>
                <input type="number" class="form-control" name="codigo" id="codigo">
            </div>
            <div class="col-12 d-flex justify-content-center">
                <button type="submit" class="btn btn-primary" value="Calcular">pesquisar</button>
            </div>
        </form>
    </div>


    <?php

        $codigo = $_POST['codigo'];

        switch ($codigo) {
            case '1':
                echo "<div class='alert alert-info text-center container mt-5' role='alert'>1 - Alimento não perecível</div>";
                break;
            case '2':
                echo "<div class='alert alert-info text-center container mt-5' role='alert'>2 - Alimento perecível</div>";
                break;
            case '3':
                echo "<div class='alert alert-info text-center container mt-5' role='alert'>3 - Vestuário</div>";
                break;
            case '4':
                echo "<div class='alert alert-info text-center container mt-5' role='alert'>4 - Higiene pessoal</div>";
                break;
            case '5':
                echo "<div class='alert alert-info text-center container mt-5' role='alert'>5 - Limpeza e Utensílios Domésticos</div>";
                break;
            default:
                echo "<div class='alert alert-danger text-center container mt-5' role='alert'>Código inválido</div>";
                break;
        }
    ?>
</body>
</html>