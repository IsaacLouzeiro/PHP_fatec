-- Configuração do banco de dados
CREATE DATABASE IF NOT EXISTS cadastroCliente;
USE cadastroCliente;

CREATE TABLE tbCliente (
    codCliente INT AUTO_INCREMENT PRIMARY KEY,
    nomeCliente VARCHAR(255) NOT NULL,
    cepCliente VARCHAR(10) NOT NULL,
    enderecoCliente VARCHAR(255) NOT NULL,
    bairroCliente VARCHAR(255) NOT NULL,
    cidadeCliente VARCHAR(255) NOT NULL
);

CREATE DATABASE IF NOT EXISTS cadastroFilmes;
USE cadastroFilmes;

CREATE TABLE IF NOT EXISTS tbFilme (
    idFilme INT AUTO_INCREMENT PRIMARY KEY,
    nomeFilme VARCHAR(255) NOT NULL,
    descricaoFilme TEXT,
    dataLancamento DATE,
    posterPath VARCHAR(255)
);
