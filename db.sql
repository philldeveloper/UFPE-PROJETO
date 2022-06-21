- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21-Jun-2022 às 23:22
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `srrs`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `animalcomplaints`
--

CREATE TABLE `animalcomplaints` (
  `id` int(11) NOT NULL,
  `nomeSolicitante` varchar(255) NOT NULL,
  `ruaSolicitante` varchar(255) NOT NULL,
  `compSolicitante` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `animalcomplaints`
--

INSERT INTO `animalcomplaints` (`id`, `nomeSolicitante`, `ruaSolicitante`, `compSolicitante`) VALUES
(0, 'RAMON', '4', '3'),
(1, '2', '2', '2');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `animalcomplaints`
--
ALTER TABLE `animalcomplaints`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;