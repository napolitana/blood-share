-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03-Set-2019 às 14:01
-- Versão do servidor: 10.4.6-MariaDB
-- versão do PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dbbloodshare`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_dadoscadastrais`
--

CREATE TABLE `tbl_dadoscadastrais` (
  `ID` int(11) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `sobrenome` varchar(40) NOT NULL,
  `dataDeNascimento` date NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `email` varchar(30) NOT NULL,
  `telefone` varchar(11) NOT NULL,
  `tipoSanguineo` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbl_dadoscadastrais`
--

INSERT INTO `tbl_dadoscadastrais` (`ID`, `nome`, `sobrenome`, `dataDeNascimento`, `cpf`, `email`, `telefone`, `tipoSanguineo`) VALUES
(1, 'Hygor', 'Martins', '2019-09-02', '11111111111', 'hygor@teste.com.br', '35998306684', 'A+'),
(2, 'Teste', '123', '2019-09-02', '22222222222', 'hygor@teste.com.br', '35998306684', 'AB+'),
(3, 'Caso', '123', '2019-08-02', '88888888888', 'teste@teste.com.br', '35999999999', 'O-');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbl_dadoscadastrais`
--
ALTER TABLE `tbl_dadoscadastrais`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `cpf` (`cpf`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
