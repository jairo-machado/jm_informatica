SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `carrinho` (
  `cod_carrinho` int(11) NOT NULL,
  `fk_cod_produto` int(11) NOT NULL,
  `fk_cod_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `produtos` (
  `cod_produto` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `preco` float NOT NULL,
  `src_imagem` varchar(100) NOT NULL,
  `fk_fabricante_cod` int(11) DEFAULT NULL,
  `fk_categoria_cod` int(11) DEFAULT NULL,
  `destaque` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `produtos` (`cod_produto`, `nome`, `preco`, `src_imagem`, `fk_fabricante_cod`, `fk_categoria_cod`, `destaque`) VALUES
(1, 'SSD', 349.99, './Imagens/Produtos/SSD/ssd_kingston.jpg', NULL, NULL, b'0'),
(2, 'SSD San Disk 500GB', 356.99, './Imagens/Produtos/SSD/ssd_sandisk.jpg', NULL, NULL, b'0'),
(3, 'SSD WD Green', 419.45, './Imagens/Produtos/SSD/ssd_wdgreen.jpg', NULL, NULL, b'0'),
(6, 'Xbox', 4500.67, './Imagens/Produtos/xboxjpg.jpg', NULL, NULL, b'1'),
(9, 'Caixa', 49.99, './Imagens/Produtos/Cx_som/cxs_bright.jpg', NULL, NULL, b'0'),
(10, 'Caixa de Som com Subwoofer Multillaser', 35.9, './Imagens/Produtos/Cx_som/cxs_multilaser.jpg', NULL, NULL, b'1'),
(11, 'Fone de Ouvido Bluetooth Tranya 20', 250, './Imagens/Produtos/Fone_ouvido/fdo_tranya_t20.jpg', NULL, NULL, b'1');

CREATE TABLE `usuarios` (
  `cod_usuario` int(11) NOT NULL,
  `nome_usuario` varchar(50) NOT NULL,
  `cpf` varchar(11) DEFAULT NULL,
  `funcionario` bit(1) NOT NULL,
  `endereco` varchar(100) DEFAULT NULL,
  `senha` varchar(16) NOT NULL,
  `login` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `usuarios` (`cod_usuario`, `nome_usuario`, `cpf`, `funcionario`, `endereco`, `senha`, `login`) VALUES
(1, 'Root', NULL, b'1', NULL, 'root', 'root');


ALTER TABLE `carrinho`
  ADD PRIMARY KEY (`cod_carrinho`),
  ADD KEY `fk_cod_produto` (`fk_cod_produto`),
  ADD KEY `fk_cod_usuario` (`fk_cod_usuario`);

ALTER TABLE `produtos`
  ADD PRIMARY KEY (`cod_produto`);

ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`cod_usuario`);


ALTER TABLE `carrinho`
  MODIFY `cod_carrinho` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `produtos`
  MODIFY `cod_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

ALTER TABLE `usuarios`
  MODIFY `cod_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;


ALTER TABLE `carrinho`
  ADD CONSTRAINT `carrinho_ibfk_1` FOREIGN KEY (`fk_cod_produto`) REFERENCES `produtos` (`cod_produto`),
  ADD CONSTRAINT `carrinho_ibfk_2` FOREIGN KEY (`fk_cod_usuario`) REFERENCES `usuarios` (`cod_usuario`);
COMMIT;