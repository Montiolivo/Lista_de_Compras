-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26-Out-2021 às 06:20
-- Versão do servidor: 10.4.20-MariaDB
-- versão do PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `banco_lista_compras`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `lista_compra`
--

CREATE TABLE `lista_compra` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `mes` varchar(191) NOT NULL,
  `quantidade` int(255) NOT NULL,
  `nome_produto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `lista_compra`
--

INSERT INTO `lista_compra` (`id`, `titulo`, `mes`, `quantidade`, `nome_produto`) VALUES
(20, 'ListaFevereiro', 'Fevereiro', 50, 'Feijao'),
(21, 'ListaAbril', 'Abril', 5, 'Macarrao'),
(23, 'ListaAbril', 'Abril', 58, 'Ervilha'),
(24, 'ListaFevereiro', 'Fevereiro', 2, 'Ervilha');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `lista_compra`
--
ALTER TABLE `lista_compra`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `lista_compra`
--
ALTER TABLE `lista_compra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
