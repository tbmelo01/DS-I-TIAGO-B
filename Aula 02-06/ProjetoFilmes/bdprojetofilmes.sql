-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 20-Maio-2023 às 01:20
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdprojetofilmes`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcontato`
--

DROP TABLE IF EXISTS `tbcontato`;
CREATE TABLE IF NOT EXISTS `tbcontato` (
  `idContato` int(11) NOT NULL AUTO_INCREMENT,
  `nomeContato` varchar(40) DEFAULT NULL,
  `emailContato` varchar(40) DEFAULT NULL,
  `assuntoContato` varchar(400) DEFAULT NULL,
  `mensagemContato` varchar(2000) DEFAULT NULL,
  PRIMARY KEY (`idContato`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbcontato`
--

INSERT INTO `tbcontato` (`idContato`, `nomeContato`, `emailContato`, `assuntoContato`, `mensagemContato`) VALUES
(2, 'Tiago', 'tiago@gmail.com', 'serie', 'add serie'),
(6, 'Ana ', 'ana@gmail.com', 'Filme', 'Adicionar filme');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbfilme`
--

DROP TABLE IF EXISTS `tbfilme`;
CREATE TABLE IF NOT EXISTS `tbfilme` (
  `idFilme` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) DEFAULT NULL,
  `diretor` varchar(50) DEFAULT NULL,
  `duracao` varchar(50) NOT NULL,
  `descricao` varchar(500) DEFAULT NULL,
  `classificacao` varchar(100) NOT NULL,
  `ano` varchar(50) NOT NULL,
  `idGenero` int(11) DEFAULT NULL,
  `link` varchar(1000) NOT NULL,
  `img` varchar(1000) NOT NULL,
  PRIMARY KEY (`idFilme`),
  KEY `idGenero` (`idGenero`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbfilme`
--

INSERT INTO `tbfilme` (`idFilme`, `titulo`, `diretor`, `duracao`, `descricao`, `classificacao`, `ano`, `idGenero`, `link`, `img`) VALUES
(2, 'Super Mario Bros. O Filme', 'Aaron Horvath, Michael Jelenic', '', 'Mario é um encanador junto com seu irmão Luigi. Um dia, eles vão parar no reino dos cogumelos, governado pela Princesa Peach, mas ameaçado pelo rei dos Koopas, que faz de tudo para conseguir reinar em todos os lugares', '', '', 1, 'https://www.youtube.com/embed/Cb4WV4aXBpk', ''),
(3, 'Velozes e Furiosos 10', 'Louis Leterrier', '', 'Dom Toretto e sua família devem lidar com o adversário mais letal que já enfrentaram. Alimentada pela vingança, uma ameaça terrível emerge das sombras do passado para destruir o mundo de Dom e todos que ele ama.', '', '', 1, 'https://www.youtube.com/embed/a1w9x5U88jU', ''),
(4, 'Guardiões da Galáxia - Vol. 3', 'James Gunn', '', 'Agora já conhecidos como os Guardiões da Galáxia, os guerreiros viajam ao longo do cosmos e lutam para manter sua nova família unida. Enquanto isso tentam desvendar os mistérios da verdadeira paternidade de Peter Quill (Chris Pratt). compatível com App Mo', '', '', 1, 'https://www.youtube.com/embed/d1yNc9skssk', ''),
(8, 'Homem-Aranha no Aranhaverso', ' Peter Ramsey, Bob Persichetti, Rodney Rothman', '', 'Após ser atingido por uma teia radioativa, Miles Morales, um jovem negro do Brooklyn, se torna o Homem-Aranha, inspirado no legado do já falecido Peter Parker. Entretanto, ao visitar o túmulo de seu ídolo em uma noite chuvosa, ele é surpreendido com a presença do próprio Peter, vestindo o traje do herói por baixo de um sobretudo. A surpresa fica ainda maior quando Miles descobre que ele veio de uma dimensão paralela, assim como outras versões do Homem-Aranha.', '', '', 7, 'https://www.youtube.com/embed/LZBlXkDvhh4', ''),
(9, 'A Morte do Demônio: A Ascensão', ' Lee Cronin', '', 'Uma mulher se encontra em uma luta por sua vida quando um livro antigo dá à luz demônios sedentos por sangue. Eles se tornam cada vez mais agressivos em um prédio em Los Angeles.', '', '', 13, 'https://www.youtube.com/embed/5n9v35xgRpw', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbgenero`
--

DROP TABLE IF EXISTS `tbgenero`;
CREATE TABLE IF NOT EXISTS `tbgenero` (
  `idGenero` int(11) NOT NULL AUTO_INCREMENT,
  `genero` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`idGenero`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbgenero`
--

INSERT INTO `tbgenero` (`idGenero`, `genero`) VALUES
(1, 'Ação'),
(2, 'Comédia'),
(3, 'Drama'),
(4, 'Animação'),
(5, 'Aventura'),
(6, 'Drama'),
(7, 'Fantasia'),
(8, 'Ficção científica'),
(9, 'Musical'),
(10, 'Policial'),
(11, 'Romance'),
(12, 'Suspence'),
(13, 'Terror');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;