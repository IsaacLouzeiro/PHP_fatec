<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5</title>
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
            <a class="nav-link disabled" aria-disabled="true">Exercício 5</a>
        </li>
    </ul>

    <div class="d-flex flex-column align-items-center pt-5">
        <h2>Exercício 5: Cardápio Lanchonete</h2>
        <form class="row g-3 mt-4" method="post" action="index.php">
            <div class="col-md-12">
                <p>Cardápio do 100 a 106</p>
                <label for="inputEmail4" class="form-label">Informe o código do lanche</label>
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
            case '100':
                echo "<div class='alert alert-info text-center container mt-5' role='alert'>Cachorro Quente: R$ 1,20</div>";
                break;
            case '101':
                echo "<div class='alert alert-info text-center container mt-5' role='alert'>Bauru Simples: R$ 1,30</div>";
                break;
            case '102':
                echo "<div class='alert alert-info text-center container mt-5' role='alert'>Bauru com Ovo: R$ 1,50</div>";
                break;
            case '103':
                echo "<div class='alert alert-info text-center container mt-5' role='alert'>Hamburguer: R$ 1,20</div>";
                break;
            case '104':
                echo "<div class='alert alert-info text-center container mt-5' role='alert'>Cheeseburguer: R$ 1,70</div>";
                break;
            case '105':
                echo "<div class='alert alert-info text-center container mt-5' role='alert'>Suco: R$ 2,20</div>";
                break;
            case '106':
                echo "<div class='alert alert-info text-center container mt-5' role='alert'>Refrigerante: R$ 1,00</div>";
                break;
            
            default:
                echo "<div class='alert alert-danger text-center container mt-5' role='alert'>Código inexistente</div>";
                break;
        }
    ?>
</body>
</html>