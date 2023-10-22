-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Out-2023 às 18:34
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.0.28

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
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `id_categ` int(11) NOT NULL,
  `nome_categ` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id_categ`, `nome_categ`) VALUES
(1, ''),
(2, 'Fantasia');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `nome_cliente` varchar(80) DEFAULT NULL,
  `data_nasc` date DEFAULT NULL,
  `telefone` char(14) DEFAULT NULL,
  `cpf_cliente` char(14) DEFAULT NULL,
  `cod_usu` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nome_cliente`, `data_nasc`, `telefone`, `cpf_cliente`, `cod_usu`) VALUES
(1, '312321', '0000-00-00', '2321', '88787', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cupom`
--

CREATE TABLE `cupom` (
  `id_cupom` int(11) NOT NULL,
  `nome_cupom` varchar(30) DEFAULT NULL,
  `valor_desconto` double(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `cupom`
--

INSERT INTO `cupom` (`id_cupom`, `nome_cupom`, `valor_desconto`) VALUES
(2, 'jhon', 12.40);

-- --------------------------------------------------------

--
-- Estrutura da tabela `distribuidora`
--

CREATE TABLE `distribuidora` (
  `id_distri` int(11) NOT NULL,
  `nome_distri` varchar(100) DEFAULT NULL,
  `cnpj` char(18) DEFAULT NULL,
  `nome_fantasia` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `distribuidora`
--

INSERT INTO `distribuidora` (`id_distri`, `nome_distri`, `cnpj`, `nome_fantasia`) VALUES
(1, 'Nine', '121312', 'dasda');

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco`
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
-- Estrutura da tabela `estado`
--

CREATE TABLE `estado` (
  `id_est` int(11) NOT NULL,
  `nome_est` varchar(40) DEFAULT NULL,
  `sigla_est` char(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `favorito`
--

CREATE TABLE `favorito` (
  `id_favorito` int(11) NOT NULL,
  `cod_cliente` int(11) DEFAULT NULL,
  `cod_prod` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `itens_venda`
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
-- Estrutura da tabela `pertence`
--

CREATE TABLE `pertence` (
  `id_pertence` int(11) NOT NULL,
  `cod_prod` int(11) DEFAULT NULL,
  `cod_categ` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id_prod` int(11) NOT NULL,
  `nome_prod` varchar(80) DEFAULT NULL,
  `preco_prod` double(10,2) DEFAULT NULL,
  `quantidade_prod` int(11) DEFAULT NULL,
  `descricao_prod` varchar(600) DEFAULT NULL,
  `cod_distri` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `id_tipo` int(11) NOT NULL,
  `nome_tipo` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`id_tipo`, `nome_tipo`) VALUES
(1, 'cliente'),
(2, 'vendedor');

-- --------------------------------------------------------

--
-- Estrutura da tabela `uso_cupom`
--

CREATE TABLE `uso_cupom` (
  `id_usado` int(11) NOT NULL,
  `cod_venda` int(11) DEFAULT NULL,
  `valor_descontado` double(10,2) DEFAULT NULL,
  `cod_cupom` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usu` int(11) NOT NULL,
  `nome_usu` varchar(80) DEFAULT NULL,
  `email_usu` varchar(100) DEFAULT NULL,
  `cod_tipo` int(11) DEFAULT NULL,
  `senha_usu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usu`, `nome_usu`, `email_usu`, `cod_tipo`, `senha_usu`) VALUES
(1, 'a', 'sfhsfhs@gmail.com', 1, 'e8d95a51f3af4a3b134bf6bb680a213a'),
(2, 'Calabrezi', 'sfhsfhs4@gmail.com', 2, 'c4ca4238a0b923820dcc509a6f75849b'),
(3, 'nine', 'sfhsfhs6@gmail.com', 2, '6364d3f0f495b6ab9dcf8d3b5c6e0b01'),
(4, 'nine', 'sfhsfhs9@gmail.com', 2, 'c81e728d9d4c2f636f067f89cc14862c'),
(5, 'alola', '78756@hotmail.com', 1, '9b04d152845ec0a378394003c96da594');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendas`
--

CREATE TABLE `vendas` (
  `id_venda` int(11) NOT NULL,
  `cod_cliente` int(11) DEFAULT NULL,
  `data_venda` datetime DEFAULT NULL,
  `total_venda` double(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendedor`
--

CREATE TABLE `vendedor` (
  `id_vendedor` int(11) NOT NULL,
  `nome_vendedor` varchar(80) DEFAULT NULL,
  `cpf_vendedor` char(14) DEFAULT NULL,
  `data_nasc` date DEFAULT NULL,
  `telefone` char(14) DEFAULT NULL,
  `cod_usu` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `vendedor`
--

INSERT INTO `vendedor` (`id_vendedor`, `nome_vendedor`, `cpf_vendedor`, `data_nasc`, `telefone`, `cod_usu`) VALUES
(1, 'aaa', '123', '0000-00-00', '323', NULL),
(2, 'aaa3', '12343', '0000-00-00', '32343', NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categ`);

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`),
  ADD KEY `cod_usu` (`cod_usu`);

--
-- Índices para tabela `cupom`
--
ALTER TABLE `cupom`
  ADD PRIMARY KEY (`id_cupom`);

--
-- Índices para tabela `distribuidora`
--
ALTER TABLE `distribuidora`
  ADD PRIMARY KEY (`id_distri`);

--
-- Índices para tabela `endereco`
--
ALTER TABLE `endereco`
  ADD PRIMARY KEY (`id_end`),
  ADD KEY `cod_usu` (`cod_usu`),
  ADD KEY `cod_est` (`cod_est`);

--
-- Índices para tabela `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id_est`);

--
-- Índices para tabela `favorito`
--
ALTER TABLE `favorito`
  ADD PRIMARY KEY (`id_favorito`),
  ADD KEY `cod_cliente` (`cod_cliente`),
  ADD KEY `cod_prod` (`cod_prod`);

--
-- Índices para tabela `itens_venda`
--
ALTER TABLE `itens_venda`
  ADD PRIMARY KEY (`id_itens`),
  ADD KEY `cod_prod` (`cod_prod`),
  ADD KEY `cod_venda` (`cod_venda`);

--
-- Índices para tabela `pertence`
--
ALTER TABLE `pertence`
  ADD PRIMARY KEY (`id_pertence`),
  ADD KEY `cod_categ` (`cod_categ`),
  ADD KEY `cod_prod` (`cod_prod`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id_prod`),
  ADD KEY `cod_distri` (`cod_distri`);

--
-- Índices para tabela `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`id_tipo`);

--
-- Índices para tabela `uso_cupom`
--
ALTER TABLE `uso_cupom`
  ADD PRIMARY KEY (`id_usado`),
  ADD KEY `cod_cupom` (`cod_cupom`),
  ADD KEY `cod_venda` (`cod_venda`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usu`),
  ADD KEY `cod_tipo` (`cod_tipo`);

--
-- Índices para tabela `vendas`
--
ALTER TABLE `vendas`
  ADD PRIMARY KEY (`id_venda`);

--
-- Índices para tabela `vendedor`
--
ALTER TABLE `vendedor`
  ADD PRIMARY KEY (`id_vendedor`),
  ADD KEY `cod_usu` (`cod_usu`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categ` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `cupom`
--
ALTER TABLE `cupom`
  MODIFY `id_cupom` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `distribuidora`
--
ALTER TABLE `distribuidora`
  MODIFY `id_distri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `endereco`
--
ALTER TABLE `endereco`
  MODIFY `id_end` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `estado`
--
ALTER TABLE `estado`
  MODIFY `id_est` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `favorito`
--
ALTER TABLE `favorito`
  MODIFY `id_favorito` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `itens_venda`
--
ALTER TABLE `itens_venda`
  MODIFY `id_itens` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pertence`
--
ALTER TABLE `pertence`
  MODIFY `id_pertence` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id_prod` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `id_usu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `vendas`
--
ALTER TABLE `vendas`
  MODIFY `id_venda` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `vendedor`
--
ALTER TABLE `vendedor`
  MODIFY `id_vendedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`cod_usu`) REFERENCES `usuario` (`id_usu`);

--
-- Limitadores para a tabela `endereco`
--
ALTER TABLE `endereco`
  ADD CONSTRAINT `endereco_ibfk_1` FOREIGN KEY (`cod_usu`) REFERENCES `usuario` (`id_usu`),
  ADD CONSTRAINT `endereco_ibfk_2` FOREIGN KEY (`cod_est`) REFERENCES `estado` (`id_est`);

--
-- Limitadores para a tabela `favorito`
--
ALTER TABLE `favorito`
  ADD CONSTRAINT `favorito_ibfk_1` FOREIGN KEY (`cod_cliente`) REFERENCES `cliente` (`id_cliente`),
  ADD CONSTRAINT `favorito_ibfk_2` FOREIGN KEY (`cod_prod`) REFERENCES `produto` (`id_prod`);

--
-- Limitadores para a tabela `itens_venda`
--
ALTER TABLE `itens_venda`
  ADD CONSTRAINT `itens_venda_ibfk_1` FOREIGN KEY (`cod_prod`) REFERENCES `produto` (`id_prod`),
  ADD CONSTRAINT `itens_venda_ibfk_2` FOREIGN KEY (`cod_venda`) REFERENCES `vendas` (`id_venda`);

--
-- Limitadores para a tabela `pertence`
--
ALTER TABLE `pertence`
  ADD CONSTRAINT `pertence_ibfk_1` FOREIGN KEY (`cod_categ`) REFERENCES `categoria` (`id_categ`),
  ADD CONSTRAINT `pertence_ibfk_2` FOREIGN KEY (`cod_prod`) REFERENCES `produto` (`id_prod`);

--
-- Limitadores para a tabela `produto`
--
ALTER TABLE `produto`
  ADD CONSTRAINT `produto_ibfk_1` FOREIGN KEY (`cod_distri`) REFERENCES `distribuidora` (`id_distri`);

--
-- Limitadores para a tabela `uso_cupom`
--
ALTER TABLE `uso_cupom`
  ADD CONSTRAINT `uso_cupom_ibfk_1` FOREIGN KEY (`cod_cupom`) REFERENCES `cupom` (`id_cupom`),
  ADD CONSTRAINT `uso_cupom_ibfk_2` FOREIGN KEY (`cod_venda`) REFERENCES `vendas` (`id_venda`);

--
-- Limitadores para a tabela `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`cod_tipo`) REFERENCES `tipo_usuario` (`id_tipo`);

--
-- Limitadores para a tabela `vendedor`
--
ALTER TABLE `vendedor`
  ADD CONSTRAINT `vendedor_ibfk_1` FOREIGN KEY (`cod_usu`) REFERENCES `usuario` (`id_usu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
