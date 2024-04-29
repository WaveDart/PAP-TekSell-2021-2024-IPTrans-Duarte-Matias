-- --------------------------------------------------------
-- Anfitrião:                    127.0.0.1
-- Versão do servidor:           10.4.32-MariaDB - mariadb.org binary distribution
-- SO do servidor:               Win64
-- HeidiSQL Versão:              12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- A despejar estrutura da base de dados para teksell
CREATE DATABASE IF NOT EXISTS `teksell` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `teksell`;

-- A despejar estrutura para tabela teksell.encomendas
CREATE TABLE IF NOT EXISTS `encomendas` (
  `cliente` varchar(50) NOT NULL,
  `produto` varchar(45) NOT NULL,
  `preco` varchar(45) NOT NULL,
  `quantidade` varchar(45) NOT NULL,
  `estado` varchar(45) NOT NULL,
  PRIMARY KEY (`cliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- A despejar dados para tabela teksell.encomendas: ~0 rows (aproximadamente)

-- A despejar estrutura para tabela teksell.produtos
CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `descricao` text NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `imagem_path` varchar(255) NOT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- A despejar dados para tabela teksell.produtos: ~6 rows (aproximadamente)
INSERT IGNORE INTO `produtos` (`id`, `nome`, `descricao`, `preco`, `quantidade`, `categoria`, `imagem_path`, `data_cadastro`) VALUES
	(1, 'qweqw', ' ddffsvdfaef', 123.00, 13, 'Teclados', 'assets/img/produtos/65f8359f9ef58.jpg', '2024-03-18 12:37:51'),
	(2, 'qweqw', ' ddffsvdfaef', 123.00, 13, 'Teclados', 'assets/img/produtos/65f83740f2624.jpg', '2024-03-18 12:44:48'),
	(3, 'qweqw', ' ddffsvdfaef', 123.00, 13, 'Teclados', 'assets/img/produtos/65f837a39fbb6.jpg', '2024-03-18 12:46:27'),
	(4, 'vdgtc', 'cffdgrvhcgrfvghvdyct', 621.00, 4, 'Microfones', 'assets/img/produtos/65f853eddae67.png', '2024-03-18 14:47:09'),
	(5, 'vasedfvwfe', 'dfdsvvssddxxw3rwddd', 523.00, 212, 'Fones', 'assets/img/produtos/65f854606a17e.png', '2024-03-18 14:49:04'),
	(6, '123wecsd', 'qqwceaascwwrg', 123.00, 5444, 'Carregadores', 'assets/img/produtos/65f85483efc88.png', '2024-03-18 14:49:39');

-- A despejar estrutura para tabela teksell.utilizadores
CREATE TABLE IF NOT EXISTS `utilizadores` (
  `id_utilizador` int(11) NOT NULL AUTO_INCREMENT,
  `utilizador` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `caminho` varchar(100) NOT NULL,
  `cargo` varchar(45) NOT NULL,
  PRIMARY KEY (`id_utilizador`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- A despejar dados para tabela teksell.utilizadores: ~3 rows (aproximadamente)
INSERT IGNORE INTO `utilizadores` (`id_utilizador`, `utilizador`, `senha`, `email`, `caminho`, `cargo`) VALUES
	(8, 'DartWave', '090c36e3bb39377468363197afb3e91b', 'duartegames99@gmail.com', 'assets/img/clientes_img/65b7a53173078.png', 'ADM'),
	(9, 'Gonçalos', '52c7915d4e0b6d93268b1f63bfd4578b', 'goncalo@gmail.com', 'assets/img/clientes_img/65b7aa39cd2e0.jpeg', 'cliente'),
	(10, 'Duarte', '090c36e3bb39377468363197afb3e91b', 'duartegames7@gmail.com', 'assets/img/clientes_img/65eae1ba1362a.jpg', 'ADM');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
