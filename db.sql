-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 27-Jul-2020 às 03:59
-- Versão do servidor: 10.4.10-MariaDB
-- versão do PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `contrato`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `telefone` varchar(255) NOT NULL,
  `senha` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `admin`
--

INSERT INTO `admin` (`id`, `nome`, `email`, `foto`, `telefone`, `senha`) VALUES
(2, 'Alison Vitor Bucker', 'originalalison@gmail.com', '', '', '17f8365416be129cbc7701838a8e5349');

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_empresa` int(11) NOT NULL,
  `id_contrato` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `sobrenome` varchar(255) NOT NULL,
  `nome_fantasia` varchar(255) NOT NULL,
  `nascimento` datetime NOT NULL,
  `telefone` varchar(50) NOT NULL DEFAULT '',
  `celular` varchar(50) NOT NULL DEFAULT '',
  `cpf` varchar(50) NOT NULL DEFAULT '',
  `cep` varchar(50) NOT NULL DEFAULT '',
  `rua` varchar(50) NOT NULL DEFAULT '',
  `numero` varchar(50) NOT NULL DEFAULT '',
  `bairro` varchar(50) NOT NULL DEFAULT '',
  `complemento` varchar(50) NOT NULL DEFAULT '',
  `cidade` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `curso` varchar(255) NOT NULL,
  `profissao` varchar(255) NOT NULL,
  `ip_cliente` varchar(255) DEFAULT NULL,
  `provedor` varchar(255) DEFAULT NULL,
  `navegador` varchar(255) DEFAULT NULL,
  `sistema_operac` varchar(255) DEFAULT NULL,
  `contrato_stat` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `id_empresa`, `id_contrato`, `nome`, `sobrenome`, `nome_fantasia`, `nascimento`, `telefone`, `celular`, `cpf`, `cep`, `rua`, `numero`, `bairro`, `complemento`, `cidade`, `email`, `curso`, `profissao`, `ip_cliente`, `provedor`, `navegador`, `sistema_operac`, `contrato_stat`) VALUES
(12, 9, 58, 'GABRIELA PASSOS', 'PRADO', '', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '', '', 'gabypassosppassos@gmail.com', '', '', '', '', '', '', 1),
(13, 8, 59, 'Alison', 'Bucker', '', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '', NULL, 'originalalison@gmail.com', '', '', NULL, NULL, NULL, NULL, 1),
(14, 9, 60, 'Gabriela', 'Passos do Prado', '', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '', NULL, 'gabypassosppassos@gmail.com', '', '', NULL, NULL, NULL, NULL, 1),
(15, 9, 57, 'Luciene', 'Vitor de Barros', '', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '', NULL, 'lucienevitordebarros@gmail.com', '', '', NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `contratos`
--

DROP TABLE IF EXISTS `contratos`;
CREATE TABLE IF NOT EXISTS `contratos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_cliente` int(11) NOT NULL,
  `id_empresa` int(11) NOT NULL,
  `data_criado` datetime DEFAULT NULL,
  `data_expirado` datetime DEFAULT NULL,
  `data_assinado` datetime DEFAULT NULL,
  `link` varchar(200) DEFAULT NULL,
  `link_adm` varchar(200) DEFAULT NULL,
  `status_assin` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `contratos`
--

INSERT INTO `contratos` (`id`, `id_cliente`, `id_empresa`, `data_criado`, `data_expirado`, `data_assinado`, `link`, `link_adm`, `status_assin`) VALUES
(58, 12, 9, '2020-07-27 00:19:28', '2020-07-26 12:46:09', NULL, 'http://localhost/contrato/visualisarContrato/58', 'http://localhost/contrato/adm/visualisarContrato/58', 0),
(59, 13, 8, '2020-07-27 00:23:37', '2020-07-26 12:46:09', NULL, 'http://localhost/contrato/homevisualisarContrato/59', 'http://localhost/contrato/adm/visualisarContrato/59', 0),
(60, 14, 9, '2020-07-27 00:23:52', '2020-07-26 12:46:09', NULL, 'http://localhost/contrato/home/visualisarContrato/60', 'http://localhost/contrato/adm/visualisarContrato/60', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresas`
--

DROP TABLE IF EXISTS `empresas`;
CREATE TABLE IF NOT EXISTS `empresas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(200) DEFAULT NULL,
  `raz_soc` varchar(255) DEFAULT NULL,
  `nome_fant` varchar(255) DEFAULT NULL,
  `cnpj` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `contrato_stat` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `empresas`
--

INSERT INTO `empresas` (`id`, `email`, `raz_soc`, `nome_fant`, `cnpj`, `logo`, `contrato_stat`) VALUES
(8, 'gaby@gmail.com', 'Social Razon', 'GABRIELA PASSOS DO PRADO', '34.880.928/0001-20', NULL, 1),
(9, 'originalalison@gmail.com', 'original ALison', 'Alison Bucker', '99.184.560/0001-00', NULL, NULL),
(10, 'contato@cosersalvador.com', 'Coser Salvador', 'Grupo Coser', '68.883.514/0001-76', NULL, 0),
(11, 'contato@bsbclub.com', 'BSB', 'BSB CLUB', '35.489.615/0001-08', NULL, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
