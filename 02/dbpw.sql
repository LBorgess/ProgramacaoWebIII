-- Arquivo de teste

DROP DATABASE IF EXISTS dbpw;
CREATE DATABASE IF NOT EXISTS dbpw;
USE dbpw;

-- Criação da(s) tabela(s)

CREATE TABLE pessoa(
    nome CHAR(30),
    sobrenome CHAR(30),
    idade INT
);

-- Drop das tabelas

DROP TABLE pessoa;

-- Inserção dos dados
INSERT INTO pessoa(nome, sobrenome, idade)
VALUES  
('Lucas', 'Borges', '26'),
('Ryan', 'Lucio', '20'),
('Adriano', 'Ramos', '18'),
('Gustavo', 'Vieira', '17'),
('David', 'Silva', '28'),
('Laércio', 'Natalino', '18'),
('Antonio', 'Silva', '36'),
('Henzo', 'Guts', '15'),
('Henrique', 'José', '15'),
('João', 'Pedro', '26');