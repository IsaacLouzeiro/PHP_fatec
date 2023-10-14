<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada Personalizada</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Início</a>
        </li>
        <li class="nav-item">
            <span class="nav-link">/</span>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Tabuada Personalizada</a>
        </li>
    </ul>

    <div class="d-flex flex-column align-items-center pt-5">
        <h2>Tabuada Personalizada</h2>
    </div>

    <div class="text-center mt-5 d-flex flex-wrap justify-content-center">
        <form method="post" class="w-100 mb-3">
            <label for="valor" class="form-label">Informe um valor para a tabuada:</label>
            <input type="number" name="valor" id="valor" class="form-control m-2 mx-auto" style="width: 200px;">
            <button type="submit" class="btn btn-primary">Mostrar Tabuada</button>
        </form>
        <?php
            $valor = $_POST["valor"];
            for ($i = 1; $i <= 10; $i++) {
                $resultado = $valor * $i;
                echo "<p class='alert alert-primary text-center d-inline mx-1' role='alert'>$valor x $i = $resultado</p>";
            }
        ?>
    </div>
</body>
</html>
