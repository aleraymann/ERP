-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 14-Jul-2018 às 23:36
-- Versão do servidor: 5.7.17
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `erp`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `codigo_cli` int(11) NOT NULL AUTO_INCREMENT,
  `nome_cli` varchar(40) NOT NULL,
  `cpf_cli` varchar(11) NOT NULL,
  `nasc_cli` date NOT NULL,
  `genero` varchar(1) NOT NULL,
  `empresa_cli` varchar(40) NOT NULL,
  PRIMARY KEY (`codigo_cli`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`codigo_cli`, `nome_cli`, `cpf_cli`, `nasc_cli`, `genero`, `empresa_cli`) VALUES
(18, 'Alessandro', '00000000020', '1986-12-20', 'M', 'raymann'),
(19, 'Ale', '11111111115', '1986-12-20', 'F', 'testee');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

DROP TABLE IF EXISTS `produto`;
CREATE TABLE IF NOT EXISTS `produto` (
  `codigo_pro` int(11) NOT NULL AUTO_INCREMENT,
  `prod` varchar(20) NOT NULL,
  `descricao` varchar(50) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `valor_pro` int(11) NOT NULL,
  `empresa_pro` varchar(40) NOT NULL,
  PRIMARY KEY (`codigo_pro`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`codigo_pro`, `prod`, `descricao`, `quantidade`, `valor_pro`, `empresa_pro`) VALUES
(2, 'Carne', 'FrigoMeet', 20, 10, 'Uniao'),
(3, 'Cerveja', 'Ambev', 40, 3, 'Hiperpao'),
(4, 'pao', 'pao frances', 50, 1, 'empresa'),
(5, 'refrigerante', 'coca cola', 25, 5, 'empresa');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `senha` varchar(10) NOT NULL,
  PRIMARY KEY (`codigo`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `usuario` (`usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`codigo`, `nome`, `email`, `usuario`, `senha`) VALUES
(1, 'Alessandro', 'aleraymann@gmail.com', 'aleraymann', '12345'),
(5, 'admin', 'admin@admin.com', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Estrutura da tabela `venda`
--

DROP TABLE IF EXISTS `venda`;
CREATE TABLE IF NOT EXISTS `venda` (
  `codigo_vend` int(11) NOT NULL AUTO_INCREMENT,
  `empresa_vend` varchar(40) NOT NULL,
  `prod_vend` varchar(20) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `data_vend` date NOT NULL,
  `total_vend` double NOT NULL,
  PRIMARY KEY (`codigo_vend`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `venda`
--

INSERT INTO `venda` (`codigo_vend`, `empresa_vend`, `prod_vend`, `quantidade`, `data_vend`, `total_vend`) VALUES
(6, 'Metropolitano Snooker ', 'cerveja', 20, '2018-07-15', 50),
(3, 'teorema', 'carne', 25, '2018-07-12', 100),
(4, 'guairaca', 'pao', 200, '2017-06-20', 250);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
