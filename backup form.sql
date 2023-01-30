-- --------------------------------------------------------
-- Servidor:                     localhost
-- Versão do servidor:           8.0.28 - MySQL Community Server - GPL
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para formulario
DROP DATABASE IF EXISTS `formulario`;
CREATE DATABASE IF NOT EXISTS `formulario` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `formulario`;

-- Copiando estrutura para tabela formulario.form
DROP TABLE IF EXISTS `form`;
CREATE TABLE IF NOT EXISTS `form` (
  `idform` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(220) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `sobrenome` varchar(220) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `empresa` varchar(220) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `email` varchar(220) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `telefone` varchar(15) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `assunto` varchar(45) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `cliente` varchar(45) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  PRIMARY KEY (`idform`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- Copiando dados para a tabela formulario.form: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `form` DISABLE KEYS */;
INSERT INTO `form` (`idform`, `nome`, `sobrenome`, `empresa`, `email`, `telefone`, `assunto`, `cliente`) VALUES
	(1, '', '', '', '', '', '', ''),
	(2, 'Maria Elisa', 'Elisa', 'TI', 'mariaelisasds@gmail.com', '21982628547', 'emprego', 'não'),
	(3, 'Maria Elisa jj', 'Elisa jj', 'TI', 'maria@gmail.com', '21982628547', 'estudos', 'não');
/*!40000 ALTER TABLE `form` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
formulario