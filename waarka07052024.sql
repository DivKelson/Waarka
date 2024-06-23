-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 07-Maio-2024 às 08:59
-- Versão do servidor: 10.1.36-MariaDB
-- versão do PHP: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `waarka`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `id_categoria` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `descricao` text,
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `nome`, `descricao`, `createdAt`) VALUES
(1, 'laptop', 'laptop comum', '2024-04-04 01:00:50'),
(2, 'android', 'android comum', '2024-04-04 01:02:48'),
(3, 'IOS', 'IOS desde os novos à antigos', '2024-04-04 01:02:48'),
(4, 'Tablet', 'tablets comuns', '2024-04-04 01:03:35'),
(5, 'Smartphones', 'smartphones comuns', '2024-04-04 01:04:13'),
(6, 'Watchs', 'relogios da moda', '2024-04-04 03:03:26'),
(7, 'mac', 'categoria para computadores da apple', '2024-04-04 16:26:55');

-- --------------------------------------------------------

--
-- Estrutura da tabela `compras`
--

CREATE TABLE `compras` (
  `id_compra` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `status` enum('finalizada','pendente') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'finalizada',
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `endereco` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantidade` int(11) NOT NULL,
  `codigoV` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `compras`
--

INSERT INTO `compras` (`id_compra`, `id_usuario`, `id_produto`, `status`, `createdAt`, `endereco`, `quantidade`, `codigoV`) VALUES
(1, 1, 3, 'finalizada', '2024-04-04 01:09:29', '', 1, NULL),
(2, 1, 2, 'finalizada', '2024-04-04 01:10:52', '', 1, NULL),
(3, 2, 2, 'pendente', '2024-04-04 01:11:23', '', 1, NULL),
(4, 1, 4, 'finalizada', '2024-04-04 03:15:51', 'Rua da suave', 1, NULL),
(5, 3, 2, 'finalizada', '2024-04-05 05:18:33', 'villa de viana', 1, NULL),
(6, 3, 3, 'finalizada', '2024-04-05 05:20:09', 'villa de viana', 1, NULL),
(7, 3, 4, 'finalizada', '2024-04-05 05:25:01', '', 1, NULL),
(8, 3, 3, 'finalizada', '2024-04-05 05:27:53', 'villa de viana', 4, NULL),
(9, 3, 17, 'finalizada', '2024-04-05 05:31:39', 'villa de viana', 4, NULL),
(10, 3, 17, 'finalizada', '2024-04-05 05:39:07', 'villa de viana', 2, NULL),
(11, 3, 18, 'finalizada', '2024-04-05 13:46:40', 'maianga', 3, NULL),
(12, 3, 2, 'finalizada', '2024-05-05 00:06:42', 'vin', 2, NULL),
(13, 2, 17, 'finalizada', '2024-05-05 10:43:20', 'viana 2', 2, NULL),
(14, 2, 17, 'finalizada', '2024-05-05 10:44:52', 'viana 3', 3, NULL),
(15, 2, 17, 'finalizada', '2024-05-05 10:46:42', '5', 7, NULL),
(16, 2, 17, 'finalizada', '2024-05-05 10:51:21', '98', 8, NULL),
(17, 2, 17, 'finalizada', '2024-05-05 10:52:45', 'q', 2, 'mestre'),
(28, 15, 3, 'finalizada', '2024-05-05 12:31:30', 'v5', 5, 'c5hmvkv31q0navufu8dnup4no6'),
(29, 14, 4, 'finalizada', '2024-05-05 12:33:39', '5', 5, 'c5hmvkv31q0navufu8dnup4no6'),
(30, 14, 3, 'finalizada', '2024-05-05 12:34:37', '5', 5, 'c5hmvkv31q0navufu8dnup4no6');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pagamento`
--

CREATE TABLE `pagamento` (
  `idpagamento` int(12) NOT NULL,
  `valor` decimal(11,2) NOT NULL,
  `data` datetime NOT NULL,
  `telefone` int(11) NOT NULL,
  `id_usuario` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pagamento`
--

INSERT INTO `pagamento` (`idpagamento`, `valor`, `data`, `telefone`, `id_usuario`) VALUES
(1, '0.00', '2000-11-11 12:12:00', 1, 0),
(2, '6249.95', '2000-11-11 10:20:00', 1, 0),
(3, '6249.95', '2000-11-11 10:20:00', 1, 0),
(4, '6249.95', '2000-11-11 10:20:00', 1, 0),
(5, '6249.95', '2000-11-11 10:20:00', 1, 0),
(6, '6249.95', '2000-11-11 10:20:00', 1, 0),
(7, '6249.95', '2000-11-11 10:20:00', 1, 0),
(8, '6249.95', '2000-11-11 10:20:00', 1, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id_produto` int(11) NOT NULL,
  `nome` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` text COLLATE utf8mb4_unicode_ci,
  `preco` decimal(10,2) DEFAULT NULL,
  `id_categoria` int(11) NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `url_imagem` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id_produto`, `nome`, `descricao`, `preco`, `id_categoria`, `createdAt`, `url_imagem`) VALUES
(2, 'Iphone X', 'iphone muito bom', '90.00', 3, '2024-04-04 01:06:41', 'Iphone X.jpg'),
(3, 'Iphone 13', 'Este é um produto da apple que fez bastante sucesso', '250.00', 5, '2024-04-04 01:07:44', 'iphone 13 pro.jpg'),
(4, 'Laptop', 'pc muito bom para linux', '999.99', 1, '2024-04-04 02:58:32', 'Laptop.jpg'),
(17, 'smart watch', 'este é um relógio interessante', '450.00', 6, '2024-04-05 00:09:02', 'smart watch.jpg'),
(18, 'Melhor laptop', 'este é um novo modelo que saiu em 2024', '999.99', 1, '2024-04-05 00:50:39', 'Melhor laptop.jpg'),
(19, 'headphone', 'headphone de qualidade', '250.00', 5, '2024-04-05 12:57:35', 'headphone.jpg'),
(20, 'Gaming mouse', 'gaming mouse rapido', '550.00', 3, '2024-04-05 13:18:05', 'gaming mouse.jpg'),
(21, 'FRIDGE2', 'FRIDGE2 fresco', '250.00', 3, '2024-04-05 13:18:05', 'FRIDGE2.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nome`, `email`, `senha`, `telefone`) VALUES
(1, 'Antonio Manuel', 'antoniomanuel@gmail.com', '1234', NULL),
(2, 'Fernando Miguel', 'miguel@gmail.com', '1234', NULL),
(3, 'Erick Wendel', 'wendel@gmail.com', '123456', NULL),
(8, 'Diego Fernades', 'diego@gmail.com', '1234', NULL),
(14, 'ds', 'ds@gmil.com', '1234', 1),
(15, 'mestre', 'mestre@gmail.com', 'admin', 919222888),
(16, 'ds2', 'v@gmail.com', '1234', 2),
(17, 'ds3', 'ds@gm2il.com', '1234', 222);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indexes for table `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id_compra`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_produto` (`id_produto`);

--
-- Indexes for table `pagamento`
--
ALTER TABLE `pagamento`
  ADD PRIMARY KEY (`idpagamento`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id_produto`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `compras`
--
ALTER TABLE `compras`
  MODIFY `id_compra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `pagamento`
--
ALTER TABLE `pagamento`
  MODIFY `idpagamento` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `compras_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`),
  ADD CONSTRAINT `compras_ibfk_2` FOREIGN KEY (`id_produto`) REFERENCES `produtos` (`id_produto`);

--
-- Limitadores para a tabela `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `produtos_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_categoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
