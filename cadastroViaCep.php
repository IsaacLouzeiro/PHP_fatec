<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize input
    $nomeCliente = htmlspecialchars($_POST['nomeCliente']);
    $cep = htmlspecialchars($_POST['cep']);

    // Faz a requisição à API ViaCep
    $url = "https://viacep.com.br/ws/{$cep}/json/";
    $data = json_decode(file_get_contents($url), true);

    // Verifica se o CEP é válido
    if (isset($data['erro'])) {
        echo "CEP inválido.";
    } else {
        // Conecta ao banco de dados e realiza o cadastro
        $conn = new mysqli("localhost", "root", "", "cadastroCliente");

        if ($conn->connect_error) {
            die("Falha na conexão com o banco de dados: " . $conn->connect_error);
        }

        // Use instruções preparadas para prevenir SQL injection
        $sql = $conn->prepare("INSERT INTO tbCliente (nomeCliente, cepCliente, enderecoCliente, bairroCliente, cidadeCliente) VALUES (?, ?, ?, ?, ?)");
        $sql->bind_param("sssss", $nomeCliente, $cep, $data['logradouro'], $data['bairro'], $data['localidade']);

        if ($sql->execute()) {
            echo "Cadastro realizado com sucesso!<br>";
            echo "<strong>Endereço:</strong> {$data['logradouro']}, {$data['bairro']}, {$data['localidade']}";
        } else {
            echo "Erro no cadastro. Por favor, tente novamente mais tarde.";
        }

        $sql->close();
        $conn->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro ViaCep</title>
</head>
<body>
    <form method="post" action="">
        <label for="nomeCliente">Nome do Cliente:</label>
        <input type="text" name="nomeCliente" required>
        
        <label for="cep">CEP:</label>
        <input type="text" name="cep" required>
        
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>