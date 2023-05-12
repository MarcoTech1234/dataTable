-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Maio-2023 às 17:21
-- Versão do servidor: 10.4.20-MariaDB
-- versão do PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `celke`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salario` double NOT NULL,
  `idade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `salario`, `idade`) VALUES
(1, 'marco', 3400, 12),
(2, 'edu', 400, 15),
(3, 'paulo', 9400, 17),
(4, 'arthur', 5500, 11),
(5, 'rafael', 100, 8),
(6, 'julia', 40, 9),
(7, 'Vendrade', 500, 7),
(8, 'poliana', 10400, 19),
(9, 'marcelo', 700, 20),
(10, 'laura', 6700, 3),
(11, 'Tio', 234, 32),
(12, 'Julia Vovozona', 2124, 42),
(13, 'regis', 784, 9),
(14, 'marreta', 988, 47),
(15, 'Yara', 2080, 72),
(16, 'Luiza', 4050, 2),
(17, 'alan', 14, 15),
(18, 'joao', 9034, 42),
(19, 'angelo', 32174, 102),
(20, 'Etec', 4378, 122),
(21, 'carol', 904, 12),
(22, 'Bwm', 234, 67),
(23, 'Carlos', 78, 78),
(24, 'Hug', 6504, 25),
(25, 'Lucas', 6534, 11);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
