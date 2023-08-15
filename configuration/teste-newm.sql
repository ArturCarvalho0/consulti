-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15/08/2023 às 20:37
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `teste-newm`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `agendamentos`
--

CREATE TABLE `agendamentos` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `consulta` varchar(50) NOT NULL,
  `data` date NOT NULL,
  `profissional` varchar(100) NOT NULL,
  `inicio` time NOT NULL,
  `fim` time NOT NULL,
  `color` varchar(10) NOT NULL,
  `observacao` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `agendamentos`
--

INSERT INTO `agendamentos` (`id`, `nome`, `consulta`, `data`, `profissional`, `inicio`, `fim`, `color`, `observacao`) VALUES
(1, 'aaaaaaaaaa', 'aaaaaaaaa', '2011-11-11', 'profissional1', '10:30:00', '11:00:00', '#99cc03', 'aaaaaaaaaaa'),
(2, 'aaaaaaaaaa', 'aaaaaaaaaaabbbbbb', '2222-02-22', 'profissional2', '10:00:00', '10:30:00', '#99cc03', 'aaaaaaaaa'),
(3, 'cccccccccc', 'dddddddddd', '3333-03-31', 'profissional3', '14:00:00', '14:03:00', '#99cc03', 'afioanfosa'),
(4, 'zzzzzzzz', 'adsadsa', '2002-03-10', 'profissional1', '11:11:00', '22:22:00', '#ffa001', 'dddddddddddd'),
(5, 'math', 'iihuihi', '9999-09-19', 'profissional1', '23:00:00', '00:00:00', '#99cc03', 'mathes gay');

-- --------------------------------------------------------

--
-- Estrutura para tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `nascimento` date NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `celular` varchar(15) NOT NULL,
  `email` varchar(85) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `observacao` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `nascimento`, `cpf`, `celular`, `email`, `endereco`, `observacao`) VALUES
(1, 'João da Silva', '1990-05-15', '123.456.789-01', '(11) 98765-4321', 'joao.silva@example.com', 'Rua A, 123', 'Cliente preferencial'),
(2, 'Maria Souza', '1985-10-20', '987.654.321-09', '(21) 99999-9999', 'maria.souza@example.com', 'Avenida B, 456', 'Nenhum comentário'),
(3, 'Pedro Oliveira', '1992-03-25', '456.789.123-45', '(31) 55555-5555', 'pedro.oliveira@example.com', 'Rua C, 789', 'Frequentador assíduo'),
(4, 'Ana Santos', '1988-12-01', '321.654.987-12', '(41) 77777-7777', 'ana.santos@example.com', 'Avenida D, 987', 'Cliente VIP'),
(5, 'Lucas Mendes', '1995-07-10', '789.123.456-78', '(51) 33333-3333', 'lucas.mendes@example.com', 'Rua E, 234', 'Nenhuma observação');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `agendamentos`
--
ALTER TABLE `agendamentos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `agendamentos`
--
ALTER TABLE `agendamentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
