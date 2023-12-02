-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29/11/2023 às 10:27
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
-- Banco de dados: `beautiful_bd2`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `bairro`
--

CREATE TABLE `bairro` (
  `id_bairro` int(11) NOT NULL,
  `nome_bairro` varchar(130) DEFAULT NULL,
  `cod_cidade` int(11) DEFAULT NULL,
  `status_bairro` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `bairro`
--

INSERT INTO `bairro` (`id_bairro`, `nome_bairro`, `cod_cidade`, `status_bairro`) VALUES
(1, 'ana maria', 1, 1),
(2, 'Renascer', 1, 1),
(3, 'jardim maristela', 1, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `categoria`
--

CREATE TABLE `categoria` (
  `id_categ` int(11) NOT NULL,
  `nome_categ` varchar(40) DEFAULT NULL,
  `status_categ` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `categoria`
--

INSERT INTO `categoria` (`id_categ`, `nome_categ`, `status_categ`) VALUES
(10, 'Batom', 1),
(11, 'Hidradante', 1),
(12, 'Pele', 1),
(15, 'Perfumes', 1),
(16, 'Corpo e Banho', 1),
(17, 'Maquiagem', 1),
(18, 'Cabelo', 1),
(19, 'Infantil', 1),
(20, 'SkinCare', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `cidade`
--

CREATE TABLE `cidade` (
  `id_cidade` int(11) NOT NULL,
  `nome_cidade` varchar(130) DEFAULT NULL,
  `cod_estado` int(11) DEFAULT NULL,
  `status_cidade` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cidade`
--

INSERT INTO `cidade` (`id_cidade`, `nome_cidade`, `cod_estado`, `status_cidade`) VALUES
(1, 'Criciuma', 5, 1),
(2, 'Içara', 5, 1);

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
(3, 'Jhoni Cauan Freitas Elias', '0000-00-00', '', '115.172.259-65', 14),
(4, 'Jhoni Cauan Freitas Elias', '0000-00-00', '', '082.808.369-00', 15),
(5, 'SANTA CATARINA', '0000-00-00', '', '094.334.719-03', 16),
(6, 'SANTA CATARINA', '1111-11-12', '(12) 31313-2132', '117.817.969-98', 17),
(7, 'Eh jhon', '1969-09-06', '(48) 99875-7896', '135.700.719-10', 18);

-- --------------------------------------------------------

--
-- Estrutura para tabela `cupom`
--

CREATE TABLE `cupom` (
  `id_cupom` int(11) NOT NULL,
  `nome_cupom` varchar(30) DEFAULT NULL,
  `valor_desconto` double(5,2) DEFAULT NULL,
  `status_cupom` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cupom`
--

INSERT INTO `cupom` (`id_cupom`, `nome_cupom`, `valor_desconto`, `status_cupom`) VALUES
(11, 'jesus', 13.00, 1),
(12, 'jhoni', 12.00, 1),
(13, 'lucas', 12.00, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `distribuidora`
--

CREATE TABLE `distribuidora` (
  `id_distri` int(11) NOT NULL,
  `nome_distri` varchar(100) DEFAULT NULL,
  `cnpj` char(18) DEFAULT NULL,
  `nome_fantasia` varchar(50) DEFAULT NULL,
  `status_distri` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `distribuidora`
--

INSERT INTO `distribuidora` (`id_distri`, `nome_distri`, `cnpj`, `nome_fantasia`, `status_distri`) VALUES
(5, 'Mary Keyes', '123', 'Mary', 1),
(6, 'Nivea', '1234', 'niv', 1),
(7, 'Darrow', '12345', '123', 1),
(8, 'felizes', '1221', 'sempre', 1),
(9, 'Avon', '11111', 'Avon', 1),
(10, 'Pantene', '112', '12334', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `estado`
--

CREATE TABLE `estado` (
  `id_est` int(11) NOT NULL,
  `nome_est` varchar(40) DEFAULT NULL,
  `sigla_est` char(2) DEFAULT NULL,
  `cod_pais` int(11) DEFAULT NULL,
  `status_est` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `estado`
--

INSERT INTO `estado` (`id_est`, `nome_est`, `sigla_est`, `cod_pais`, `status_est`) VALUES
(5, 'Santa Catarina', 'SC', 4, 1),
(6, 'Buenos Ares', 'BA', 5, 1),
(7, 'Amazonas', 'AM', 4, 0);

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
(79, 1, 15);

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

--
-- Despejando dados para a tabela `itens_venda`
--

INSERT INTO `itens_venda` (`id_itens`, `cod_prod`, `quantidade_vendida`, `cod_venda`, `preco_total`) VALUES
(11, 16, 4, 3, 528.00),
(12, 15, 3, 3, 300.00),
(13, 12, 2, 3, 83.70),
(79, 17, 1, 4, 121.00),
(80, 22, 2, 6, 148.00);

-- --------------------------------------------------------

--
-- Estrutura para tabela `logradouro`
--

CREATE TABLE `logradouro` (
  `id_logradouro` int(11) NOT NULL,
  `nome_logradouro` varchar(130) DEFAULT NULL,
  `complemento` varchar(150) DEFAULT NULL,
  `cod_bairro` int(11) DEFAULT NULL,
  `cod_usu` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `logradouro`
--

INSERT INTO `logradouro` (`id_logradouro`, `nome_logradouro`, `complemento`, `cod_bairro`, `cod_usu`) VALUES
(1, 'Rua militao paim antunes', 'casa 51', 1, 1),
(2, 'Rua legal', 'casa 24', 2, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `pais`
--

CREATE TABLE `pais` (
  `id_pais` int(11) NOT NULL,
  `nome_pais` varchar(100) DEFAULT NULL,
  `status_pais` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `pais`
--

INSERT INTO `pais` (`id_pais`, `nome_pais`, `status_pais`) VALUES
(4, 'Brasil', 1),
(5, 'Argentina', 1),
(6, 'Marrocos', 1),
(7, 'Paris', 1),
(8, 'Australia', 1),
(9, 'Japão', 1),
(10, 'Uruguai', 1),
(11, 'China', 1),
(12, 'Vietna', 1),
(13, 'Senegal', 1),
(14, 'Africa do Sul', 1),
(15, 'Lisboa', 1),
(17, 'Reino Unido', 1);

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
  `imagem` varchar(300) DEFAULT NULL,
  `status_prod` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `produto`
--

INSERT INTO `produto` (`id_prod`, `nome_prod`, `preco_prod`, `quantidade_prod`, `descricao_prod`, `cod_distri`, `cod_categ`, `imagem`, `status_prod`) VALUES
(12, 'Lapis de olho', 41.85, 100, 'Os lapis de olho dessa marca são extremamente eficazes para a satisfaçao do cliente', 6, 17, '12/lapis.jpg', 1),
(14, 'Kit Darrow Actine Control Pele Oleosa Super (3 Produtos)', 60.00, 100, 'Os novos kits da Darrow estão bombando aproveitem e comprem o seu agora', 7, 12, '14/produtos.webp', 1),
(15, 'hidrante Darrow', 100.00, 10, 'O hidratante que toda mulher precisa no seu dia a dai', 7, 11, '15/prod.webp', 1),
(16, 'perfumito', 132.00, 10, 'Batom', 5, 15, '16/perfumea.webp', 1),
(17, 'Lapas', 121.00, 12, 'Corpo e Banho', 7, 15, '17/libre-yves-saint-laurent-perfume-feminino-eau-de-parfum-30ml.webp', 1),
(18, 'Batom Ultramate', 14.00, 100, 'Batom', 9, 10, '18/download.webp', 1),
(19, 'LOV U', 80.00, 32, 'Um perfume para os apaixonados patrocinado uma distribuição de Avon', 9, 15, '19/3193P558lZL.__AC_SX300_SY300_QL70_ML2_.jpg', 1),
(20, 'Black Essential Hot', 120.00, 73, 'Black essential hot uma experiencia quente', 9, 15, '20/61fwdjpk2EL._AC_SX425_.jpg', 1),
(22, 'Bambu Nutre e Cresce', 74.00, 121, 'Pele', 10, 12, '21/61r90mOIqaL._AC_SX522_.jpg', 1),
(23, 'Gold Cachos', 54.00, 11, 'Para cachos dourados como uma maça do eden', 8, 18, '23/niely-gold-cachos-do-seu-jeito-creme-de-pentear-250g.webp', 1);

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
  `cod_cupom` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `uso_cupom`
--

INSERT INTO `uso_cupom` (`id_usado`, `cod_venda`, `cod_cupom`) VALUES
(10, 4, 11);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usu` int(11) NOT NULL,
  `email_usu` varchar(100) DEFAULT NULL,
  `cod_tipo` int(11) DEFAULT NULL,
  `senha_usu` varchar(50) NOT NULL,
  `status_usu` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`id_usu`, `email_usu`, `cod_tipo`, `senha_usu`, `status_usu`) VALUES
(1, 'elias@gmail.com', 2, '202cb962ac59075b964b07152d234b70', 1),
(13, 'freitas@gmail.com', 1, '202cb962ac59075b964b07152d234b70', 1),
(14, 'a@a.com', 1, '202cb962ac59075b964b07152d234b70', 1),
(15, 'lawrencecav12a@gmail.com', 1, '202cb962ac59075b964b07152d234b70', 1),
(16, 'jhoni12312@gmail.com', 1, '202cb962ac59075b964b07152d234b70', 1),
(17, 'jhoni121@gmail.com', 1, '202cb962ac59075b964b07152d234b70', 1),
(18, 'jhonireidelas@gmail.com', 1, '2837151e112eb9b3f01ed9213947b22e', 1),
(20, 'henrique@gmail.com', 2, '202cb962ac59075b964b07152d234b70', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `vendas`
--

CREATE TABLE `vendas` (
  `id_venda` int(11) NOT NULL,
  `cod_usu` int(11) DEFAULT NULL,
  `data_venda` date DEFAULT NULL,
  `total_venda` double(10,2) DEFAULT NULL,
  `status_venda` tinyint(1) DEFAULT NULL,
  `cod_end` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `vendas`
--

INSERT INTO `vendas` (`id_venda`, `cod_usu`, `data_venda`, `total_venda`, `status_venda`, `cod_end`) VALUES
(3, 1, '2023-11-21', 911.70, 1, 1),
(4, 1, '2023-11-29', 121.00, 1, 2),
(6, 1, '0000-00-00', 0.00, 0, NULL);

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
(1, 'jhoni cauan freitas elias', '115.172.259-65', '2006-03-20', '(48) 99928-0222', 1),
(5, 'Jhoni Cauan Freitas Elias', '111.204.749-22', '2000-03-20', '(12) 11111-1111', 13),
(6, 'Henrique ronzani', '130.372.719-65', '2006-03-23', '(11) 11111-1111', 20);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `bairro`
--
ALTER TABLE `bairro`
  ADD PRIMARY KEY (`id_bairro`),
  ADD KEY `cod_cidade` (`cod_cidade`);

--
-- Índices de tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categ`);

--
-- Índices de tabela `cidade`
--
ALTER TABLE `cidade`
  ADD PRIMARY KEY (`id_cidade`),
  ADD KEY `cod_estado` (`cod_estado`);

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
-- Índices de tabela `logradouro`
--
ALTER TABLE `logradouro`
  ADD PRIMARY KEY (`id_logradouro`),
  ADD KEY `cod_bairro` (`cod_bairro`),
  ADD KEY `cod_usu` (`cod_usu`);

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
  ADD PRIMARY KEY (`id_venda`),
  ADD KEY `cod_usu` (`cod_usu`),
  ADD KEY `cod_end` (`cod_end`);

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
-- AUTO_INCREMENT de tabela `bairro`
--
ALTER TABLE `bairro`
  MODIFY `id_bairro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categ` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `cidade`
--
ALTER TABLE `cidade`
  MODIFY `id_cidade` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `cupom`
--
ALTER TABLE `cupom`
  MODIFY `id_cupom` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `distribuidora`
--
ALTER TABLE `distribuidora`
  MODIFY `id_distri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `estado`
--
ALTER TABLE `estado`
  MODIFY `id_est` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `favoritos`
--
ALTER TABLE `favoritos`
  MODIFY `id_favorito` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT de tabela `itens_venda`
--
ALTER TABLE `itens_venda`
  MODIFY `id_itens` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT de tabela `logradouro`
--
ALTER TABLE `logradouro`
  MODIFY `id_logradouro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `pais`
--
ALTER TABLE `pais`
  MODIFY `id_pais` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id_prod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de tabela `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `id_tipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `uso_cupom`
--
ALTER TABLE `uso_cupom`
  MODIFY `id_usado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `vendas`
--
ALTER TABLE `vendas`
  MODIFY `id_venda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `vendedor`
--
ALTER TABLE `vendedor`
  MODIFY `id_vendedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `bairro`
--
ALTER TABLE `bairro`
  ADD CONSTRAINT `bairro_ibfk_1` FOREIGN KEY (`cod_cidade`) REFERENCES `cidade` (`id_cidade`);

--
-- Restrições para tabelas `cidade`
--
ALTER TABLE `cidade`
  ADD CONSTRAINT `cidade_ibfk_1` FOREIGN KEY (`cod_estado`) REFERENCES `estado` (`id_est`);

--
-- Restrições para tabelas `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`cod_usu`) REFERENCES `usuario` (`id_usu`);

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
-- Restrições para tabelas `logradouro`
--
ALTER TABLE `logradouro`
  ADD CONSTRAINT `logradouro_ibfk_1` FOREIGN KEY (`cod_bairro`) REFERENCES `bairro` (`id_bairro`),
  ADD CONSTRAINT `logradouro_ibfk_2` FOREIGN KEY (`cod_usu`) REFERENCES `usuario` (`id_usu`);

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
-- Restrições para tabelas `vendas`
--
ALTER TABLE `vendas`
  ADD CONSTRAINT `vendas_ibfk_1` FOREIGN KEY (`cod_usu`) REFERENCES `usuario` (`id_usu`),
  ADD CONSTRAINT `vendas_ibfk_2` FOREIGN KEY (`cod_end`) REFERENCES `logradouro` (`id_logradouro`);

--
-- Restrições para tabelas `vendedor`
--
ALTER TABLE `vendedor`
  ADD CONSTRAINT `vendedor_ibfk_1` FOREIGN KEY (`cod_usu`) REFERENCES `usuario` (`id_usu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
