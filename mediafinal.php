<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de média</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        * { padding: 0; margin: 0; }

        html, body {
            width: 100vw;
            height: 100vh;
        }
    </style>
</head>
<body class="d-flex h-100 flex-column justify-content-around">
    <h1 class="text-center display-3">Calculo da média</h1>
    <form class="row g-3 container border mx-auto align-self-center rounded-3" method="POST" action="mediafinal.php">
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Nota 1</label>
            <input type="number" min="0" max="10" class="form-control form-control-lg" id="nota1" name="nota1" placeholder="Digite a primeira nota" >
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Nota 2</label>
            <input type="number" min="0" max="10" class="form-control form-control-lg" id="nota2" name="nota2" placeholder="Digite a segunda nota">
        </div>
        <div class="col-12 text-center pb-3">
            <button type="submit" class="btn btn-lg btn-warning" name="btnCalcular" value="Calcular">Calcular</button>
        </div>
    </form>

    <?php

        $n1 = $_POST['nota1'];

        $n2 = $_POST['nota2'];

        $media = ($n1 + $n2) / 2;
    
        echo "<div class='alert alert-info text-center container' role='alert'>A média é igual a: $media</div>";

        if ($media >= 6) echo '<div class="alert alert-success text-center container" role="alert">
        Aluno Aprovado!
        </div>';
        else if ($media >= 3) echo '<div class="alert alert-warning text-center container" role="alert">
            Aluno em Recuperação!
        </div>';
        else echo '<div class="alert alert-danger text-center container" role="alert">
            Aluno Reprovado!
        </div>';
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>