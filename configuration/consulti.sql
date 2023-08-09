-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06-Jul-2023 às 20:18
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

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
-- Estrutura da tabela `clientes`
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
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`nome`, `nascimento`, `cpf`, `celular`, `email`, `endereco`, `observacao`) VALUES
('João da Silva', '1990-05-15', '123.456.789-01', '(11) 98765-4321', 'joao.silva@example.com', 'Rua A, 123', 'Cliente preferencial'),
('Maria Souza', '1985-10-20', '987.654.321-09', '(21) 99999-9999', 'maria.souza@example.com', 'Avenida B, 456', 'Nenhum comentário'),
('Pedro Oliveira', '1992-03-25', '456.789.123-45', '(31) 55555-5555', 'pedro.oliveira@example.com', 'Rua C, 789', 'Frequentador assíduo'),
('Ana Santos', '1988-12-01', '321.654.987-12', '(41) 77777-7777', 'ana.santos@example.com', 'Avenida D, 987', 'Cliente VIP'),
('Lucas Mendes', '1995-07-10', '789.123.456-78', '(51) 33333-3333', 'lucas.mendes@example.com', 'Rua E, 234', 'Nenhuma observação');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
