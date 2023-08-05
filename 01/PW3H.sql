-- Arquivo de teste

DROP DATABASE IF EXISTS dbpw;
CREATE DATABASE IF NOT EXISTS dbpw;
USE dbpw;

CREATE TABLE tbPessoa(
    nome CHAR(30),
    sobrenome CHAR(30),
    idade INT
);