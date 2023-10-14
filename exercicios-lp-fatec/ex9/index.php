<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 9</title>
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
            <a class="nav-link disabled" aria-disabled="true">Exercício 9</a>
        </li>
    </ul>

    <div class="d-flex flex-column align-items-center pt-5">
        <h2>Exercício 9: Calculo de preços</h2>
        <form class="row g-3 mt-4" method="post" action="index.php">
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Valor do Produto</label>
                <input type="number" class="form-control" name="valor" id="valor">
            </div>
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Código de Pagamento</label>
                <select name="identificacao" id="identificacao" class="form-select">
                    <option>Selecione</option>
                    <option value="1">À vista: Dinheiro/Cheque</option>
                    <option value="2">À vista: Crédito</option>
                    <option value="3">Em duas vezes</option>
                    <option value="4">Em duas vezes com juros</option>
                </select>
            </div>
            <div class="col-12 d-flex justify-content-center">
                <button type="submit" class="btn btn-primary" value="Finalizar">Finalizar</button>
            </div>
        </form>
    </div>


    <?php

        $valor = $_POST['valor'];
        $identificacao = $_POST['identificacao'];

        switch($identificacao) {
            case 1:
                $valor = $valor - ($valor * 0.1);
                echo "<div class='alert alert-success text-center container mt-5' role='alert'>Valor Final: $valor.</div>";
                break;
            case 2: 
                $valor = $valor - ($valor * 0.15);
                echo "<div class='alert alert-success text-center container mt-5' role='alert'>Valor Final: $valor.</div>";
                break;
            case 3:
                echo "<div class='alert alert-success text-center container mt-5' role='alert'>Valor Final: $valor.</div>";
                break;
            case 4: 
                $valor = $valor + ($valor * 0.1);
                echo "<div class='alert alert-success text-center container mt-5' role='alert'>Valor Final: $valor.</div>";
                break;
            default:
                echo "<div class='alert alert-danger text-center container mt-5' role='alert'>Opção inválida</div>";
                break;
        }
    ?>
</body>
</html>