-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24/08/2023 às 19:52
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
-- Banco de dados: `consulti`
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
(5, 'math', 'iihuihi', '9999-09-19', 'profissional1', '23:00:00', '00:00:00', '#99cc03', 'mathes gay'),
(6, 'Matheus', 'Obturação', '2023-01-28', 'profissional1', '10:20:00', '10:50:00', '#99cc03', 'adsadada'),
(7, 'Fabio', 'Cárie', '2023-08-15', 'profissional2', '10:00:00', '11:30:00', '#ff4e4e', 'Muita dor'),
(8, 'Luiz', 'Manutenção', '2023-08-15', 'profissional1', '10:30:00', '11:00:00', '#99cc03', 'Manutenção periodica'),
(9, 'Carlos', 'Canal', '2023-08-15', 'profissional1', '09:50:00', '10:00:00', '#ffa001', 'Muita dor na região'),
(10, 'José', 'Clareamento', '2023-08-16', 'profissional2', '08:00:00', '09:00:00', '#99cc03', 'Quer dentes mais brancos'),
(11, 'Denis', 'Retirada do ciso', '2023-08-16', 'profissional1', '18:00:00', '19:00:00', '#ff4e4e', 'Muita dor no dente precisa rancar o ciso'),
(12, 'gabzinha ', 'implante ', '2023-08-17', 'profissional2', '13:00:00', '14:00:00', '#ffa001', 'tenho medo de agulha'),
(13, 'Kaique', 'Arrancar o siso', '2023-08-18', 'profissional2', '03:00:00', '04:00:00', '#ffa001', 'ta com dor'),
(14, 'Maria', 'simples', '2023-08-18', 'profissional1', '10:00:00', '11:00:00', '#99cc03', 'Muito loko'),
(15, 'Luiz', 'Obturação', '2023-08-18', 'profissional1', '11:30:00', '12:00:00', '#99cc03', 'nada'),
(16, 'Luiz', 'limpeza', '2023-08-19', 'profissional2', '12:00:00', '13:00:00', '#99cc03', 'dor no dente'),
(17, 'Artur', 'Consulta de Rotina', '2023-08-01', 'profissional1', '09:00:00', '10:00:00', '#99cc03', 'Primeira consulta do mês'),
(18, 'Bianca', 'Acompanhamento Pós-Operatório', '2023-08-02', 'profissional1', '14:30:00', '15:30:00', '#ff9900', 'Ajustar medicação'),
(19, 'Carla', 'Exame de Sangue', '2023-08-03', 'profissional1', '08:00:00', '08:30:00', '#3366cc', 'Jejum necessário'),
(20, 'Daniel', 'Consulta de Dor nas Costas', '2023-08-05', 'profissional1', '11:15:00', '12:00:00', '#ff3399', 'Traga exames anteriores'),
(21, 'Eduarda', 'Avaliação de Vacinação', '2023-08-07', 'profissional1', '10:00:00', '10:20:00', '#cc0033', 'Levar carteira de vacinação'),
(22, 'Fábio', 'Consulta de Oftalmologia', '2023-08-09', 'profissional1', '15:45:00', '16:30:00', '#66cc66', 'Verificar uso de óculos'),
(23, 'Gabriela', 'Consulta Dermatológica', '2023-08-12', 'profissional1', '14:00:00', '14:45:00', '#ff6600', 'Receita para creme'),
(24, 'Hugo', 'Acompanhamento Pediátrico', '2023-08-15', 'profissional1', '10:30:00', '11:15:00', '#9933cc', 'Verificar crescimento'),
(25, 'Isabela', 'Exame de Rotina', '2023-08-17', 'profissional1', '08:45:00', '09:15:00', '#00cc99', 'Jejum necessário'),
(26, 'João', 'Consulta de Gripe', '2023-08-18', 'profissional1', '16:00:00', '16:30:00', '#cc6600', 'Sintomas persistentes'),
(27, 'Laura', 'Avaliação Psicológica', '2023-08-19', 'profissional1', '09:30:00', '10:30:00', '#33cc33', 'Conversar sobre ansiedade'),
(28, 'Miguel', 'Consulta Pós-Cirúrgica', '2023-08-20', 'profissional1', '11:00:00', '12:00:00', '#cc3300', 'Remover pontos'),
(29, 'Nádia', 'Exame de Sangue', '2023-08-22', 'profissional1', '07:30:00', '08:00:00', '#ffcc00', 'Jejum necessário'),
(30, 'Otávio', 'Consulta de Cardiologia', '2023-08-23', 'profissional1', '14:30:00', '15:30:00', '#cc9900', 'Realizar teste de esforço'),
(31, 'Luiza', 'Consulta de Nutrição', '2023-08-25', 'profissional1', '12:30:00', '13:15:00', '#99cc03', 'Levar registro alimentar'),
(32, 'Rafael', 'Acompanhamento Ortopédico', '2023-08-27', 'profissional1', '09:45:00', '10:30:00', '#ff3366', 'Verificar recuperação'),
(33, 'Sofia', 'Consulta de Pediatria', '2023-08-28', 'profissional1', '15:00:00', '15:45:00', '#cc0033', 'Verificar desenvolvimento'),
(34, 'Thiago', 'Exame de Sangue', '2023-08-29', 'profissional1', '08:15:00', '08:45:00', '#cc6600', 'Jejum necessário'),
(35, 'Valentina', 'Consulta de Rotina', '2023-08-30', 'profissional1', '10:15:00', '11:00:00', '#33cc33', 'Receita de renovação'),
(36, 'William', 'Avaliação Oftalmológica', '2023-08-31', 'profissional1', '14:00:00', '15:00:00', '#9966cc', 'Realizar exame de fundo de olho');

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
(4, 'Ana Santos', '1988-12-01', '321.654.987-12', '(41) 77777-7777', 'ana.santos@example.com', 'Avenida D, 987', 'Cliente VIP');

-- --------------------------------------------------------

--
-- Estrutura para tabela `funcionarios`
--

CREATE TABLE `funcionarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `nascimento` date NOT NULL,
  `cro` varchar(8) DEFAULT NULL,
  `email` varchar(85) NOT NULL,
  `endereco` varchar(80) NOT NULL,
  `login` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `cargo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `funcionarios`
--

INSERT INTO `funcionarios` (`id`, `nome`, `cpf`, `telefone`, `nascimento`, `cro`, `email`, `endereco`, `login`, `senha`, `cargo`) VALUES
(1, 'lucas', '1111111', '1999999999', '2003-04-10', 'sp11111', 'gordo@gmail.com', 'São Paulo', 'lucas', '123456', 'dentista');

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
-- Índices de tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `agendamentos`
--
ALTER TABLE `agendamentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
