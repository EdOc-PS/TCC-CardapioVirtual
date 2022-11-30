-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27-Set-2022 às 01:17
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
-- Banco de dados: `carrinho_bd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `carrinho`
--

CREATE TABLE `carrinho` (
  `Nm_produto` varchar(50) NOT NULL,
  `Qtde_produto` int(5) NOT NULL,
  `Preco_produto` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `carrinho`
--

INSERT INTO `carrinho` (`Nm_produto`, `Qtde_produto`, `Preco_produto`) VALUES
('', 0, 0),
('Hamburguer', 3, 19),
('Hamburguer', 4, 19),
('Hamburguer', 4, 19),
('Hamburguer', 0, 19),
('Hamburguer', 0, 19),
('Hamburguer', 0, 19),
('Hamburguer', 0, 19),
('Hamburguer', 0, 19),
('Hamburguer', 0, 19),
('Hamburguer', 0, 19),
('Hamburguer', 0, 19),
('Hamburguer', 0, 19),
('Hamburguer', 0, 19),
('Hamburguer', 0, 19),
('Hamburguer', 0, 19),
('Hamburguer', 0, 19),
('Hamburguer', 0, 19),
('Hamburguer', 0, 19),
('Hamburguer', 0, 19),
('Hamburguer', 0, 19),
('Hamburguer', 0, 19),
('Hamburguer', 0, 19),
('Hamburguer', 0, 19),
('Hamburguer', 0, 19),
('Hamburguer', 0, 19),
('Hamburguer', 0, 19),
('Hamburguer', 0, 19),
('Hamburguer', 0, 19),
('Hamburguer', 0, 19),
('Hamburguer', 0, 19),
('Hamburguer', 0, 19),
('Hamburguer', 0, 19),
('Hamburguer', 0, 19),
('Hamburguer', 0, 19),
('Hamburguer', 0, 19),
('Hamburguer', 0, 19),
('Hamburguer', 0, 19),
('Hamburguer', 0, 19),
('Hamburguer', 0, 19),
('Hamburguer', 0, 19),
('Hamburguer', 0, 19);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
