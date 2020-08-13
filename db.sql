-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13-Ago-2020 às 14:35
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `telefone` varchar(255) NOT NULL,
  `senha` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `admin`
--

INSERT INTO `admin` (`id`, `nome`, `email`, `foto`, `telefone`, `senha`) VALUES
(2, 'Alison Vitor Bucker', 'originalalison@gmail.com', '', '', '17f8365416be129cbc7701838a8e5349');

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
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
  `rg` varchar(255) NOT NULL,
  `ssp` varchar(255) NOT NULL,
  `uf` varchar(255) NOT NULL,
  `nacionalidade` varchar(255) NOT NULL,
  `estado_civil` varchar(255) NOT NULL,
  `ip_cliente` varchar(255) DEFAULT NULL,
  `provedor` varchar(255) DEFAULT NULL,
  `navegador` varchar(255) DEFAULT NULL,
  `sistema_operac` varchar(255) DEFAULT NULL,
  `contrato_stat` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `id_empresa`, `id_contrato`, `nome`, `sobrenome`, `nome_fantasia`, `nascimento`, `telefone`, `celular`, `cpf`, `cep`, `rua`, `numero`, `bairro`, `complemento`, `cidade`, `email`, `curso`, `profissao`, `rg`, `ssp`, `uf`, `nacionalidade`, `estado_civil`, `ip_cliente`, `provedor`, `navegador`, `sistema_operac`, `contrato_stat`) VALUES
(21, 8, 65, 'Alison', 'Vitor Bucker', '', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '', NULL, 'originalalison@gmail.cm', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `contratos`
--

CREATE TABLE `contratos` (
  `id` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_empresa` int(11) NOT NULL,
  `data_criado` datetime DEFAULT NULL,
  `data_expirado` datetime DEFAULT NULL,
  `data_assinado` datetime DEFAULT NULL,
  `link` varchar(200) DEFAULT NULL,
  `link_adm` varchar(200) DEFAULT NULL,
  `status_assin` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `contratos`
--

INSERT INTO `contratos` (`id`, `id_cliente`, `id_empresa`, `data_criado`, `data_expirado`, `data_assinado`, `link`, `link_adm`, `status_assin`) VALUES
(65, 21, 8, '2020-08-12 15:45:33', '2020-07-26 12:46:09', NULL, 'http://localhost/grupoCoser/home/clienteContrato/65', 'http://localhost/grupoCoser/adm/visualisarContrato/65', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `contratos_models`
--

CREATE TABLE `contratos_models` (
  `id` int(11) NOT NULL,
  `id_empresa` int(11) NOT NULL DEFAULT 0,
  `titulo` varchar(200) NOT NULL DEFAULT '0',
  `contrato_txt` text NOT NULL,
  `data_adicionado` datetime NOT NULL DEFAULT current_timestamp(),
  `status` int(11) DEFAULT NULL COMMENT '0 ->inativo 1->Ativo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `contratos_models`
--

INSERT INTO `contratos_models` (`id`, `id_empresa`, `titulo`, `contrato_txt`, `data_adicionado`, `status`) VALUES
(1, 8, 'Contrato do mozão', 'dfhfgn', '2020-08-12 11:26:15', NULL),
(2, 9, 'Meu Contrato', 'dfhfgn', '2020-08-12 11:26:15', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresas`
--

CREATE TABLE `empresas` (
  `id` int(11) NOT NULL,
  `email` varchar(200) DEFAULT NULL,
  `raz_soc` varchar(255) DEFAULT NULL,
  `nome_fant` varchar(255) DEFAULT NULL,
  `cnpj` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `contrato_stat` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `empresas`
--

INSERT INTO `empresas` (`id`, `email`, `raz_soc`, `nome_fant`, `cnpj`, `logo`, `contrato_stat`) VALUES
(8, 'gaby@gmail.com', 'Social Razon', 'GABRIELA PASSOS DO PRADO', '34.880.928/0001-20', NULL, 1),
(9, 'originalalison@gmail.com', 'original ALison', 'Alison Bucker', '99.184.560/0001-00', NULL, NULL),
(10, 'contato@cosersalvador.com', 'Coser Salvador', 'Grupo Coser', '68.883.514/0001-76', NULL, 0),
(11, 'contato@bsbclub.com', 'BSB', 'BSB CLUB', '35.489.615/0001-08', NULL, 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `contratos`
--
ALTER TABLE `contratos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `contratos_models`
--
ALTER TABLE `contratos_models`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de tabela `contratos`
--
ALTER TABLE `contratos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT de tabela `contratos_models`
--
ALTER TABLE `contratos_models`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `empresas`
--
ALTER TABLE `empresas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
