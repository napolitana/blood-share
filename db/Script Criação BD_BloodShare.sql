CREATE DATABASE IF NOT EXISTS dbBloodshare;

USE dbBloodshare; 

CREATE TABLE IF NOT EXISTS tbl_dadosCadastrais (
	ID INT NOT NULL,
	nome VARCHAR(20) NOT NULL,
	sobrenome VARCHAR(40) NOT NULL,
    dataDeNascimento DATE NOT NULL,
    cpf VARCHAR(14) UNIQUE NOT NULL,
    email VARCHAR(30) NOT NULL,
    telefone VARCHAR(11) NOT NULL,
    tipoSanguineo VARCHAR(3) NOT NULL,
CONSTRAINT pk_Controle primary key(ID));



