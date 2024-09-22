CREATE DATABASE dbAgro;

CREATE Table dbAgro.Usuario(
    idUsuario int PRIMARY KEY auto_increment,
    usuario varchar(50) NOT NULL,
    senha varchar(30) NOT NULL
)

CREATE TABLE dbAgro.Produtos(
    idProduto int PRIMARY KEY auto_increment,
    idFornecedor int PRIMARY KEY auto_increment,
    nome VARCHAR(100) NOT NULL,
    descricao VARCHAR(100) NOT NULL,
    unidade int NOT NULL,
    preco FLOAT NOT NULL,
    marca varchar(30) NOT NULL,
    modelo varchar(30)
)

CREATE Table dbAgro.Fornecedor(
    idFornecedor int PRIMARY KEY auto_increment,
    nome varchar(100) NOT NULL,
    telefone int NOT NULL
)

ALTER TABLE dbAgro.Produtos ADD CONSTRAINT idFornecedor
FOREIGN KEY (idFornecedor)
REFERENCES dbAgro.Fornecedor (idFornecedor);