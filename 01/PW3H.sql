-- Arquivo de teste

DROP DATABASE IF EXISTS dbpw3;
CREATE DATABASE IF NOT EXISTS dbpw3;
USE dbpw3;

CREATE TABLE tbPessoa(
    nome CHAR(30),
    sobrenome CHAR(30),
    idade INT
);