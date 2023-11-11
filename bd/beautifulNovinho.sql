-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29/10/2023 às 22:51
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `beautiful`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `categoria`
--

CREATE TABLE `categoria` (
  `id_categ` int(11) NOT NULL,
  `nome_categ` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `categoria`
--

INSERT INTO `categoria` (`id_categ`, `nome_categ`) VALUES
(1, ''),
(2, 'Fantasia'),
(3, 'Misterio'),
(4, 'Animatronic fazbear');

-- --------------------------------------------------------

--
-- Estrutura para tabela `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `nome_cliente` varchar(80) DEFAULT NULL,
  `data_nasc` date DEFAULT NULL,
  `telefone` char(15) DEFAULT NULL,
  `cpf_cliente` char(14) DEFAULT NULL,
  `cod_usu` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nome_cliente`, `data_nasc`, `telefone`, `cpf_cliente`, `cod_usu`) VALUES
(1, '312321', '0000-00-00', '2321', '88787', NULL),
(2, 'alabama', '0000-00-00', '213213', '343213', 10);

-- --------------------------------------------------------

--
-- Estrutura para tabela `cupom`
--

CREATE TABLE `cupom` (
  `id_cupom` int(11) NOT NULL,
  `nome_cupom` varchar(30) DEFAULT NULL,
  `valor_desconto` double(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cupom`
--

INSERT INTO `cupom` (`id_cupom`, `nome_cupom`, `valor_desconto`) VALUES
(2, 'jhon', 12.40),
(3, 'lavan', 10.00);

-- --------------------------------------------------------

--
-- Estrutura para tabela `distribuidora`
--

CREATE TABLE `distribuidora` (
  `id_distri` int(11) NOT NULL,
  `nome_distri` varchar(100) DEFAULT NULL,
  `cnpj` char(18) DEFAULT NULL,
  `nome_fantasia` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `distribuidora`
--

INSERT INTO `distribuidora` (`id_distri`, `nome_distri`, `cnpj`, `nome_fantasia`) VALUES
(1, 'Nine', '121312', 'dasda'),
(2, 'lavan', '12312', 'sei la'),
(3, 'garotos bonitos SA', '12345', '123'),
(4, 'FAZBEAR PIZZARIA', '23123123', 'Freedy');

-- --------------------------------------------------------

--
-- Estrutura para tabela `endereco`
--

CREATE TABLE `endereco` (
  `id_end` int(11) NOT NULL,
  `cod_est` int(11) DEFAULT NULL,
  `municipio_end` varchar(80) DEFAULT NULL,
  `bairro_end` varchar(50) DEFAULT NULL,
  `logradoro_end` varchar(100) DEFAULT NULL,
  `complemento` varchar(100) DEFAULT NULL,
  `cep_end` char(9) DEFAULT NULL,
  `cod_usu` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `estado`
--

CREATE TABLE `estado` (
  `id_est` int(11) NOT NULL,
  `nome_est` varchar(40) DEFAULT NULL,
  `sigla_est` char(2) DEFAULT NULL,
  `cod_pais` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `estado`
--

INSERT INTO `estado` (`id_est`, `nome_est`, `sigla_est`, `cod_pais`) VALUES
(1, 'SANTA CATARINA', 'SC', 1),
(3, 'alabama', 'aa', 2),
(4, 'estados unidos', 'EU', 3);

-- --------------------------------------------------------

--
-- Estrutura para tabela `favoritos`
--

CREATE TABLE `favoritos` (
  `id_favorito` int(11) NOT NULL,
  `cod_usu` int(11) DEFAULT NULL,
  `cod_prod` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `favoritos`
--

INSERT INTO `favoritos` (`id_favorito`, `cod_usu`, `cod_prod`) VALUES
(1, 7, 9);

-- --------------------------------------------------------

--
-- Estrutura para tabela `itens_venda`
--

CREATE TABLE `itens_venda` (
  `id_itens` int(11) NOT NULL,
  `cod_prod` int(11) DEFAULT NULL,
  `quantidade_vendida` int(11) DEFAULT NULL,
  `cod_venda` int(11) DEFAULT NULL,
  `preco_total` double(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `pais`
--

CREATE TABLE `pais` (
  `id_pais` int(11) NOT NULL,
  `nome_pais` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `pais`
--

INSERT INTO `pais` (`id_pais`, `nome_pais`) VALUES
(1, 'BRASIL'),
(2, 'argentina'),
(3, 'ALABAMA');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto`
--

CREATE TABLE `produto` (
  `id_prod` int(11) NOT NULL,
  `nome_prod` varchar(80) DEFAULT NULL,
  `preco_prod` double(10,2) DEFAULT NULL,
  `quantidade_prod` int(11) DEFAULT NULL,
  `descricao_prod` varchar(600) DEFAULT NULL,
  `cod_distri` int(11) DEFAULT NULL,
  `cod_categ` int(11) DEFAULT NULL,
  `imagem` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `produto`
--

INSERT INTO `produto` (`id_prod`, `nome_prod`, `preco_prod`, `quantidade_prod`, `descricao_prod`, `cod_distri`, `cod_categ`, `imagem`) VALUES
(5, 'alabama', 323.00, 231, '12345657', 2, 2, 'download.jfif'),
(6, 'Lavan e brothers', 10000.00, 231, 'brothers', 2, 3, 'Captura de tela 2023-10-21 230707.png'),
(8, 'alabama', 323.00, 231, '12345657', 2, 2, 'download.jfif'),
(9, 'Jhoni o queridinho', 0.00, 1, 'ele é bonitinho', 3, 2, 'WhatsApp Image 2023-10-28 at 21.38.45.jpeg'),
(10, 'a', 1.00, 1, '1', 2, 2, 'WhatsApp Image 2023-10-28 at 21.38.45.jpeg'),
(11, 'freddy o amigao', 10.80, 1, 'o freddy', 4, 4, 'download (1).jfif');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `id_tipo` int(11) NOT NULL,
  `nome_tipo` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`id_tipo`, `nome_tipo`) VALUES
(1, 'cliente'),
(2, 'vendedor');

-- --------------------------------------------------------

--
-- Estrutura para tabela `uso_cupom`
--

CREATE TABLE `uso_cupom` (
  `id_usado` int(11) NOT NULL,
  `cod_venda` int(11) DEFAULT NULL,
  `valor_descontado` double(10,2) DEFAULT NULL,
  `cod_cupom` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usu` int(11) NOT NULL,
  `email_usu` varchar(100) DEFAULT NULL,
  `cod_tipo` int(11) DEFAULT NULL,
  `senha_usu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`id_usu`, `email_usu`, `cod_tipo`, `senha_usu`) VALUES
(1, 'sfhsfhs@gmail.com', 1, 'e8d95a51f3af4a3b134bf6bb680a213a'),
(2, 'sfhsfhs4@gmail.com', 2, 'c4ca4238a0b923820dcc509a6f75849b'),
(3, 'sfhsfhs6@gmail.com', 2, '6364d3f0f495b6ab9dcf8d3b5c6e0b01'),
(4, 'sfhsfhs9@gmail.com', 2, 'c81e728d9d4c2f636f067f89cc14862c'),
(5, '78756@hotmail.com', 1, '9b04d152845ec0a378394003c96da594'),
(6, 'jhoni@gmail.com', 1, '202cb962ac59075b964b07152d234b70'),
(7, 'elias@gmail.com', 2, '202cb962ac59075b964b07152d234b70'),
(8, 'lawrencecava@gmail.com', 1, 'c4ca4238a0b923820dcc509a6f75849b'),
(9, 'lawrencecav1a@gmail.com', 1, 'c4ca4238a0b923820dcc509a6f75849b'),
(10, 'lawrencecav13a@gmail.com', 1, 'c4ca4238a0b923820dcc509a6f75849b'),
(11, 'elia3s@gmail.com', 2, '202cb962ac59075b964b07152d234b70'),
(12, 'bruno@gmail.com', 2, '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Estrutura para tabela `vendas`
--

CREATE TABLE `vendas` (
  `id_venda` int(11) NOT NULL,
  `cod_cliente` int(11) DEFAULT NULL,
  `data_venda` datetime DEFAULT NULL,
  `total_venda` double(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `vendedor`
--

CREATE TABLE `vendedor` (
  `id_vendedor` int(11) NOT NULL,
  `nome_vendedor` varchar(80) DEFAULT NULL,
  `cpf_vendedor` char(14) DEFAULT NULL,
  `data_nasc` date DEFAULT NULL,
  `telefone` char(15) DEFAULT NULL,
  `cod_usu` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `vendedor`
--

INSERT INTO `vendedor` (`id_vendedor`, `nome_vendedor`, `cpf_vendedor`, `data_nasc`, `telefone`, `cod_usu`) VALUES
(1, 'aaa', '123', '0000-00-00', '(32) 32223-131', NULL),
(2, 'jhoni cauan', '12343', '0000-00-00', '(48) 99902-2899', 7),
(3, 'asas', '231231', '0000-00-00', '2321312', 11),
(4, 'Bruno monteiro', '115.172.234-12', '0000-00-00', '(48) 99999-9999', 12);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categ`);

--
-- Índices de tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`),
  ADD KEY `cod_usu` (`cod_usu`);

--
-- Índices de tabela `cupom`
--
ALTER TABLE `cupom`
  ADD PRIMARY KEY (`id_cupom`);

--
-- Índices de tabela `distribuidora`
--
ALTER TABLE `distribuidora`
  ADD PRIMARY KEY (`id_distri`);

--
-- Índices de tabela `endereco`
--
ALTER TABLE `endereco`
  ADD PRIMARY KEY (`id_end`),
  ADD KEY `cod_usu` (`cod_usu`),
  ADD KEY `cod_est` (`cod_est`);

--
-- Índices de tabela `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id_est`),
  ADD KEY `cod_pais` (`cod_pais`);

--
-- Índices de tabela `favoritos`
--
ALTER TABLE `favoritos`
  ADD PRIMARY KEY (`id_favorito`),
  ADD KEY `cod_usu` (`cod_usu`),
  ADD KEY `cod_prod` (`cod_prod`);

--
-- Índices de tabela `itens_venda`
--
ALTER TABLE `itens_venda`
  ADD PRIMARY KEY (`id_itens`),
  ADD KEY `cod_prod` (`cod_prod`),
  ADD KEY `cod_venda` (`cod_venda`);

--
-- Índices de tabela `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`id_pais`);

--
-- Índices de tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id_prod`),
  ADD KEY `cod_distri` (`cod_distri`),
  ADD KEY `cod_categ` (`cod_categ`);

--
-- Índices de tabela `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`id_tipo`);

--
-- Índices de tabela `uso_cupom`
--
ALTER TABLE `uso_cupom`
  ADD PRIMARY KEY (`id_usado`),
  ADD KEY `cod_cupom` (`cod_cupom`),
  ADD KEY `cod_venda` (`cod_venda`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usu`),
  ADD KEY `cod_tipo` (`cod_tipo`);

--
-- Índices de tabela `vendas`
--
ALTER TABLE `vendas`
  ADD PRIMARY KEY (`id_venda`);

--
-- Índices de tabela `vendedor`
--
ALTER TABLE `vendedor`
  ADD PRIMARY KEY (`id_vendedor`),
  ADD KEY `cod_usu` (`cod_usu`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categ` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `cupom`
--
ALTER TABLE `cupom`
  MODIFY `id_cupom` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `distribuidora`
--
ALTER TABLE `distribuidora`
  MODIFY `id_distri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `endereco`
--
ALTER TABLE `endereco`
  MODIFY `id_end` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `estado`
--
ALTER TABLE `estado`
  MODIFY `id_est` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `favoritos`
--
ALTER TABLE `favoritos`
  MODIFY `id_favorito` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `itens_venda`
--
ALTER TABLE `itens_venda`
  MODIFY `id_itens` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pais`
--
ALTER TABLE `pais`
  MODIFY `id_pais` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id_prod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `id_tipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `uso_cupom`
--
ALTER TABLE `uso_cupom`
  MODIFY `id_usado` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `vendas`
--
ALTER TABLE `vendas`
  MODIFY `id_venda` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `vendedor`
--
ALTER TABLE `vendedor`
  MODIFY `id_vendedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`cod_usu`) REFERENCES `usuario` (`id_usu`);

--
-- Restrições para tabelas `endereco`
--
ALTER TABLE `endereco`
  ADD CONSTRAINT `endereco_ibfk_1` FOREIGN KEY (`cod_usu`) REFERENCES `usuario` (`id_usu`),
  ADD CONSTRAINT `endereco_ibfk_2` FOREIGN KEY (`cod_est`) REFERENCES `estado` (`id_est`);

--
-- Restrições para tabelas `estado`
--
ALTER TABLE `estado`
  ADD CONSTRAINT `estado_ibfk_1` FOREIGN KEY (`cod_pais`) REFERENCES `pais` (`id_pais`);

--
-- Restrições para tabelas `favoritos`
--
ALTER TABLE `favoritos`
  ADD CONSTRAINT `favoritos_ibfk_1` FOREIGN KEY (`cod_usu`) REFERENCES `usuario` (`id_usu`),
  ADD CONSTRAINT `favoritos_ibfk_2` FOREIGN KEY (`cod_prod`) REFERENCES `produto` (`id_prod`);

--
-- Restrições para tabelas `itens_venda`
--
ALTER TABLE `itens_venda`
  ADD CONSTRAINT `itens_venda_ibfk_1` FOREIGN KEY (`cod_prod`) REFERENCES `produto` (`id_prod`),
  ADD CONSTRAINT `itens_venda_ibfk_2` FOREIGN KEY (`cod_venda`) REFERENCES `vendas` (`id_venda`);

--
-- Restrições para tabelas `produto`
--
ALTER TABLE `produto`
  ADD CONSTRAINT `produto_ibfk_1` FOREIGN KEY (`cod_distri`) REFERENCES `distribuidora` (`id_distri`),
  ADD CONSTRAINT `produto_ibfk_2` FOREIGN KEY (`cod_categ`) REFERENCES `categoria` (`id_categ`);

--
-- Restrições para tabelas `uso_cupom`
--
ALTER TABLE `uso_cupom`
  ADD CONSTRAINT `uso_cupom_ibfk_1` FOREIGN KEY (`cod_cupom`) REFERENCES `cupom` (`id_cupom`),
  ADD CONSTRAINT `uso_cupom_ibfk_2` FOREIGN KEY (`cod_venda`) REFERENCES `vendas` (`id_venda`);

--
-- Restrições para tabelas `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`cod_tipo`) REFERENCES `tipo_usuario` (`id_tipo`);

--
-- Restrições para tabelas `vendedor`
--
ALTER TABLE `vendedor`
  ADD CONSTRAINT `vendedor_ibfk_1` FOREIGN KEY (`cod_usu`) REFERENCES `usuario` (`id_usu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
