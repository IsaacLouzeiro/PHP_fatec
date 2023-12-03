<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize input
    $nomeFilme = htmlspecialchars($_POST['nomeFilme']);

    // Faz a requisição à API do TMDb
    $apiKey = "d602b10c850b6bb0ef9ffd680e9ba899";
    $url = "https://api.themoviedb.org/3/search/multi?api_key={$apiKey}&query={$nomeFilme}";
    $data = json_decode(file_get_contents($url), true);

    // Verifica se há resultados
    if (isset($data['results']) && !empty($data['results'])) {
        $filme = $data['results'][0];

        // Conecta ao banco de dados e realiza o cadastro
        $conn = new mysqli("localhost", "root", "", "cadastroFilmes");

        if ($conn->connect_error) {
            die("Falha na conexão com o banco de dados: " . $conn->connect_error);
        }

        // Use instruções preparadas para prevenir SQL injection
        $sql = $conn->prepare("INSERT INTO tbFilme (nomeFilme, descricaoFilme, dataLancamento, posterPath) VALUES (?, ?, ?, ?)");
        $sql->bind_param("ssss", $filme['title'], $filme['overview'], $filme['release_date'], $filme['poster_path']);

        if ($sql->execute()) {
            echo "Cadastro realizado com sucesso!<br>";
            echo "<strong>Nome do Filme/Série:</strong> {$filme['title']}<br>";
            echo "<strong>Descrição:</strong> {$filme['overview']}<br>";
            echo "<strong>Data de Lançamento:</strong> {$filme['release_date']}<br>";
            echo "<strong>Poster:</strong> <img src='https://image.tmdb.org/t/p/w500{$filme['poster_path']}' alt='Poster do Filme'>";
        } else {
            echo "Erro no cadastro. Por favor, tente novamente mais tarde.";
        }

        $sql->close();
        $conn->close();
    } else {
        echo "Nenhum filme ou série encontrado com esse nome.";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro TMDb</title>
</head>
<body>
    <form method="post" action="">
        <label for="nomeFilme">Nome do Filme/Série:</label>
        <input type="text" name="nomeFilme" required>
        
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>
