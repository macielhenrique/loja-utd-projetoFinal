-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2021 at 01:55 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_utd_loja`
--

-- --------------------------------------------------------

--
-- Table structure for table `categoria`
--

CREATE TABLE `categoria` (
  `codcategoria` int(11) NOT NULL,
  `categoria` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cidade`
--

CREATE TABLE `cidade` (
  `codcidade` int(11) NOT NULL,
  `cidade` varchar(255) DEFAULT NULL,
  `uf` char(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `entrada`
--

CREATE TABLE `entrada` (
  `codentrada` int(11) NOT NULL,
  `Transportadora_codtransportadora` int(11) DEFAULT NULL,
  `dataped` date DEFAULT NULL,
  `dataentr` date DEFAULT NULL,
  `total` double DEFAULT NULL,
  `frete` double DEFAULT NULL,
  `numnf` int(11) DEFAULT NULL,
  `imposto` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fornecedor`
--

CREATE TABLE `fornecedor` (
  `codfornecedor` int(11) NOT NULL,
  `Cidade_codcidade` int(11) DEFAULT NULL,
  `fornecedor` varchar(255) DEFAULT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  `num` int(11) DEFAULT NULL,
  `bairro` varchar(255) DEFAULT NULL,
  `cep` char(9) DEFAULT NULL,
  `contato` varchar(255) DEFAULT NULL,
  `cnpj` char(18) DEFAULT NULL,
  `insc` varchar(255) DEFAULT NULL,
  `tel` char(14) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `itementrada`
--

CREATE TABLE `itementrada` (
  `coditementrada` int(11) NOT NULL,
  `Produto_codproduto` int(11) DEFAULT NULL,
  `Entrada_codentrada` int(11) DEFAULT NULL,
  `lote` varchar(255) DEFAULT NULL,
  `qdte` int(11) DEFAULT NULL,
  `valor` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `itemsaida`
--

CREATE TABLE `itemsaida` (
  `coditemsaida` int(11) NOT NULL,
  `Saida_codsaida` int(11) DEFAULT NULL,
  `Produto_codproduto` int(11) DEFAULT NULL,
  `lote` varchar(255) DEFAULT NULL,
  `qdte` int(11) DEFAULT NULL,
  `valor` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `loja`
--

CREATE TABLE `loja` (
  `codloja` int(11) NOT NULL,
  `Cidade_codcidade` int(11) DEFAULT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  `num` int(11) DEFAULT NULL,
  `bairro` varchar(255) DEFAULT NULL,
  `tel` char(14) DEFAULT NULL,
  `insc` varchar(255) DEFAULT NULL,
  `cnpj` char(18) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `produto`
--

CREATE TABLE `produto` (
  `codproduto` int(11) NOT NULL,
  `Categoria_codproduto` int(11) DEFAULT NULL,
  `Fornecedor_codfornecedor` int(11) DEFAULT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `peso` double DEFAULT NULL,
  `controlado` tinyint(1) DEFAULT NULL,
  `qtdemin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produto`
--

INSERT INTO `produto` (`codproduto`, `Categoria_codproduto`, `Fornecedor_codfornecedor`, `descricao`, `peso`, `controlado`, `qtdemin`) VALUES
(2, NULL, NULL, 'feijao carioca', 15, 1, 13);

-- --------------------------------------------------------

--
-- Table structure for table `saida`
--

CREATE TABLE `saida` (
  `codsaida` int(11) NOT NULL,
  `Loja_codloja` int(11) DEFAULT NULL,
  `Transportadora_codtransportadora` int(11) DEFAULT NULL,
  `total` double DEFAULT NULL,
  `frete` double DEFAULT NULL,
  `imposto` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_notes`
--

CREATE TABLE `tb_notes` (
  `id_note` int(11) NOT NULL,
  `note_value` float(6,2) DEFAULT NULL,
  `note_desc` varchar(255) DEFAULT NULL,
  `note_date` date DEFAULT NULL,
  `note_created_in` timestamp NULL DEFAULT current_timestamp(),
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_profiles`
--

CREATE TABLE `tb_profiles` (
  `id_profile` int(1) NOT NULL,
  `profile_name` varchar(20) NOT NULL,
  `profile_desc` varchar(255) NOT NULL,
  `profile_page` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_profiles`
--

INSERT INTO `tb_profiles` (`id_profile`, `profile_name`, `profile_desc`, `profile_page`) VALUES
(1, 'Administrador', 'Admin da Poha Toda', 'admin.php'),
(2, 'Funcionário', 'Pião', 'func.php'),
(3, 'Cliente', 'O cara mais chato de todos', 'client.php'),
(4, 'Cliente', 'O cara mais chato de todos', 'client.php'),
(5, 'Super Admin', 'Caf&eacute;, &Aacute;gua', 'super_admin.php'),
(6, 'Super Admin 2', 'Caf&eacute;, &Aacute;gua', 'super_admin.php'),
(7, 'Super Admin 3', 'CafÃƒÂ©, ÃƒÂgua', 'super_admin.php'),
(8, 'Super Admin 4', 'Café, Água', 'super_admin.php');

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `id_user` int(11) NOT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `user_email` varchar(255) DEFAULT NULL,
  `user_password` varchar(255) DEFAULT NULL,
  `user_birth` date DEFAULT NULL,
  `user_cpf` varchar(25) DEFAULT NULL,
  `user_phone` varchar(25) DEFAULT NULL,
  `user_cellphone` varchar(25) DEFAULT NULL,
  `user_address` varchar(200) DEFAULT NULL,
  `user_limit` int(11) DEFAULT NULL,
  `user_created_in` timestamp NULL DEFAULT current_timestamp(),
  `profile_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`id_user`, `user_name`, `user_email`, `user_password`, `user_birth`, `user_cpf`, `user_phone`, `user_cellphone`, `user_address`, `user_limit`, `user_created_in`, `profile_id`) VALUES
(1, 'Anthony', 'anthony@email.com', '$2y$10$5Ac.tC/syFSa.dOvpdaryOkIRTBzVoaP/laSW9MLU4o1Q9av6Rb5m', '2019-12-01', '123.123.123-00', '(85) 3099-0000', '(85) 99990-0001', 'Rua Bem Alí', 0, '2019-12-18 13:42:21', 1),
(2, 'Pattricia da Silva de Moura', 'paty@email.com', '$2y$10$cBynHBLrsabx1rCgqQsxvuo4QBZSFRhY6G6On9L/39wSG0i7awdUO', '2001-01-01', '12312312312321', '(85) 3099-0268', '213123213132', 'Rua Bem AlÃ­, 23', NULL, '2019-12-18 13:45:32', 2),
(4, 'zequinha', 'zeca@email.com', '$2y$10$QMiFKSCYpIP3TkK711QI6O7D1r5.7rL1GPbtoafqLSAA4M7Im9hxS', '2021-04-14', '123456789', '894561230', '97894613', 'ali oh', NULL, '2021-04-21 19:58:16', 2),
(6, 'maciel henrique', 'maciel1@email.com', '$2y$10$8Ah/UDQvN5QnUNNvs43Z4.0EbH/vaGpF.ADjhmK8BttwsnL36QxK.', '1999-07-06', '1234569871011', '987456321', '9874656321', 'cheiro do queijo', NULL, '2021-04-22 15:54:02', 1);

-- --------------------------------------------------------

--
-- Table structure for table `transportadora`
--

CREATE TABLE `transportadora` (
  `codtransportadora` int(11) NOT NULL,
  `Cidade_codcidade` int(11) DEFAULT NULL,
  `transpotadora` varchar(255) DEFAULT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  `num` int(11) DEFAULT NULL,
  `bairro` varchar(255) DEFAULT NULL,
  `cep` char(9) DEFAULT NULL,
  `cnpj` char(18) DEFAULT NULL,
  `insc` varchar(255) DEFAULT NULL,
  `contato` varchar(255) DEFAULT NULL,
  `tel` char(14) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`codcategoria`);

--
-- Indexes for table `cidade`
--
ALTER TABLE `cidade`
  ADD PRIMARY KEY (`codcidade`);

--
-- Indexes for table `entrada`
--
ALTER TABLE `entrada`
  ADD PRIMARY KEY (`codentrada`),
  ADD KEY `Transportadora_codtransportadora` (`Transportadora_codtransportadora`);

--
-- Indexes for table `fornecedor`
--
ALTER TABLE `fornecedor`
  ADD PRIMARY KEY (`codfornecedor`),
  ADD KEY `Cidade_codcidade` (`Cidade_codcidade`);

--
-- Indexes for table `itementrada`
--
ALTER TABLE `itementrada`
  ADD PRIMARY KEY (`coditementrada`),
  ADD KEY `Produto_codproduto` (`Produto_codproduto`),
  ADD KEY `Entrada_codentrada` (`Entrada_codentrada`);

--
-- Indexes for table `itemsaida`
--
ALTER TABLE `itemsaida`
  ADD PRIMARY KEY (`coditemsaida`),
  ADD KEY `Saida_codsaida` (`Saida_codsaida`),
  ADD KEY `Produto_codproduto` (`Produto_codproduto`);

--
-- Indexes for table `loja`
--
ALTER TABLE `loja`
  ADD PRIMARY KEY (`codloja`),
  ADD KEY `Cidade_codcidade` (`Cidade_codcidade`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`codproduto`),
  ADD KEY `Categoria_codproduto` (`Categoria_codproduto`),
  ADD KEY `Fornecedor_codfornecedor` (`Fornecedor_codfornecedor`);

--
-- Indexes for table `saida`
--
ALTER TABLE `saida`
  ADD PRIMARY KEY (`codsaida`),
  ADD KEY `Transportadora_codtransportadora` (`Transportadora_codtransportadora`),
  ADD KEY `Loja_codloja` (`Loja_codloja`);

--
-- Indexes for table `tb_notes`
--
ALTER TABLE `tb_notes`
  ADD PRIMARY KEY (`id_note`);

--
-- Indexes for table `tb_profiles`
--
ALTER TABLE `tb_profiles`
  ADD PRIMARY KEY (`id_profile`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `user_email` (`user_email`),
  ADD UNIQUE KEY `user_cpf` (`user_cpf`);

--
-- Indexes for table `transportadora`
--
ALTER TABLE `transportadora`
  ADD PRIMARY KEY (`codtransportadora`),
  ADD KEY `Cidade_codcidade` (`Cidade_codcidade`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `codcategoria` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cidade`
--
ALTER TABLE `cidade`
  MODIFY `codcidade` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `entrada`
--
ALTER TABLE `entrada`
  MODIFY `codentrada` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fornecedor`
--
ALTER TABLE `fornecedor`
  MODIFY `codfornecedor` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `itementrada`
--
ALTER TABLE `itementrada`
  MODIFY `coditementrada` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `itemsaida`
--
ALTER TABLE `itemsaida`
  MODIFY `coditemsaida` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loja`
--
ALTER TABLE `loja`
  MODIFY `codloja` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `codproduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `saida`
--
ALTER TABLE `saida`
  MODIFY `codsaida` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_notes`
--
ALTER TABLE `tb_notes`
  MODIFY `id_note` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_profiles`
--
ALTER TABLE `tb_profiles`
  MODIFY `id_profile` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `transportadora`
--
ALTER TABLE `transportadora`
  MODIFY `codtransportadora` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `entrada`
--
ALTER TABLE `entrada`
  ADD CONSTRAINT `entrada_ibfk_1` FOREIGN KEY (`Transportadora_codtransportadora`) REFERENCES `transportadora` (`codtransportadora`);

--
-- Constraints for table `fornecedor`
--
ALTER TABLE `fornecedor`
  ADD CONSTRAINT `fornecedor_ibfk_1` FOREIGN KEY (`Cidade_codcidade`) REFERENCES `cidade` (`codcidade`);

--
-- Constraints for table `itementrada`
--
ALTER TABLE `itementrada`
  ADD CONSTRAINT `itementrada_ibfk_1` FOREIGN KEY (`Produto_codproduto`) REFERENCES `produto` (`codproduto`),
  ADD CONSTRAINT `itementrada_ibfk_2` FOREIGN KEY (`Entrada_codentrada`) REFERENCES `entrada` (`codentrada`);

--
-- Constraints for table `itemsaida`
--
ALTER TABLE `itemsaida`
  ADD CONSTRAINT `itemsaida_ibfk_1` FOREIGN KEY (`Saida_codsaida`) REFERENCES `saida` (`codsaida`),
  ADD CONSTRAINT `itemsaida_ibfk_2` FOREIGN KEY (`Produto_codproduto`) REFERENCES `produto` (`codproduto`);

--
-- Constraints for table `loja`
--
ALTER TABLE `loja`
  ADD CONSTRAINT `loja_ibfk_1` FOREIGN KEY (`Cidade_codcidade`) REFERENCES `cidade` (`codcidade`);

--
-- Constraints for table `produto`
--
ALTER TABLE `produto`
  ADD CONSTRAINT `produto_ibfk_1` FOREIGN KEY (`Categoria_codproduto`) REFERENCES `categoria` (`codcategoria`),
  ADD CONSTRAINT `produto_ibfk_2` FOREIGN KEY (`Fornecedor_codfornecedor`) REFERENCES `fornecedor` (`codfornecedor`);

--
-- Constraints for table `saida`
--
ALTER TABLE `saida`
  ADD CONSTRAINT `saida_ibfk_1` FOREIGN KEY (`Transportadora_codtransportadora`) REFERENCES `transportadora` (`codtransportadora`),
  ADD CONSTRAINT `saida_ibfk_2` FOREIGN KEY (`Loja_codloja`) REFERENCES `loja` (`codloja`);

--
-- Constraints for table `transportadora`
--
ALTER TABLE `transportadora`
  ADD CONSTRAINT `transportadora_ibfk_1` FOREIGN KEY (`Cidade_codcidade`) REFERENCES `cidade` (`codcidade`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
