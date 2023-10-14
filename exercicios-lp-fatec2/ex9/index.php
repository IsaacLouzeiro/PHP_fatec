<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 9 - Menu Tabuada</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        * { padding: 0; margin: 0; box-sizing: border-box; }

        html, body {
            width: 100vw;
            height: 100vh;
        }

        a.list-group-item:hover {
            padding: .5rem;
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

    <div class="d-flex h-75 flex-column justify-content-around align-items-center">
      <ul class="list-group">
          <li href="#" class="list-group-item active">Lista - Exercicio 9 - sobre tabuadas</li>
          <a href="tabuada7.php" class="list-group-item list-group-item-action">Resultado tabuada do 7</a>
          <a href="tabuada7completa.php" class="list-group-item list-group-item-action">Tabuada do 7</a>
          <a href="tabuadausuario.php" class="list-group-item list-group-item-action">Tabuada personalizada</a>
      </ul>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>