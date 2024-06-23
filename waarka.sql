-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05/04/2024 às 15:10
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `waarka`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `categorias`
--

CREATE TABLE `categorias` (
  `id_categoria` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `descricao` text DEFAULT NULL,
  `createdAt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `categorias`
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
-- Estrutura para tabela `compras`
--

CREATE TABLE `compras` (
  `id_compra` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `status` enum('finalizada','pendente') NOT NULL DEFAULT 'finalizada',
  `createdAt` datetime NOT NULL DEFAULT current_timestamp(),
  `endereco` varchar(200) NOT NULL,
  `quantidade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `compras`
--

INSERT INTO `compras` (`id_compra`, `id_usuario`, `id_produto`, `status`, `createdAt`, `endereco`, `quantidade`) VALUES
(1, 1, 3, 'finalizada', '2024-04-04 01:09:29', '', 1),
(2, 1, 2, 'finalizada', '2024-04-04 01:10:52', '', 1),
(3, 2, 2, 'pendente', '2024-04-04 01:11:23', '', 1),
(4, 1, 4, 'finalizada', '2024-04-04 03:15:51', 'Rua da suave', 1),
(5, 3, 2, 'finalizada', '2024-04-05 05:18:33', 'villa de viana', 1),
(6, 3, 3, 'finalizada', '2024-04-05 05:20:09', 'villa de viana', 1),
(7, 3, 4, 'finalizada', '2024-04-05 05:25:01', '', 1),
(8, 3, 3, 'finalizada', '2024-04-05 05:27:53', 'villa de viana', 4),
(9, 3, 17, 'finalizada', '2024-04-05 05:31:39', 'villa de viana', 4),
(10, 3, 17, 'finalizada', '2024-04-05 05:39:07', 'villa de viana', 2),
(11, 3, 18, 'finalizada', '2024-04-05 13:46:40', 'maianga', 3);

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `id_produto` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `descricao` text DEFAULT NULL,
  `preco` decimal(10,2) DEFAULT NULL,
  `id_categoria` int(11) NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT current_timestamp(),
  `url_imagem` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`id_produto`, `nome`, `descricao`, `preco`, `id_categoria`, `createdAt`, `url_imagem`) VALUES
(2, 'Iphone X', 'iphone muito bom', 90.00, 3, '2024-04-04 01:06:41', 'Iphone X.jpg'),
(3, 'Iphone 13', 'Este é um produto da apple que fez bastante sucesso', 250.00, 5, '2024-04-04 01:07:44', 'iphone 13 pro.jpg'),
(4, 'Laptop', 'pc muito bom para linux', 999.99, 1, '2024-04-04 02:58:32', 'Laptop.jpg'),
(17, 'smart watch', 'este é um relógio interessante', 450.00, 6, '2024-04-05 00:09:02', 'smart watch.jpg'),
(18, 'Melhor laptop', 'este é um novo modelo que saiu em 2024', 999.99, 1, '2024-04-05 00:50:39', 'Melhor laptop.jpg'),
(19, 'headphone', 'headphone de qualidade', 250.00, 5, '2024-04-05 12:57:35', 'headphone.jpg'),
(20, 'Gaming mouse', 'gaming mouse rapido', 550.00, 3, '2024-04-05 13:18:05', 'gaming mouse.jpg'),
(21, 'FRIDGE2', 'FRIDGE2 fresco', 250.00, 3, '2024-04-05 13:18:05', 'FRIDGE2.jpg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `telefone` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nome`, `email`, `senha`, `telefone`) VALUES
(1, 'Antonio Manuel', 'antoniomanuel@gmail.com', '1234', NULL),
(2, 'Fernando Miguel', 'miguel@gmail.com', '1234', NULL),
(3, 'Erick Wendel', 'wendel@gmail.com', '123456', NULL),
(8, 'Diego Fernades', 'diego@gmail.com', '1234', NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Índices de tabela `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id_compra`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_produto` (`id_produto`);

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id_produto`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `compras`
--
ALTER TABLE `compras`
  MODIFY `id_compra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `compras_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`),
  ADD CONSTRAINT `compras_ibfk_2` FOREIGN KEY (`id_produto`) REFERENCES `produtos` (`id_produto`);

--
-- Restrições para tabelas `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `produtos_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_categoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
